<h2 class="mb-3">Создание региона</h2>

<form action="" method="post">
@csrf
<div class="mb-3">
  <label class="form-label">Название региона</label>
  <input type="text" class="form-control" name="name" placeholder="Например: Москва">
</div>

<div class="mb-3">
  <label class="form-label">Название региона (в)</label>
  <input type="text" class="form-control" name="name_in" placeholder="Например: в Москве">
</div>

<div class="mb-3">
  <label class="form-label">URL адрес региона</label>
  <input type="text" class="form-control" name="slug" placeholder="Например: msk">
</div>

<button type="submit" class="btn btn-primary mt-2">Добавить регион</button>
</form>


