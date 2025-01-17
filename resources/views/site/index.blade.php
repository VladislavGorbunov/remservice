
@extends('layouts.app')

@section('content')
    <x-headers :region="$region"/>

    <div class="container">
        <x-advantages/>
        <x-catalog-of-services/>
        <x-top-masters/>
    </div>
    <x-footer/>
@endsection