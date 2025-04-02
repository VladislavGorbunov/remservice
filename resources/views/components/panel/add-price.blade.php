<div class="row mb-3">
<h4 class="mb-2">Стоимость услуг</h4>

<form action="" method="post">
    @csrf
<div class="inputs-block">
    <x-panel.price-input-diagnostic />
    <x-panel.price-input-departure />
</div>

<button class="btn btn-success mt-3 add-input">Добавить поле</button>
<button type="submit" class="btn btn-success mt-3">Сохранить</button>
</form>


</div>

<script>
    const btnAddInput = document.querySelector('.add-input')
    const inputsBlock = document.querySelector('.inputs-block')
    const price_inputs = document.querySelector('.price-inputs')

    btnAddInput.addEventListener('click', (e) => {
        e.preventDefault()

        const clone = price_inputs.cloneNode(true)
        inputsBlock.append(clone)
    })
</script>