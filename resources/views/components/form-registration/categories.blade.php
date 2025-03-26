<div class="row mb-3">
    <h3 class="mt-4 mb-4 text-center">Направления ремонта</h3>
    @foreach ($categories as $category) 
    <div class="col-12 col-md-3 mb-3">
        <p class="fs-6 mb-1"><strong>{{$category->name}}</strong></p>
        
            @foreach ($category->subcategories as $subcat) 
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="{{$subcat->id}}" name="categories[]" id="flexCheckDefault">
                            {{$subcat->name}}
                    </label>
                </div>   
            @endforeach
    </div>
    @endforeach
    </div>