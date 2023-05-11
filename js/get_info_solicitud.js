const nombre = localStorage.getItem("nombre")

const datos = new FormData()

datos.append("nombre", nombre)
localStorage.removeItem("nombre")

fetch("php/getInfoSolicitud.php", {method: "POST", body: datos})
    .then(arrayResponse => arrayResponse.json())
    .then(arrayResponse => {
        document.querySelector(".nom-comp").innerHTML = arrayResponse.nombre + " " + arrayResponse.apellidos
        document.querySelector(".genero").innerHTML = arrayResponse.genero
        document.querySelector(".li").innerHTML = arrayResponse.lineaInv
        document.querySelector(".pais").innerHTML = arrayResponse.pais
        document.querySelector(".estado").innerHTML = arrayResponse.estado
        document.querySelector(".uni").innerHTML = arrayResponse.universidad
        document.querySelector(".email").innerHTML = arrayResponse.email
    })



