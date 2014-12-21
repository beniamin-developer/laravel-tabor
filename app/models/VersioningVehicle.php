<?php

class VersioningVehicle extends \Eloquent {
	protected $fillable = ['name', 'registration_number', 'engine_capacity', 'mileage_counter', 'vehicle_id'];

    protected $table = 'versioning_vehicles';

    public function vehicle()
    {
        return $this->belongsTo('Vehicle');
    }
}