{{ Form::model($vehicle, array('route' => array('vehicle.update', $vehicle->id), 'method' => 'PUT')) }}
<div class="row">
    <div class="form-group col-xs-4">
        {{ Form::label(Lang::get('vehicle.name')) }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
        {{ $errors->first('name') }}
    </div>
</div>

<div class="row">
    <div class="form-group col-xs-4">
        {{ Form::label(Lang::get('vehicle.registration_number')) }}
        {{ Form::text('registration_number', null, array('class' => 'form-control')) }}
        {{ $errors->first('registration_number') }}
    </div>
</div>

<div class="row">
    <div class="form-group col-xs-4">
        {{ Form::label(Lang::get('vehicle.engine_capacity')) }}
        {{ Form::text('engine_capacity', null, array('class' => 'form-control')) }}
        {{ $errors->first('engine_capacity') }}
    </div>
</div>

<div class="row">
    <div class="form-group col-xs-4">
        {{ Form::label(Lang::get('vehicle.mileage_counter')) }}
        {{ Form::text('mileage_counter', null, array('class' => 'form-control')) }}
        {{ $errors->first('mileage_counter') }}
    </div>
</div>

<div class="row">
    <div class="form-group col-xs-4">
        {{ Form::submit(Lang::get('vehicle.save'), array('class' => 'btn btn-primary btn-sm')) }}
    </div>
</div>
{{ Form::close() }}