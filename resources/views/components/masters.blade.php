<div class="container mt-3">
    <h2 class="text-center">Частные мастера</h2>

    @foreach ($masters as $master) 
        {{ $master->region_name }}
        {{ $master->user_name }}
        {{ $master->user_phone }}
        <br>
    @endforeach
</div>
