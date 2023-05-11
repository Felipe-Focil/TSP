let email = 'juan.gonzalez@example.com'; //Aceptado a punto de expirar
// const email = "maria.rodriguez@example.com"; //Rechazado
// const email = "Javier.rodriguez@upaep.mx"; //Expirado
// const email = "german.soto@upaep.mx"; //Aceptado

const datos = new FormData();

datos.append("email", email);
console.log(datos);

fetch("php/membresia.php", {method: "POST", datos})
.then (arrayResponse => arrayResponse.json())
.then (arrayResponse => {
        document.querySelector('.info_solicitud_datos-status').innerText = arrayResponse.estatus;
        document.querySelector('.info_solicitud_datos-expira').innerText = arrayResponse.vigencia;
});