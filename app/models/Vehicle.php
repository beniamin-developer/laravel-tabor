<?php

class Vehicle extends \Eloquent {
	protected $fillable = ['name', 'registration_number', 'engine_capacity', 'mileage_counter'];

    protected $table = 'vehicles';

    public function versioningVehicle()
    {
        return $this->hasMany('VersioningVehicle');
    }

    public $rules = [
        'name' => 'required',
        'registration_number' => 'required|unique:vehicles,registration_number',
        'engine_capacity' => 'required|integer',
        'mileage_counter' => 'required|integer',
        'last_oil_change' =>'required',
    ];
}