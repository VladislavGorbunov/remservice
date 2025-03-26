
@extends('layouts.app')

@section('content')
    <x-headers-short :headerTitle="$headerTitle" :regionName="$regionName"/>
    <style>
/* 
        dl, ol, ul {
            margin-top: 1rem !important;
            margin-bottom: 1rem;
        } */

        .avatar-input {
            width: 290px;
            height: 290px;
            border-radius: 10px;
            background: #ccc;
        }
    </style>

    <div class="container">
        <div class="col-12 col-md-8 mx-auto">
        
        @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- <h3 class="mt-5 mb-4 text-center">Личные данные</h3> -->
    
        <form action="" method="POST" enctype="multipart/form-data" class="form mt-5">
        @csrf
        <div class="row">
            <!-- <x-form-registration.input-avatar/> -->
            <x-form-registration.profile-info :regions="$regions"/>
            <!-- <x-form-registration.categories :categories="$categories"/> -->
            <!-- <x-form-registration.dop-info/> -->
    
            
        </div>

        <div class="col-3 d-block mx-auto">
                <button type="submit" class="btn btn-primary-registr mt-3">Зарегистрироваться</button>
            </div>

        </form>
    </div>
    </div>


    <script>
        const avatar_input = document.querySelector('.avatar-input')
        const input = document.createElement('input')
        const form = document.querySelector('.form')

        input.setAttribute('type', 'file')
        input.setAttribute('name', 'avatar')
        input.setAttribute('value', '1231')
        input.setAttribute('hidden', true)
        form.prepend(input)
        avatar_input.addEventListener("click", openInput)

        input.addEventListener("change", uploadAvatar)

        function openInput() {
            input.click()
        }

        function uploadAvatar() {
            
            let response = fetch('/api/avatar-upload', {
                method: 'POST',
                body: 123
            })

            let data = response.then(res => res.json())

            data.then(res => console.log(res))

            console.log(URL.createObjectURL(input.files[0]))
            avatar_input.style.background = `url(${URL.createObjectURL(input.files[0])})`
            avatar_input.style.backgroundSize = "cover"
        }

        
    </script>
    <x-footer/>
@endsection


