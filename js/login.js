(function($) {
    "use strict"; // Start of use strict
      // Clic form
        $("#login").on('click',async function(e) {
            var email;
            var pass;
          
            email	= $("#exampleInputEmail").val();
            pass	= $("#exampleInputPassword").val();

            const datos = new FormData();

            datos.append("email", email);
            datos.append("password", pass);
            console.log(datos);

            const response 		= await fetch("php/login.php", {method: "POST", body: datos});
            const arrayResponse = await response.json();

            if(arrayResponse.error) return alert("Email y/o contraseña incorrectos");
            
            //console.log(arrayResponse);
            // if(!arrayResponse.error){
            //     localStorage.setItem("mail", email);
            //     if(arrayResponse.respuesta == "admin"){
            //         window.location.href = "https://luminisoft.com.mx/membresias/";
            //     }else if(arrayResponse.respuesta == "usuario"){
            //         window.location.href = "https://luminisoft.com.mx/membresias/perfil_usuario.html";
            //     }
            // }else return alert("Email y/o contraseña incorrectos");
          
            if(arrayResponse.respuesta == "admin")
                window.location.href = "https://luminisoft.com.mx/membresias/";
            else if(arrayResponse.respuesta == "usuario")
                window.location.href = "https://luminisoft.com.mx/membresias/perfil_usuario.php?email="+ email;
      });
  })(jQuery); // End of use strict
  