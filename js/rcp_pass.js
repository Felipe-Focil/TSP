(function($) {
    "use strict"; // Start of use strict
      // Clic form
        $("#pass").on('click',async function(e) {
            const email = $("#exampleInputEmail").val();
          
            const datos = new FormData();

            datos.append("email", email);
            
            const response 		= await fetch("php/rcp_pass.php", {method: "POST", body: datos});
            const arrayResponse = await response.json();

            if(arrayResponse.error) return alert("El email que ingresaste no esta registrado");

            alert("Tu contraseña es: "+ arrayResponse.respuesta );
      });
  })(jQuery); // End of use strict
  