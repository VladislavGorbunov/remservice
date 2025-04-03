<div class="row mb-3">

<form action="" method="post">
    @csrf
    <h4 class="mb-1">Стоимость выезда и диагностики</h4>
    <x-panel.price-input-diagnostic />
    <x-panel.price-input-departure />

    <div class="inputs">
        <h4 class="mt-4 mb-1">Стоимость ваших услуг:</h4>
        <div class="row g-3 mt-1 price-inputs">
            <div class="col-sm-7">
                <input type="text" class="form-control" placeholder="Название услуги. Например: Замена манжеты люка" name="price[user_price][name]">
            </div>
            <div class="col-sm">
                <input type="text" class="form-control" placeholder="1500" name="price[user_price][min]" >
            </div>
            <div class="col-sm">
                <input type="text" class="form-control" placeholder="2500" name="price[user_price][max]" >
            </div>
        </div>
    </div>

<div class="">
<button class="btn btn-success mt-4 add-input px-4 py-2">Добавить ещё услугу</button>
<button type="submit" class="btn btn-primary mt-4 px-4 py-2">Сохранить</button>
</div>
</form>


</div>

<script>
    const btnAddInput = document.querySelector('.add-input')
    const userInputsBlock = document.querySelector('.inputs')
    const input = document.querySelector('.price-inputs')

    let count = 0
    
    btnAddInput.addEventListener('click', (e) => {
        e.preventDefault()
        count++

        if (count < 15) {
            const newInput = input.cloneNode(true)
        
            const qq =  newInput.querySelectorAll('input')

            qq[0].setAttribute('name', `price[user_price${count}][name]`)
            qq[0].value = ''
            qq[0].setAttribute('required', true)
            qq[1].setAttribute('name', `price[user_price${count}][min]`)
            qq[1].setAttribute('required', true)
            qq[2].setAttribute('name', `price[user_price${count}][max]`)
            qq[2].setAttribute('required', true)
            userInputsBlock.append(newInput)
        } else {
            alert('Превышен лимит')
        }
    })
</script>