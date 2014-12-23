@extends('layouts.master')

@section('content')
    <div class=".col-md-12">
        {{ HTML::linkRoute('vehicle.create', Lang::get('action.new_vehicle'), array(), array('class' => 'btn btn-primary btn-sm')) }}
    </div>

    <div class=".col-md-12">
        @if(count($vehicles) > 0)
            <table class="table table-bordered">
                <thead>
                    <th>{{ Lang::get('vehicle.name') }}</th>
                    <th>{{ Lang::get('vehicle.registration_number') }}</th>
                    <th>{{ Lang::get('vehicle.engine_capacity') }}</th>
                    <th>{{ Lang::get('vehicle.mileage_counter') }}</th>
                    <th></th>
                </thead>

                @foreach($vehicles as $vehicle)
                 <tbody>
                    <td>{{ $vehicle->name }}</td>
                    <td>{{ $vehicle->registration_number }}</td>
                    <td>{{ $vehicle->engine_capacity }}</td>
                    <td>{{ $vehicle->mileage_counter }}</td>
                    <td>
                        {{ HTML::linkRoute('vehicle.edit', Lang::get('action.edit'), array($vehicle->id), array('class' => 'btn-edit btn btn-primary btn-sm pull-left')) }}
                        {{ Form::open(['route' => ['vehicle.destroy', $vehicle->id], 'method' => 'delete']) }}
                            {{ Form::submit(Lang::get('action.destroy'), array('class' => 'btn btn-primary btn-sm')) }}
                        {{ Form::close() }}
                    </td>
                </tbody>
                @endforeach
            </table>
        @endif
    </div>
@stop