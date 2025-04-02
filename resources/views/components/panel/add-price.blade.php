<div class="row mb-3">
<h4 class="mb-2">Стоимость услуг</h4>

<form action="" method="post">
    @csrf

    <x-panel.price-input-diagnostic />
    <x-panel.price-input-departure />

    <div class="inputs">
    </div>

<button class="btn btn-success mt-3 add-input">Добавить поле</button>
<button type="submit" class="btn btn-success mt-3">Сохранить</button>
</form>


</div>

<script>
    const btnAddInput = document.querySelector('.add-input')
    const userInputsBlock = document.querySelector('.inputs')

    let count = 0

    btnAddInput.addEventListener('click', (e) => {
        e.preventDefault()
        
        let inputs = `
        <div class="row g-3 mt-2 price-inputs">
            <div class="col-sm-7">
                <label class="form-label">Название услуги:</label>
                <input type="text" class="form-control" value="Название услуги" name="user_service${count}[name]">
            </div>
            <div class="col-sm">
                <label class="form-label">Цена от: (руб.)</label>
                <input type="text" class="form-control" placeholder="1500" name="user_service${count}[min]">
            </div>
            <div class="col-sm">
                <label class="form-label">Цена до: (руб.)</label>
                <input type="text" class="form-control" placeholder="2500" name="user_service${count}[max]">
            </div>
        </div>
        `
        count++
        userInputsBlock.innerHTML += inputs

    })
</script>