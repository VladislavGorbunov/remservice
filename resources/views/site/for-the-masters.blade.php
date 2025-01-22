
@extends('layouts.app')

@section('content')
    <div class="container">
    <span class="brand-big d-block mx-auto"><span style="color:#463ee4">ЗА</span>МАСТЕРОМ</span>
    <p class="logo-bottom-text-big">Маркетплейс по ремонту техники</p>

    <div class="row">
        <div class="col-12 col-md-6">
            <h1 class="mt-5"><span style="color:#463ee4">Зарабатывайте</span> больше, занимаясь делом в котором вы настоящий мастер!</h1>
            <p class="mt-5">
                <b>Для клиентов это</b> возможность быстро и удобно находить
                специалистов по ремонту различной бытовой техники.</p>
                <p><b>Для мастеров это</b> отличная возможность получать больше заявок на ремонт, а следовательно 
                и больше зарабатывать!
            </p>

            <a href="/for-the-masters/registration" class="btn btn-primary-registr mb-5">Зарегистрироваться</a>
        </div>
        <div class="col-12 col-md-6">
            <img src="https://sdelkaveka.com/_bd/14/72433738.jpg" class="img-fluid">
        </div>
    </div>

    <h2 class="text-center mt-3 mb-3">Как это работает?</h2>

    <ul class="list-group list-group-flush mb-4">
    <li class="list-group-item">
        <h4 class="text-center mt-3">1. Регистрация на сайте</h4>
        <p class="text-center">Вы регистрируетесь на нашем сайте в качестве специалиста. Заполняете поля контактов, выбираете категории бытовой техники,
             ремонт которой Вы осуществляете, указываете некоторые уточняющие данные. Обычно регистрация занимает <span style="color:#463ee4">не более 5 минут</span>.
        </p>
    </li>
    <li class="list-group-item">
    <h4 class="text-center mt-3">2. Показ профиля</h4>
        <p class="text-center">После регистрации Ваш профиль станет виден на нашем сайте. Посетители сайта будут видеть Ваш профиль
            и <span style="color:#463ee4">смогут оставить заявку на ремонт</span>. Ранжирование Вашего профиля на сайте зависит от рейтинга и отзывов полученных от Ваших клиентов, чем выше 
            Ваш рейтинг и чем больше у Вас положительных отзывов, тем выше будет показан Ваш профиль, а следовательно его увидят больше потенциальных клиентов.
        </p>
    </li>

    <li class="list-group-item">
    <h4 class="text-center mt-3">3. Приём заявок</h4>
        <p class="text-center">Получайте заявки на ремонт бытовой техники вашего направления посредствам <span style="color:#463ee4">СМС и Email</span>.
            После того как посетитель нашего сайта выберет ваш профиль, вам придёт СМС с его контактами для связи, а так же краткое описание поломки.
            Позвоните клиенту, договоритесь о дате и времени вашего визита для проведения диагностики и ремонта.
        </p>
    </li>

    <li class="list-group-item">
    <h4 class="text-center mt-3">4. Выполнение ремонта и получение оплаты</h4>
        <p class="text-center">
            Выполните ремонт и получите оплату от клиента. 
        </p>
    </li>
    
</ul>
    
    <a href="/for-the-masters/registration" class="btn btn-primary-registr d-block mx-auto mb-5">Зарегистрироваться</a>
    
</div>
@endsection