<div class="container">
    <h2 class="text-center mt-4 mb-4">Частные мастера в вашем городе</h2>

    @foreach ($masters as $master) 
        <div class="col-12 border rounded p-3 mt-4">
            <div class="row">
                <div class="col-12 col-md-3">
                    <img src="https://sun9-4.userapi.com/6jUPwdybruk1ernfh0nhm1RCu2eSgHNMmDCCbg/rxQ8q3SOoDo.jpg" class="img-fluid rounded">
                </div>

                <div class="col-12 col-md-6">
                    <h4>{{ $master->user_name }} {{ $master->user_lastname }}</h4>
                    <span class="d-block mt-2 mb-2">Рейтинг: <b>4.9 (143 отзыва)</b></span>
                    <span class="d-block mt-2 mb-2">Город: <b>{{ $master->region_name }}</b></span>
                    <span class="d-block mt-2 mb-2">Опыт ремонта: <b>более 10 лет</b></span>
        
                    <span class="d-block mt-2 mb-2">{{ $master->user_aboutme }}</span>
                    
                    
                    {{ $master->user_phone }}
                </div>

                <div class="col-12 col-md-3">
                    <p class="mt-1"><b>Выезд:</b> Бесплатно</p>
                    <p class="mt-1"><b>Диагностика:</b> Бесплатно*</p>
                    <p class="mt-1"><b>Гарантия:</b> 1 год</p>
                    <button class="btn phone-button w-100 mt-2"><i class="bi bi-telephone-fill"></i> Телефон</button>
                    
                </div>
                
            </div>
        </div>
    @endforeach
</div>
