<?php namespace LaravelTabor\Repositories;

interface VehicleRepositoryInterface {
    public function all();

    public function getById($id);

    public function getByIdWithOilChange($id);

    public function create($data);
}