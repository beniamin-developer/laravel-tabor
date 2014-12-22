<?php namespace LaravelTabor\Repositories;

interface VehicleRepositoryInterface {
    public function all();

    public function find($id);

    public function create($data);

    public function update($id, $data);
}