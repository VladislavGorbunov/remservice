@extends('layouts.admin')

@section('content')
    <x-admin.navbar/>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <x-admin.sidebar/>
            </div>
            <div class="col-12 col-md-9">
                <x-admin.all-subcategory :subcategories="$subcategories" :message="$message"/>
            </div>
        </div>
    </div>

@endsection