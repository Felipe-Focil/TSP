const params = new URLSearchParams(window.location.search);
const email = params.get('email');

const datos = new FormData();

datos.append("email", email);

const response = fetch("php/perfil_usuario.php", {method: "POST", body: datos});
const arrayResponse = response.json();

document.querySelector("#inputNombre").value = arrayResponse.nombre
document.querySelector("#inputapellidos").value = arrayResponse.apellidos
document.querySelector("#inputGenero").value = arrayResponse.genero
document.querySelector("#inputEmail").value = arrayResponse.email
document.querySelector("#inputPassword").value = arrayResponse.password
document.querySelector("#inputUniversidad").value = arrayResponse.universidad
document.querySelector("#inputEstado").value = arrayResponse.estado
document.querySelector("#inputPais").value = arrayResponse.pais
document.querySelector("#inputLI").value = arrayResponse.lineaInv
document.querySelector("#inputImg").src = arrayResponse.img
// document.querySelector("#inputCV").value = arrayResponse.cv