function changeContent(option) {
    // Oculta todos los contenidos
    document.getElementById('contentInicio').style.display = 'none';
    document.getElementById('contentAcerca').style.display = 'none';
    document.getElementById('contentServicios').style.display = 'none';
    document.getElementById('contentContacto').style.display = 'none';

    // Muestra el contenido correspondiente a la opción seleccionada
    document.getElementById('content' + option.charAt(0).toUpperCase() + option.slice(1)).style.display = 'block';

    // Elimina la clase 'active' de todos los elementos de la barra lateral
    var elements = document.querySelectorAll('.sidebar li');
    for (var i = 0; i < elements.length; i++) {
        elements[i].classList.remove('active');
    }

    // Agrega la clase 'active' al <li> de la opción seleccionada
    event.currentTarget.classList.add('active');
}
