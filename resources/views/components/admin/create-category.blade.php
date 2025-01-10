<h2 class="mb-3">Создание категории</h2>

<form action="" method="post">
@csrf
<div class="mb-3">
  <label class="form-label">Название категории</label>
  <input type="text" class="form-control" name="name" placeholder="Крупная бытовая техника">
</div>

<div class="mb-3">
  <label class="form-label">URL адрес категории</label>
  <input type="text" class="form-control" name="slug" placeholder="name@example.com">
</div>

<div class="mb-3">
  <label class="form-label">Текст описания категории</label>
  <textarea class="form-control" rows="4" name="description"></textarea>
</div>

<button type="submit" class="btn btn-primary mt-2">Добавить категорию</button>
</form>


