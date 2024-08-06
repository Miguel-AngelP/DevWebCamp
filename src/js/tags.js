(function(){

    const tagsInput = document.querySelector('#tags_input');


if(tagsInput){

    const tagsDiv = document.querySelector('#tags')
    const tagsInputHiden = document.querySelector('[name=tags]')

    let tags =[];

    // Recuperar del input oculto
    if(tagsInputHiden.value !== ''){
        tags = tagsInputHiden.value.split(',');
        mostrarTags();
    }

    // Escuchar los cambios en el input
    tagsInput.addEventListener('keypress', guardarTag);


    function guardarTag(e){
        if(e.keyCode === 44){

            if(e.target.value.trim() === '' || e.target.value < 1){
                return
            }

            e.preventDefault();

            tags = [...tags, e.target.value.trim()];

            tagsInput.value = '';

            mostrarTags();
        }
    };

    function mostrarTags(){
        tagsDiv.textContent ='';
        tags.forEach(tag => {
            const etiqueta = document.createElement('LI');
            etiqueta.classList.add('formulario__tag');
            etiqueta.textContent = tag;
            etiqueta.ondblclick = eliminarTag;
            tagsDiv.appendChild(etiqueta);
        })

        actualizarInputHidden();
    }

    function eliminarTag(e){
        e.target.remove();
        
        tags = tags.filter(tag => tag !== e.target.textContent)
        actualizarInputHidden();
    }

    function actualizarInputHidden(){
        tagsInputHiden.value = tags.toString();
    }
}

})();

