
@extends('layouts.app')

@section('content')
    <x-headers :regionNameIn="$regionNameIn" :regionName="$regionName"/>

    <div class="container">
        <x-advantages/>
        <x-catalog-of-services/>
        <x-top-masters/>
    </div>
    <x-footer/>
@endsection