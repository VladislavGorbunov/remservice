<div class="mt-5 mb-5">
<h2 class="text-center">Найдём мастера по ремонту любой техники</h2>
<p class="text-center">Выбирете технику которая нуждается в ремонте</p>
<div class="row">

    <style>
        .list-group-item {
            padding: 7px 0;
        }
    </style>

    @foreach ($categories as $category) 

    <div class="col-12 col-md-3 mt-3 mb-3">
        <p class="fs-6 mb-1"><a href="{{ $category->slug }}" class="link-dark text-decoration-none"><strong>{{$category->name}}</strong></a></p>
        <ul class="list-group list-group-flush">
            @foreach ($category->subcategories as $subcat) 
            
                <li class="list-group-item"><a href="{{url()->current()}}/{{ $subcat->slug }}" class="link-dark text-decoration-none">{{$subcat->name}}</a></li>
            @endforeach
            <li class="list-group-item"><a href="">Показать все</a></li>
        </ul>
    </div>
        
    @endforeach
    
</div>
</div>