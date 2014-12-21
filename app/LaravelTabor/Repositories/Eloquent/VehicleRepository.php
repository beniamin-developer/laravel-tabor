<?php namespace LaravelTabor\Repositories\Eloquent;

use LaravelTabor\Repositories\VehicleRepositoryInterface;

class VehicleRepository implements VehicleRepositoryInterface {
    /**
     * @var \Vehicle
     */
    protected $model;

    /**
     * @var \VersioningVehicle
     */
    protected $model_versioning;

    public function __construct(\Vehicle $model, \VersioningVehicle $model_versioning)
    {
        $this->model = $model;
        $this->model_versioning = $model_versioning;
    }

    public function all()
    {
//        $item = $this->model->find(1);
//        $replicate = $item->replicate();
//
//        unset($replicate['created_at'], $replicate['updated_at']);
//        $data = json_decode($replicate, true);
//
//        $versioning = $this->model_versioning->create($data);
//        $versioning->Vehicle()->associate($item)->save();


        return $this->model->all();
    }

    public function getById($id)
    {
        //return $this->model->find($id);
    }

    public function getByIdWithOilChange($id)
    {
        //return $this->model->find($id)->with(array('oilChange'))->first();
    }

    public function create($data)
    {
        return $this->model->create($data);
    }
}