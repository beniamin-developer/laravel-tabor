<?php namespace LaravelTabor\Repositories\Eloquent;

use LaravelTabor\Repositories\VehicleRepositoryInterface;
use LaravelTabor\Repositories\VersioningVehicleRepositoryInterface;

class VehicleRepository implements VehicleRepositoryInterface {
    /**
     * @var \Vehicle
     */
    protected $model;

    /**
     * @var \VersioningVehicle
     */
    protected $model_versioning;

    /**
     * @var VersioningVehicleRepositoryInterface
     */
    protected $versioningVehicleRepository;

    public function __construct(
        \Vehicle $model,
        \VersioningVehicle $model_versioning,
        VersioningVehicleRepositoryInterface $versioningVehicleRepository
    )
    {
        $this->model = $model;
        $this->model_versioning = $model_versioning;
        $this->versioningVehicleRepository = $versioningVehicleRepository;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data)
    {
        $item = $this->model->find($id);

        /**
         * Replicate edit row
         */
        $replicate = $item->replicate();
        unset($replicate['created_at'], $replicate['updated_at']);
        $replicateData = json_decode($replicate, true);

        /**
         * Save replicate row
         */
        $this->versioningVehicleRepository->create($item, $replicateData);

        /**
         * Save edit row
         */
        $item->name = $data['name'];
        $item->save($data);
    }
}