<?php namespace LaravelTabor\Repositories;

interface VersioningVehicleRepositoryInterface {
    public function find($id);

    public function create($item, $data);
}