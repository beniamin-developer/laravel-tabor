<?php

use LaravelTabor\Repositories\VehicleRepositoryInterface;

class VehiclesController extends \BaseController {

    /**
     * @var VehicleRepositoryInterface
     */
    private $vehicleRepository;

    /**
     * @var Vehicle
     */
    private $vehicle;

    public function __construct(VehicleRepositoryInterface $vehicleRepository, Vehicle $vehicle)
    {
        $this->vehicleRepository = $vehicleRepository;
        $this->vehicle = $vehicle;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $getVehicles = $this->vehicleRepository->all();

        return View::make('vehicles.index')->with('vehicles', $getVehicles);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $vehicle = new Vehicle();
		return View::make('vehicles.create')->with('vehicle', $vehicle);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = Input::all();

        $validator = Validator::make(Input::all(), $this->vehicle->rules);

        if($validator->fails()) {
            return Redirect::route('vehicle.create')->withErrors($validator)->withInput();
        }

        $this->vehicleRepository->create($data);

        return Redirect::route('vehicle.index')->with('message', 'vehicle_positive_save');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
