<form action="" method="post">
@csrf
<div class="row mb-3">
<h4 class="mb-4">Направления ремонта</h4>

@foreach ($categories as $category) 
    <div class="col-12 col-md-4 mb-4">
        <p class="fs-6 mb-1"><strong>{{$category->name}}</strong></p>
            @foreach ($category->subcategories as $subcat) 
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="{{$subcat->id}}" name="categories[]" {{in_array($subcat->id, $userCategories) ? 'checked' : ''}} >
                            {{$subcat->name}}
                       
                    </label>
                </div>   
            @endforeach
    </div>
@endforeach

</div>
<button type="submit" class="btn btn-primary">Сохранить</button>
</form>