<?php namespace LaravelTabor\Facades;

interface CartInterface {
    public function all();

    public function get($id);

    public function total();

    public function count($quantity = false);

    public function add();
} 