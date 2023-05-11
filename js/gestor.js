const tdTipo = document.querySelectorAll("#tdTipo");
const tdModif = document.querySelectorAll("#tdModif");
const tdEmail = document.querySelectorAll(".tdEmail");
    
for (let i = 0; i < tdTipo.length; i++) {
    const button = document.createElement("button");
    // console.log(tdTipo[i].innerText);
    tdTipo[i].innerText === "USUARIO" ? (button.innerHTML = "Convertir a Admin",
                                            button.value = "agregar")
                                        :
                                        (button.innerHTML = "Convertir a Usuario",
                                            button.value = 'eliminar'
                                        );
    button.setAttribute("class", "btn btn-info");
    button.setAttribute("id", tdEmail[i].innerText);
    tdModif[i].appendChild(button);
    button.addEventListener('click', async () => {
        const datos = new FormData();
        datos.append("email", button.id);
        datos.append("action", button.value);
        console.log(datos);
        
        await fetch("php/modifTipo.php", {method: "POST", datos})
        .then (arrayResponse => arrayResponse.json())
        .then (arrayResponse => {
            console.log(arrayResponse);
        });
    });
}




