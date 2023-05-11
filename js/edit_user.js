const edit = document.querySelector('.info_perfil-btnEditar');
const satusInput = document.querySelectorAll('.statusInput');
const cancel = document.querySelector('.info_perfil-btnsEdit-cancelar');
const btnsEdit = document.querySelector('.info_perfil-btnsEdit');
const imgEdit = document.querySelector('.info_perfil_usuario-img-edit');
/* $('.info_perfil-btnsEdit').hide();
$('.info_perfil_usuario-img-edit').hide(); */

edit.addEventListener('click', () => {
    satusInput.forEach(element => element.removeAttribute('disabled'));
    btnsEdit.classList.remove("show");
    imgEdit.classList.remove("show");
    edit.classList.add("show");
    /* console.log(satusInput);
    $('.info_perfil-btnsEdit').show();
    $('.info_perfil_usuario-img-edit').show();
    $('.info_perfil-btnEditar').hide(); */
});

cancel.addEventListener('click', () => {
    satusInput.forEach(element => element.setAttribute('disabled', ''));
    btnsEdit.classList.add("show");
    imgEdit.classList.add("show");
    edit.classList.remove("show");
    /* console.log(satusInput);
    $('.info_perfil-btnsEdit').hide();
    $('.info_perfil_usuario-img-edit').hide();
    $('.info_perfil-btnEditar').show(); */
})

