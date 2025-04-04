<div class="row g-3 mt-1">
  <div class="col-sm-7">
    <label class="form-label"><b>Название услуги:</b></label>
    <input type="text" class="form-control" value="Стоимость диагностики техники" readonly name="diagnostic[name]" required>
  </div>
  <div class="col-sm">
    <label class="form-label"><b>Цена от: (руб.)</b></label>
    <input type="text" class="form-control" placeholder="0" name="diagnostic[min]" value="{{ $min }}" required>
  </div>
  <div class="col-sm">
    <label class="form-label"><b>Цена до: (руб.)</b></label>
    <input type="text" class="form-control" placeholder="1000" name="diagnostic[max]" value="{{ $max }}" required>
  </div>
</div>