$( () => {
    
    document.getElementById("loginForm").addEventListener('submit', (e) => {

        e.preventDefault()

        let loginForm = document.getElementById("loginForm")
        let data = new FormData(loginForm)

        fetch('models/usuarios.php', {
            method: 'POST',
            body: data
        })
        .then( response => response.json() )
        .then( data => {
            if (data.resp == "OK") {
                swal('¡Acceso Correcto!', 'Redirigiendo...', 'success')
                setTimeout(() => {
                    window.location.href = data.url;
                }, 2000)
            } else {
                swal('¡Ocurrio un Error!', data.message, 'error')
            }
        })

    })

})