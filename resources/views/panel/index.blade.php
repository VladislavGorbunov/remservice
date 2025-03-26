@extends('layouts.panel')

@section('content')
    <x-panel.navbar/>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <x-panel.sidebar/>
            </div>
            <div class="col-12 col-md-9">
                <x-admin.index :users="$users"/>
            </div>
        </div>
    </div>

@endsection