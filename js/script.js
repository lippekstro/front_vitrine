const btn_modo = document.querySelector('.modo')
const html = document.querySelector('html')

let isDark = false
let modo = []

btn_modo.addEventListener('click', ()=>{
    if(isDark){
        html.setAttribute('data-bs-theme', 'light')
        localStorage.setItem('modo', 'claro')
        isDark = false
    } else {
        html.setAttribute('data-bs-theme', 'dark')
        localStorage.setItem('modo', 'escuro')
        isDark = true
    }
    
})

let valor = localStorage.getItem('modo')

function trocaTemaAuto(valor){
    if(valor == 'escuro'){
        html.setAttribute('data-bs-theme', 'dark')
    } else {
        html.setAttribute('data-bs-theme', 'light')
    }
}

trocaTemaAuto(valor)