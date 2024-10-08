document.addEventListener('DOMContentLoaded', function () {
    if (document.getElementById('successo')) {
        Swal.fire({
            icon: 'success',
            title: 'Sucesso!',
            confirmButtonColor: '#ff0000',
            text: document.getElementById('successo').value,
            position: 'top', 
            toast: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'login.html';
            }
        });
        
    } 
    else if (document.getElementById('erro_senha'))
    {
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            confirmButtonColor: '#ff0000',
            text: document.getElementById('erro_senha').value,
            position: 'top', 
            toast: true
        });
    }

    else if(document.getElementById('erro_email')){
        Swal.fire({
            icon: 'error',
            title: 'Erro',
            confirmButtonColor: '#ff0000',
            text: document.getElementById('erro_email').value,
            position: 'top', 
            toast: true
    })
}
}
);
