const urlParams = new URLSearchParams(window.location.search);
const greetingValue = urlParams.get('email');
console.log(greetingValue); 
var uri = window.location.toString();
if (uri.indexOf("?") > 0) {
    var clean_uri = uri.substring(0, uri.indexOf("?"));
    window.history.replaceState({}, document.title, clean_uri);
}

const datos = new FormData();

datos.append("email", greetingValue);

fetch("php/perfil_usuario.php", {method: "POST", body: datos})
.then(arrayResponse => arrayResponse.json())
.then(arrayResponse => {
    document.querySelector("#inputNombre").value = arrayResponse.nombre
    document.querySelector("#inputApellidos").value = arrayResponse.apellidos
    document.querySelector("#inputGenero").value = arrayResponse.genero
    document.querySelector("#inputEmail").value = arrayResponse.email
    document.querySelector("#inputPassword").value = arrayResponse.password
    document.querySelector("#inputUniversidad").value = arrayResponse.universidad
    document.querySelector("#inputEstado").value = arrayResponse.estado
    document.querySelector("#inputPais").value = arrayResponse.pais
    document.querySelector("#inputLI").value = arrayResponse.lineaInv
});



const edit = document.querySelector('.info_perfil-btnEditar');
const satusInput = document.querySelectorAll('.statusInput');
const cancel = document.querySelector('.info_perfil-btnsEdit-cancelar');
const btnsEdit = document.querySelector('.info_perfil-btnsEdit');
const imgEdit = document.querySelector('.info_perfil_usuario-img-edit');


edit.addEventListener('click', () => {
    satusInput.forEach(element => element.removeAttribute('disabled'));
    btnsEdit.classList.remove("show");
    imgEdit.classList.remove("show");
    edit.classList.add("show");
});

cancel.addEventListener('click', () => {
    satusInput.forEach(element => element.setAttribute('disabled', ''));
    btnsEdit.classList.add("show");
    imgEdit.classList.add("show");
    edit.classList.remove("show");
});

// const mail = localStorage.getItem("mail");
// console.log(mail);

