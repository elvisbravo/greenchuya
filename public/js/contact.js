const formulario = document.getElementById('contact-form');

formulario.addEventListener('submit', (e) => {
    e.preventDefault();

    const formData = new FormData(formulario);

    fetch('contact/sendEmail', {
        method: 'post',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        const alertaEnvio = document.getElementById('alerta_envio');
    
        if (data.status === 'success') {
            // Inserta el mensaje de éxito en el div 'alerta_envio'
            alertaEnvio.innerHTML = '<div class="alert alert-success" role="alert">'+data.message+'</div>';
            
        } else {
            alertaEnvio.innerHTML = '<div class="alert alert-danger" role="alert">'+data.message+'</div>';
        }

        // Oculta el mensaje después de 5 segundos (5000 milisegundos)
        setTimeout(function() {
            alertaEnvio.innerHTML = "";
            formulario.reset();
        }, 5000);
    })
})