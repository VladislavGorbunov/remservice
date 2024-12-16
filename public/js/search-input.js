const vacancyBtn = document.querySelector('.vacancy')
const resumeBtn = document.querySelector('.resume')
const inputSearch = document.querySelector('.form-control-search')
const btnSearchText = document.querySelector('.btn-search-text')
const searchForm = document.querySelector('.search-form')
const btnRole = document.querySelectorAll('.btn-role')

const checkColor = 'rgb(19, 210, 93)'

vacancyBtn.style.color = checkColor

btnRole.forEach(element => {
    element.addEventListener('click', (e) => {
        e.preventDefault()
        if (element.getAttribute('data-role') == 'vacancy') {
            inputSearch.placeholder = 'Поиск вакансий в Колпино'
            
            searchForm.action = '/vacancy'
            vacancyBtn.style.color = checkColor
            resumeBtn.style.color = 'white'
        } else if (element.getAttribute('data-role') == 'resume') {
            inputSearch.placeholder = 'Поиск резюме в Колпино'
            
            searchForm.action = '/resume'
            resumeBtn.style.color = checkColor
            vacancyBtn.style.color = 'white'
        }
    })
});