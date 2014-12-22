@extends('layouts.master')

@section('content')
    <div class=".col-md-12">
        <h2>Edycja pojazdu</h2>

        <h3>Historia pojazdu {{ $vehicle->name }}</h3>
        @if(count($versioningVehicles) > 0)
            @foreach($versioningVehicles as $versioningVehicle)
                {{ $versioningVehicle->name }}
            @endforeach
        @endif

        @include('forms.edit-vehicle')
    </div>
@stop