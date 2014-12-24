<?php namespace LaravelTabor\Repositories;

interface CartRepositoryInterface {
    public function all();

    public function find($id);

    public function total();

    public function count($quantity);

    public function create($data);

    public function update($id, $data);
}