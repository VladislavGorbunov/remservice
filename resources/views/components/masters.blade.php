<div class="container">
    <h2 class="text-center mt-5 mb-1"><span class="gradient-text">Частные мастера в вашем городе</span></h2>
    
    @foreach ($masters as $master) 
        <div class="col-12 master-block border rounded p-4 mt-4 mb-4">
            <div class="row">
                <div class="col-12 col-md-3 p-2">
                    <img src="https://sun9-4.userapi.com/6jUPwdybruk1ernfh0nhm1RCu2eSgHNMmDCCbg/rxQ8q3SOoDo.jpg" class="img-fluid rounded">
                </div>

                <div class="col-12 col-md-6 px-3">
                    <span class="master-name">{{ $master['name'] }} {{ $master['lastname'] }}</span>
                    <span class="d-block mt-2 mb-2">Город: <b>{{ $master['region'] }}</b></span>
                    <span class="d-block mt-2 mb-2">Опыт ремонта: <b>{{ $master['experience'] ? $master['experience'] : '-'}}</b> лет</span>
        
                    <span class="d-block mt-2 mb-2">{{ $master['aboutme'] }}</span>
                    
                    
                    <!-- {{ $master['phone'] }} -->
                    <div class="mb-3">
                    <p class="mb-0 mt-2"><b>Ремонтирую:</b></p>
                    @foreach ($master['categories'] as $category) 
                        <span class="master-category-blocks">
                            <a href="{{ $category['slug'] }}">{{ $category['name'] }}</a>
                        </span>
                    @endforeach
                    </div>

                </div>
                    
                <div class="col-12 col-md-3 px-3">
                    <p>Рейтинг мастера: <b>4.9</b></p>
                    <p>Отзывов клиентов: <b>74</b></p>
                    <p class="">Выезд мастера: <b>Бесплатно</b></p>
                    <p class="">Диагностика: <b>500 руб.</b></p>
                    <button class="btn phone-button w-100 mt-1"><i class="bi bi-telephone"></i> Показать телефон</button>
                    <a href="" class="btn more-detailed-button w-100 mt-3"><i class="bi bi-eye"></i> Подробнее о мастере</a>
                </div>
                
            </div>
        </div>
    @endforeach
</div>
