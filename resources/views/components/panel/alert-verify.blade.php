<style>
    .alert {
        background:rgb(238, 245, 255);
        border-radius: 10px;
        font-size: 14px;
    }

    hr {
        color: rgb(195, 201, 210);
        margin: 8px 0px;
    }

    a {
        text-decoration: none !important;
    }
</style>
    <p><b>Чтобы профиль был активен и виден в поиске, выполните условия ниже:</b></p>
    <div class="row">
        
        <div class="col-12 col-md-4">
            <div class="alert p-3">
                Подтвердите телефон, мы отправим проверочный код на {{ $user->phone }} <hr> 
                
                @if (!$user->phone_verify)
                    <a href="">Подтвердить телефон</a>
                @else
                    <span class="text-success"><i class="bi bi-check2-all"></i> Телефон подтверждён</span>
                @endif
            </div>
        </div>

        <div class="col-12 col-md-4 mb-2">
            <div class="alert p-3">
                Расскажите будущим клиентам о себе и о вашем опыте в ремонте техники. <hr> 
                @if (!$user->aboutme || !$user->experience)
                    <a href="{{ route('master-info') }}">Рассказать</a>
                @else
                    <span class="text-success"><i class="bi bi-check2-all"></i> Отлично! Данные заполнены</span>
                @endif
            </div>
        </div>

        <div class="col-12 col-md-4 mb-2">
            <div class="alert p-3">
                Добавьте перечень техники, ремонт которой вы осуществляете. <hr> <a href="{{ route('add-technic') }}">Добавить</a>
            </div>
        </div>
        
