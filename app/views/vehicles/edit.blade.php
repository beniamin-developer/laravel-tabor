@extends('layouts.master')

@section('content')
    <div class=".col-md-6">
        <h2>{{ Lang::get('vehicle.edit_vehicle') }}</h2>

        @if(count($versioningVehicles) > 0)
            <table class="table">
                <caption><h4>{{ Lang::get('vehicle.history_vehicle') }} {{ $vehicle->name }}</h4></caption>
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{ Lang::get('vehicle.name') }}</th>
                    <th>{{ Lang::get('vehicle.registration_number') }}</th>
                    <th>{{ Lang::get('vehicle.last_oil_change') }}</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($versioningVehicles as $key => $versioningVehicle)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $versioningVehicle->name }}</td>
                            <td>{{ $versioningVehicle->registration_number }}</td>
                            <td>{{ $versioningVehicle->last_oil_change }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        @include('forms.edit-vehicle')
    </div>
@stop