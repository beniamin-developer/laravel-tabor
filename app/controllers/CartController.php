<?php

class CartController extends \BaseController {

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		return View::make('cart.show')->with('all', Cart::all())->with('get', Cart::get(1))->with('total', Cart::total())->with('count', Cart::count())->with('count_true', Cart::count(true));
	}


}
