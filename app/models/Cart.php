<?php namespace App\Models;

class Cart extends \Eloquent {
	protected $fillable = ['name', 'count', 'price'];

    protected $table = 'carts';

//    public $rules = [
//        'name' => 'required',
//        'registration_number' => 'regex:/^[A-Z]{3}[0-9]{4}$/|required',
//        'engine_capacity' => 'required|integer',
//        'mileage_counter' => 'required|integer',
//        'last_oil_change' =>'required|date|date_format:Y-m-d',
//    ];

    public function format($price)
    {
        return number_format($price, 2, ',', ' ');
    }
}