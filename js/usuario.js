btnElimUsuario.addEventListener('click', () => {

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            cancelButton: 'btn btn-danger',
            confirmButton: 'btn btn-success'
        },
        buttonsStyling: false,
        allowOutsideClick: false
    })
    
    swalWithBootstrapButtons.fire({
        title: '¿Estas seguro que quieres cancelar esta solicitud?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, cancelar solicitud',
        cancelButtonText: 'No, cancelar',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                icon: 'success',
                title: 'Solicitud cancelada',
                showConfirmButton: false,
                timer: 1500,
                allowOutsideClick: false
            })
            setTimeout(() => {
                location.href = 'pendientes.html'
            }, 1600);
        }
    })
});