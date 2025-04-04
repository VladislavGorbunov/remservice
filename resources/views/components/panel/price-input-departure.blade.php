<div class="row g-3">
  <div class="col-sm-7">
    <label class="form-label"></label>
    <input type="text" class="form-control" value="Стоимость выезда мастера" readonly name="departure[name]" required>
  </div>
  <div class="col-sm">
    <label class="form-label"></label>
    <input type="text" class="form-control" placeholder="0" name="departure[min]" value="{{ $min }}" required>
  </div>
  <div class="col-sm">
    <label class="form-label"></label>
    <input type="text" class="form-control" placeholder="1000" name="departure[max]" value="{{ $max }}" required>
  </div>
</div>