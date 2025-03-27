@extends('layouts.panel')

@section('content')
    <x-panel.navbar/>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 mt-4">
                <x-panel.sidebar/>
            </div>
            
            <div class="col-12 col-md-9 mt-4">
                <x-panel.message :message="$message"/>
                <x-panel.alert-verify :user="$user" :categoriesSelectCount="$categories_select_count"/>
                <x-panel.index />
            </div>
        </div>
    </div>

@endsection