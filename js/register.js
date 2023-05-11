(function($) { 
  "use strict"; // Start of use strict
       // Clic form
  $("#register").on('click',async function(e) {
    const name = $("#exampleFirstName").val();
    const lastName = $("#exampleLastName").val();
    const email = $("#exampleInputEmail").val();
    const pass = $("#exampleInputPassword").val();
    const pass2 = $("#exampleRepeatPassword").val();
    const universidad = $("#exampleSelectUni").val();
    const lineaInv = $("#exampleSelectLineaInv").val();
    const pais = $("#exampleSelectPais").val();
    const estado = $("#exampleSelectEstado").val();
            
    if(pass != pass2) return alert("Las contraseñas no son iguales");
    
    // if(pass.length <= 6) return alert("Las contraseñas debe ser mayor a 6 caracteres");

    const datos = new FormData();
    
    datos.append("name", name);
    datos.append("lastName", lastName);
    datos.append("email", email);
    datos.append("password", pass);
    datos.append("universidad", universidad);
    datos.append("lineaInv", lineaInv);
    datos.append("pais", pais);
    datos.append("estado", estado);

    console.log(datos);

    const response 		= await fetch("php/register.php", {method: "POST", body: datos});
    const arrayResponse = await response.json();

    if(arrayResponse.error) return alert("No se pudo registrar");
  
    window.location.href = "https://luminisoft.com.mx/membresias/login.html";
  });
})(jQuery); // End of use strict


    const exampleSelectPais = document.getElementById('exampleSelectPais');
    const exampleSelectEstado = document.getElementById('exampleSelectEstado');


exampleSelectPais.addEventListener("change", () => {
    // console.log(exampleSelectPais.value);
    switch (exampleSelectPais.value) {
        case "1":
            exampleSelectEstado.disabled = false;
            break;
        default:
            exampleSelectEstado.disabled = true;
            exampleSelectEstado.value = null;
    }
});
  