<h4>Информация обо мне</h4>

<form action="" method="post">
    @csrf

<div class="row mt-3">
    <div class="col-12 col-md-6 mb-3">
        <label class="form-label">Имя:</label>
        <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
    </div>

    <div class="col-12 col-md-6 mb-3">
        <label class="form-label">Фамилия:</label>
        <input type="text" class="form-control" name="lastname" value="{{ $user->lastname }}" required>
    </div>

    <div class="col-12 col-md-6 mb-3">
        <label class="form-label">Email:</label>
        <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
    </div>

    <div class="col-12 col-md-6 mb-3">
        <label class="form-label">Телефон:</label>
        <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" required>
    </div>

    <div class="col-12 col-md-6 mb-3">
        <label class="form-label">Опыт ремонта (лет):</label>
        <input type="number" class="form-control" name="experience" value="{{ $user->experience }}" required>
    </div>

    <div class="col-12 col-md-6 mb-3">
        <label class="form-label">Город:</label>
        <select class="form-select" name="region_id">
            @foreach ($regions as $region)
                @if ($region->id == $user->region_id)
                    <option value="{{ $region->id }}" selected>{{ $region->name }}</option>
                @else
                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Обо мне:</label>
        <textarea class="form-control p-3" name="aboutme" rows="5" required
        placeholder="Например: Занимаюсь ремонтом стиральных и посудомоечных машин более 10 лет. Выезжаю в день обращения, все необходимые запчасти беру с собой. На все виды работ даю гаранию 1 год.">
        {{ $user->aboutme }}</textarea>
    </div>

</div>

<button type="submit" class="btn btn-primary">Сохранить</button>
</form>