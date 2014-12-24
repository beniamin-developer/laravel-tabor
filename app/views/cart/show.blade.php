@extends('layouts.master')

@section('content')
    <h1>Cart all</h1>
    @foreach($all as $all)
        {{ $all->name }}
    @endforeach

    <h1>Cart get id 1</h1>
    {{ $get->name }}

    <h1>Cart Total</h1>
    {{ $total }}

    <h1>Cart count</h1>
    {{ $count }}

    <h1>Cart count true</h1>
    {{ $count_true }}
@stop