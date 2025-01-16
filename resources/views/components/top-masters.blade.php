<div class="mt-5 mb-5">
    <h2 class="text-center mt-4 mb-4">Топ-15 мастеров Москвы</h2>
    
    <div class="row gx-4">

    @for ($i = 0; $i < 15; $i++)
        <div class="col-12 col-md-4 mt-2 mb-4">
            <div class="badge-block">
                <div class="badge-free-exit"><i class="bi bi-house-add-fill"></i> Выезд бесплатно</div>
                <div class="badge-warranty"><i class="bi bi-shield-fill-check"></i> Даёт гарантию</div>
            </div>
            <div class="border p-4 rounded">
            
                <div class="row">
                    <div class="col-12 col-md-7 mx-auto">
                        <img src="https://sun9-4.userapi.com/6jUPwdybruk1ernfh0nhm1RCu2eSgHNMmDCCbg/rxQ8q3SOoDo.jpg" class="img-fluid avatar">
                    </div>

                    <div class="col-12 col-md-12 mt-2">
                        <p class="text-center fs-5 mb-1 mt-2"><strong>Иванов Виктор Петрович</strong></p>
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Направление:</b> Ремонт стиральных машин</li>
                        <li class="list-group-item"><b>Возраст:</b> 48 лет</li>
                        <li class="list-group-item"><b>Опыт ремонта:</b> 18 лет</li>
                        <li class="list-group-item"><b>Предоставляет гарантию:</b> до 2-х лет</li>
                        <li class="list-group-item"><b>Образование:</b> Среднее-специальное</li>
                        </ul>

                        <a href="" class="btn btn-get-profile mx-auto mt-3">Перейти к профилю</a>
                    </div>
                </div>
                
            </div>
        </div>
    @endfor

    </div>
</div>