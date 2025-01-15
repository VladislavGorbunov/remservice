<h2 class="mb-3">Создание подкатегории</h2>


<form action="" method="post">
@csrf
<div class="mb-3">
  <label class="form-label">Название подкатегории</label>
  <input type="text" class="form-control" name="name" placeholder="Например: Стиральные машины">
</div>

<div class="mb-3">
<label class="form-label">Родительская категория</label>
  <select class="form-select" name="category_id">

  @foreach ($category as $cat)
    <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>

  @endforeach
    
  </select>
</div>

<div class="mb-3">
  <label class="form-label">URL адрес подкатегории</label>
  <input type="text" class="form-control" name="slug" placeholder="name@example.com">
</div>

<div class="mb-3">
  <label class="form-label">Текст описания подкатегории</label>
  <textarea class="form-control" rows="4" name="description"></textarea>
</div>

<button type="submit" class="btn btn-primary mt-2">Добавить подкатегорию</button>
</form>


