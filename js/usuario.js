btnElimUsuario.addEventListener('click', () => {

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false,
        allowOutsideClick: false
    })

    swalWithBootstrapButtons.fire({
        title: '¿Estas seguro que quieres eliminar esta solicitud?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminar solicitud',
        cancelButtonText: 'No, cancelar',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire(
                'Solicitud eliminada'
            )
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
            )
        }
    })
});