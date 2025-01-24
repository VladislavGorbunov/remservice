
@extends('layouts.app')

@section('content')
    <x-headers-short :headerTitle="$headerTitle" :regionName="$regionName"/>

    <div class="col-12 col-md-5 d-block mx-auto mt-3">
        
    <h5 class="text-center mt-4">Заполните форму регистрации</h5>

    <div class="mb-3">
        <label class="form-label">Ваше имя:</label>
        <input type="text" class="form-control" placeholder="">
    </div>

    <div class="mb-3">
        <label class="form-label">Фамилия:</label>
        <input type="text" class="form-control" placeholder="">
    </div>

    <div class="mb-3">
        <label class="form-label">Электронная почта: (<small>На эту почту будут приходить заявки</small>)</label>
        <input type="email" class="form-control" placeholder="">
    </div>

    <div class="mb-3">
        <label class="form-label">Номер телефона: (<small>На этот номер будут приходить заявки</small>)</label>
        <input type="text" class="form-control" placeholder="">
    </div>

    <div class="mb-3">
        <label class="form-label">Опыт ремонта:</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>1 год</option>
            <option value="1">2 года</option>
            <option value="2">3 года</option>
            <option value="3">4 года</option>
            <option value="3">Более 5 лет</option>
            <option value="3">Более 10 лет</option>
            <option value="3">Более 15 лет</option>
            <option value="3">Более 20 лет</option>
        </select>
    </div>

    
    <div class="mb-3">
        <label class="form-label">Город:</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Москва</option>
            <option value="1">Санкт-Петербург</option>
        </select>
    </div>

    

    

    </div>
    <x-footer/>
@endsection