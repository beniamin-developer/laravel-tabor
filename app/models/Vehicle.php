<?php

class Vehicle extends \Eloquent {
	protected $fillable = ['name', 'registration_number', 'engine_capacity', 'mileage_counter', 'last_oil_change'];

    protected $table = 'vehicles';

    public function versioningVehicle()
    {
        return $this->hasMany('VersioningVehicle');
    }

    public $rules = [
        'name' => 'required',
        'registration_number' => 'regex:/^[A-Z]{3}[0-9]{4}$/|required',
        'engine_capacity' => 'required|integer',
        'mileage_counter' => 'required|integer',
        'last_oil_change' =>'required|date|date_format:Y-m-d',
    ];
}