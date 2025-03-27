@extends('layouts.panel')

@section('content')
    <x-panel.navbar/>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 mt-4">
                <x-panel.sidebar/>
            </div>
            <div class="col-12 col-md-9 mt-4">
                <x-panel.info :user="$user" :regions="$regions"/>
            </div>
        </div>
    </div>

@endsection
