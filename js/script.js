const links = document.querySelectorAll('.navbar-nav .nav-item a')

links.forEach((item)=>{
    item.addEventListener('click', ()=>{
        links.forEach((link)=>{
            link.classList.remove('active')
        })

        this.classList.add('active')
    })
})

