<h2 class="mb-3">Редактирование подкатегории</h2>

<form action="" method="post">
@csrf
<div class="mb-3">
  <label class="form-label">Название подкатегории</label>
  <input type="text" class="form-control" name="name" placeholder="Крупная бытовая техника" value="{{ $subcategory['name'] }}">
</div>

<div class="mb-3">
<label class="form-label">Родительская категория</label>
  <select class="form-select" name="category_id">
  
  @foreach ($category as $cat)

    @if ($cat['category_id'] == $subcategory['category_id'])
      <option value="{{ $cat['id'] }}" selected>{{ $cat['name'] }}</option>
    @else 
      <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
    @endif
  @endforeach
    
  </select>
</div>

<div class="mb-3">
  <label class="form-label">URL адрес подкатегории</label>
  <input type="text" class="form-control" name="slug" placeholder="name@example.com" value="{{ $subcategory['slug'] }}">
</div>

<div class="mb-3">
  <label class="form-label">Текст описания подкатегории</label>
  <textarea class="form-control" rows="4" name="description">{{ $subcategory['description'] }}</textarea>
</div>

<button type="submit" class="btn btn-primary mt-2">Сохранить</button>
</form>


