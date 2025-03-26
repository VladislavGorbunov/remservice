<div class="col-12 col-md-6">
        
        <div class="mb-3">
            <label class="form-label"><b>Ваше имя:</b></label>
            <input type="text" class="form-control" placeholder="Иван" name="name" required>
        </div>

        <div class="mb-3">
            <label class="form-label"><b>Фамилия:</b></label>
            <input type="text" class="form-control" placeholder="Иванов" name="lastname" required>
        </div>

        <div class="mb-3">
            <label class="form-label"><b>Город:</b></label>
            <select class="form-select" name="region_id">
                @foreach ($regions as $region) 
                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                @endforeach
            </select>
        </div>
</div>


<div class="col-12 col-md-6">
    <div class="mb-3">
        <label class="form-label"><b>Электронная почта:</b></label>
        <input type="email" class="form-control" placeholder="ivanov@yandex.ru" name="email" required>
    </div>

    <div class="mb-3">
        <label class="form-label"><b>Номер телефона:</b></label>
        <input type="text" class="form-control" placeholder="+7 (911) 123-45-67" name="phone" required>
    </div>
</div>


    <div class="col-12 col-md-6">
        <div class="mb-3">
            <label class="form-label"><b>Пароль:</b> <small>Не менее 8 символов</small></label>
            <input type="text" class="form-control" placeholder="********" name="password" required>
        </div>
    </div>

    <div class="col-12 col-md-6">
        <div class="mb-3">
            <label class="form-label"><b>Повторите пароль:</b></label>
            <input type="text" class="form-control" placeholder="********" name="password" required>
        </div>
    </div>
