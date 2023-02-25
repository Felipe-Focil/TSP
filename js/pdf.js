btnPdf.addEventListener('click', () => {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'PDF enviado',
        showConfirmButton: false,
        timer: 1500
    })
    setTimeout(() => {
        location.href = 'pendientes.html'
    }, 1800);
})