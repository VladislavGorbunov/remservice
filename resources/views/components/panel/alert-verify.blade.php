<style>
    .alert-phone {
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

    <div class="row">
        <div class="col-12 col-md-3">
            <div class="alert-phone p-3">
            @if (!$user->phone_verify)
                Подтвердите номер телефона: {{ $user->phone }} <hr> 
                
                @if (!$user->phone_verify)
                    <a href="">Подтвердить</a>
                @else
                    <p>Телефон подтверждён</p>
                @endif
            @endif
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="alert-phone p-3">
            @if (!$user->phone_verify)
                Расскажите будущим клиентам о себе и о вашем опыте в ремонте техники. <hr> <a href="">Рассказать</a>
            @endif
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="alert-phone p-3">
            @if (!$user->phone_verify)
                Добавьте перечень техники, ремонт которой вы осуществляете. <hr> <a href="">Добавить</a>
            @endif
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="alert-phone p-3">
            @if (!$user->phone_verify)
                Подключите пакет "Профи", чтобы получать больше заявок на ремонт. <hr> <a href="">Подключить</a>
            @endif
            </div>
        </div>
        
    </div>
