<?php namespace LaravelTabor\Repositories\Eloquent;

use LaravelTabor\Repositories\VersioningVehicleRepositoryInterface;

class VersioningVehicleRepository implements VersioningVehicleRepositoryInterface {
    /**
     * @var \Vehicle
     */
    protected $model;

    public function __construct(\VersioningVehicle $model)
    {
        $this->model = $model;
    }

    public function find($id)
    {
        return $this->model->where('vehicle_id', $id)->get();
    }

    public function create($item, $data)
    {
        $versioning = $this->model->create($data);
        $versioning->Vehicle()->associate($item)->save();
    }
}