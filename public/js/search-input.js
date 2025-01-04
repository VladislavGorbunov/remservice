
const vacancyBtn = document.querySelector('.vacancy')
const resumeBtn = document.querySelector('.resume')
const btnRole = document.querySelectorAll('.btn-role')

const checkColor = '#2563eb'


vacancyBtn.style.color = checkColor


btnRole.forEach(element => {
    element.addEventListener('click', (e) => {
        e.preventDefault()
        if (element.getAttribute('data-role') == 'vacancy') {
            vacancyBtn.style.color = checkColor
            resumeBtn.style.color = 'black'
        } else if (element.getAttribute('data-role') == 'resume') {
            resumeBtn.style.color = checkColor
            vacancyBtn.style.color = 'black'
        }
    })
});

