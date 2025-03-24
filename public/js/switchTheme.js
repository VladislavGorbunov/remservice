let theme
let transition
let toggleButtonClass
let lightThemeBackground
let lightThemeText
let darkThemeBackground
let darkThemeText
let rootBlockClass = null
let defaultTheme
let customFunctionDark
let customFunctionLight

function setTheme(options) {
    transition = options.transition || 1
    toggleButtonClass = options.toggleButtonClass
    lightThemeBackground = options.lightThemeBackground
    lightThemeText = options.lightThemeText
    darkThemeBackground = options.darkThemeBackground
    darkThemeText = options.darkThemeText
    defaultTheme = options.defaultTheme || 'dark'
    customFunctionDark = options.customFunctionDark
    customFunctionLight = options.customFunctionLight

    rootBlockClass = document.querySelector(`.${options.rootBlockClass}`) || document.body
    
    const themeSwitchButton = document.querySelector(`.${ toggleButtonClass }`)
    
    themeSwitchButton.addEventListener('click', switchTheme)

    if (localStorage.getItem('theme')) {
        theme = localStorage.getItem('theme')
    } else {
        theme = defaultTheme
    }

    if (theme === 'dark') {
        setDarkTheme()
    } else {
        setLightTheme()
    }
}

function setDarkTheme() {
    rootBlockClass.style.background = darkThemeBackground
    rootBlockClass.style.color = darkThemeText
    
    localStorage.setItem('theme', 'dark')

    if (typeof customFunctionDark == 'function') {
        customFunctionDark()
    }
}

function setLightTheme() {
    rootBlockClass.style.background = lightThemeBackground
    rootBlockClass.style.color = lightThemeText
    
    localStorage.setItem('theme', 'white')

    if (typeof customFunctionLight == 'function') {
        customFunctionLight()
    }
}

function switchTheme() {
    rootBlockClass.style.transition = transition + 's'
    
    theme = localStorage.getItem('theme')
    if (theme === 'white') {
        setDarkTheme()
    } else {
        setLightTheme()
    }

}

