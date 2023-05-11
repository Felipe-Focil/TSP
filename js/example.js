(function ($) {
    "use strict"; // Start of use strict
    // Clic form
    $("#register").on('click', async function (e) {
        let name, lastName, email, pass;

        name = $("#exampleFirstName").val();
        lastName = $("#exampleLastName").val();
        email = $("#exampleInputEmail").val();
        pass = $("#exampleInputPassword").val();

        const datos = new FormData();

        datos.append("name", name);
        datos.append("lastName", lastName);
        datos.append("email", email);
        datos.append("password", pass);

        const response = await fetch("php/register.php", { method: "POST", body: datos });
        const arrayResponse = await response.json();

    });
})(jQuery); // End of use strict
