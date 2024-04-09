const btn_modo = document.querySelector('.modo')
const html = document.querySelector('html')
const icone = document.querySelector('.modo span')

let isDark = false
let modo = []

btn_modo.addEventListener('click', ()=>{
    if(isDark){
        html.setAttribute('data-bs-theme', 'light')
        localStorage.setItem('modo', 'claro')
        icone.innerHTML = 'dark_mode'
        isDark = false
    } else {
        html.setAttribute('data-bs-theme', 'dark')
        localStorage.setItem('modo', 'escuro')
        icone.innerHTML = 'light_mode'
        isDark = true
    }
    
})

let valor = localStorage.getItem('modo')

function trocaTemaAuto(valor){
    if(valor == 'escuro'){
        html.setAttribute('data-bs-theme', 'dark')
        icone.innerHTML = 'light_mode'
    } else {
        html.setAttribute('data-bs-theme', 'light')
        icone.innerHTML = 'dark_mode'
    }
}

trocaTemaAuto(valor)