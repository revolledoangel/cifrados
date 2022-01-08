const iconoMenu= document.querySelector('#icono-menu'),
    menu= document.querySelector('#menu');

    iconoMenu.addEventListener('click', (e)=>{
        // Alternamos estilos para el menú y el body
        menu.classList.toggle('active');
        document.body.classList.toggle('opacity');

        //Alternamos su atributo 'src' para el ícono del menú
    })