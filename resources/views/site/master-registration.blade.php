
@extends('layouts.app')

@section('content')
    <x-headers-short :headerTitle="$headerTitle" :regionName="$regionName"/>

    <div class="col-12 col-md-5 d-block mx-auto mt-3">
        
    <h5 class="text-center">Заполните поля ниже</h5>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Фамилия</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    </div>
    <x-footer/>
@endsection