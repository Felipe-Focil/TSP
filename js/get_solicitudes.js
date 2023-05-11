const solicitud = document.querySelectorAll(".card-body")

solicitud.forEach( (item) => {
    item.addEventListener("click", () => {
        const nom = item.parentNode.querySelector(".text-primary").innerText
        // Guardamos los valores en localStorage
        localStorage.setItem("nombre", nom);

        window.location.href = "usuario.html";
    } )
})
