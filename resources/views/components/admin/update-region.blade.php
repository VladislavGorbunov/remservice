<h2 class="mb-3">Редактирование региона</h2>

<form action="" method="post">
@csrf
<div class="mb-3">
  <label class="form-label">Название региона</label>
  <input type="text" class="form-control" name="name" placeholder="Крупная бытовая техника" value="{{ $region['name'] }}">
</div>

<div class="mb-3">
  <label class="form-label">Название региона 2</label>
  <input type="text" class="form-control" name="name_in" placeholder="Крупная бытовая техника" value="{{ $region['name_in'] }}">
</div>

<div class="mb-3">
  <label class="form-label">URL адрес региона</label>
  <input type="text" class="form-control" name="slug" placeholder="name@example.com" value="{{ $region['slug'] }}">
</div>


<button type="submit" class="btn btn-primary mt-2">Сохранить</button>
</form>


