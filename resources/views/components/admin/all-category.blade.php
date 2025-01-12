
@foreach($categories as $category) 
    {{ $category['name'] }}
    <br>
    {{ $category['slug'] }}
@endforeach

