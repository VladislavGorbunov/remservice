<div class="container">
    <h2 class="text-center mt-4 mb-1">Рейтинг мастеров вашего города</h2>
    <p class="text-center m-0"><i class="bi bi-question-circle"></i> Узнать как мы строим наш рейтинг можно <a href="" target="_blank">по этой ссылке</a></p>



    @foreach ($masters as $master) 
        <div class="col-12 master-block border rounded p-4 mt-4 mb-4">
            <div class="row">
                <div class="col-12 col-md-3 p-2">
                    <img src="https://sun9-4.userapi.com/6jUPwdybruk1ernfh0nhm1RCu2eSgHNMmDCCbg/rxQ8q3SOoDo.jpg" class="img-fluid rounded">
                </div>

                <div class="col-12 col-md-6 px-3">
                    <span class="master-name">{{ $master['name'] }} {{ $master['lastname'] }}</span>
                    <span class="d-block mt-2 mb-2">Город: <b>{{ $master['region'] }}</b></span>
                    <span class="d-block mt-2 mb-2">Опыт ремонта: <b>{{ $master['experience'] }}</b></span>
        
                    <span class="d-block mt-2 mb-2">{{ $master['aboutme'] }}</span>
                    
                    
                    <!-- {{ $master['phone'] }} -->
                    <div class="mb-3">
                    <p class="mb-0 mt-2"><b>Ремонтирую:</b></p>
                    @foreach ($master['categories'] as $category) 
                        <span class="master-category-blocks">
                            <a href="{{ $category['slug'] }}"><i class="bi bi-list d-none d-md-inline-block"></i> {{ $category['name'] }}</a>
                        </span>
                    @endforeach

                    </div>

                </div>
                    
                <div class="col-12 col-md-3 px-3">
                    <p>Рейтинг мастера: <b>{{ $master['avg_estimation'] ? $master['avg_estimation'] : 0 }} </b> <i class="bi bi-star-fill"></i></p>
                    <p>Отзывов: <b>{{ $master['reviews_count'] }}</b> <a href="" class="view-review-link"><i class="bi bi-arrow-right"></i> Читать отзывы</a></p>
                    <p class="">Выезд мастера: <b>Бесплатно</b></p>
                    <p class="">Диагностика: <b>500 руб.</b></p>
                    <p class="">Срочный выезд: <b>Да</b></p>
                    <button class="btn phone-button w-100 mt-1" data-id="{{ $master['id'] }}"><i class="bi bi-telephone"></i> Показать телефон</button>
                    <a href="/master/{{ $master['id'] }}" class="btn more-detailed-button w-100 mt-3">Подробнее о мастере</a>
                </div>
                
            </div>
        </div>
    @endforeach
</div>




<script>
    const btnGetPhone = document.querySelectorAll('.phone-button')

    btnGetPhone.forEach((btn) => {
        btn.addEventListener('click', (e) => {

            const master = {
                id: e.target.getAttribute('data-id')
            }

            const options = {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    "Content-Type": "application/json",
                },
                
                body: JSON.stringify(master),
            }

            e.target.innerHTML = '<img src="/images/spinning-dots.svg" width="20">'

            let res = fetch('/get-phone', options)
            .then(data => data.json())
            .then((phone) =>  {
                e.target.innerHTML = phone.phone
            })
            
        })
    })
</script>