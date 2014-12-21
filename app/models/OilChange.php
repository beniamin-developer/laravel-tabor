<?php

class OilChange extends \Eloquent {
	protected $fillable = [];

    protected $table = 'oil_changes';

    public function vehicles()
    {
        return $this->belongsTo('Vehicle');
    }
}