<?php

use LaravelTabor\Repositories\VehicleRepositoryInterface;
use LaravelTabor\Repositories\VersioningVehicleRepositoryInterface;

class VehiclesController extends \BaseController {

    /**
     * @var VehicleRepositoryInterface
     */
    private $vehicleRepository;

    /**
     * @var Vehicle
     */
    private $vehicle;

	/**
	 * @var VersioningVehicleRepositoryInterface
	 */
	private $versioningVehicleRepository;

    public function __construct(
		VehicleRepositoryInterface $vehicleRepository,
		Vehicle $vehicle,
		VersioningVehicleRepositoryInterface $versioningVehicleRepository
	)
    {
        $this->vehicleRepository = $vehicleRepository;
        $this->vehicle = $vehicle;
		$this->versioningVehicleRepository = $versioningVehicleRepository;
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

        $validator = Validator::make($data, $this->vehicle->rules);

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
        // delete
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vehicle = $this->vehicleRepository->find($id);
		$versioningVehicles = $this->versioningVehicleRepository->find($id);

		return View::make('vehicles.edit')->with('vehicle', $vehicle)->with('versioningVehicles', $versioningVehicles);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$data = Input::all();

		$validator = Validator::make($data, $this->vehicle->rules);

		if($validator->fails()) {
			return Redirect::route('vehicle.edit', array('id' => $id))->withErrors($validator)->withInput();
		}

		$this->vehicleRepository->update($id, $data);

		return Redirect::route('vehicle.index')->with('message', 'Zedytowano pojazd');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
    {
        $this->versioningVehicleRepository->destroy($id);

        $this->vehicleRepository->destroy($id);

        return Redirect::route('vehicle.index');
	}


}
