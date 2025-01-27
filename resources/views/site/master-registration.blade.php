
@extends('layouts.app')

@section('content')
    <x-headers-short :headerTitle="$headerTitle" :regionName="$regionName"/>
    <div class="container">
    <div class="col-12 col-md-12 d-block mx-auto mt-3">
        
    <h3 class="mt-4 mb-3">Личные данные</h3>
    <form action="" method="POST" >
    <div class="row">
        <style>
            .avatar-input {
                width: 200px;
                height: 200px;
                border-radius: 10px;
                background: #ccc;
            }
        </style>

    <div class="col-12 col-md-2">
        <div class="avatar-input mt-2"></div>
        <input type="file" name="avatar" class="mt-3">
    </div>

    <script>
        const avatar_input = document.querySelector('.avatar-input')
        const input = document.createElement('input')
        input.setAttribute('type', 'file')
        input.setAttribute('name', 'avatar')

        avatar_input.addEventListener("click", openInput)

        input.addEventListener("change", uploadAvatar)

        function openInput() {
            input.click()
        }

        function uploadAvatar() {
            avatar_input.style.background = "#222"
        }

        
    </script>

    <div class="col-12 col-md-5">
        <div class="mb-3">
            <label class="form-label"><b>Ваше имя:</b></label>
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="mb-3">
            <label class="form-label"><b>Фамилия:</b></label>
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="mb-3">
            <label class="form-label"><b>Город:</b></label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Москва</option>
                <option value="1">Санкт-Петербург</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label"><b>Сколько вам лет:</b></label>
            <input type="number" class="form-control" placeholder="">
        </div>
    </div>


    <div class="col-12 col-md-5">
        <div class="mb-3">
            <label class="form-label"><b>Электронная почта:</b> (<small>На эту почту будут приходить заявки</small>)</label>
            <input type="email" class="form-control" placeholder="">
        </div>

        <div class="mb-3">
            <label class="form-label"><b>Номер телефона:</b> (<small>На этот номер будут приходить заявки</small>)</label>
            <input type="text" class="form-control" placeholder="">
        </div>

        <div class="mb-3">
        <label class="form-label"><b>Опыт ремонта:</b></label>
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
            <label class="form-label"><b>Образование:</b></label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Среднее-специальное</option>
                <option value="1">Среднее-профессиональное</option>
                <option value="1">Высшее</option>
            </select>
        </div>
    </div>
    </div>

    <div class="row mb-3">
    <h3 class="mt-3">Направления ремонта</h3>
    @foreach ($categories as $category) 

    <div class="col-12 col-md-3 mt-3 mb-3">
        <p class="fs-6 mb-1"><strong>{{$category->name}}</strong></p>
        
            @foreach ($category->subcategories as $subcat) 
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    
                        {{$subcat->name}}
                    </label>
                </div>   
            @endforeach
    </div>
        
    @endforeach
    </div>


    <h3 class="mt-3 mb-3">Дополнительная информация</h3>

    <div class="row">
        <div class="col-12 col-md-4 mb-3">
            <label class="form-label"><b>Бесплатный выезд на дом:</b></label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Да</option>
                <option value="1">Нет</option>
            </select>
        </div>

        <div class="col-12 col-md-4 mb-3">
            <label class="form-label"><b>Бесплатная диагностика:</b></label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Да</option>
                <option value="1">Нет</option>
            </select>
        </div>

        <div class="col-12 col-md-4 mb-3">
            <label class="form-label"><b>Гарантия на ремонт:</b></label>
            <select class="form-select" aria-label="Default select example">
                <option selected>1 год</option>
                <option value="1">2 года</option>
            </select>
        </div>
    </div>

    <div class="col-3 d-block mx-auto">
        <button type="submit" class="btn btn-primary-registr mt-3">Зарегистрироваться</button>
    </div>

    
    

    

    
    </div>
    </div>
    <x-footer/>
@endsection