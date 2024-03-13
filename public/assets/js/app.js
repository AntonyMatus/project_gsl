// update current year in copyright
const currentYear = new Date().getFullYear()
document.querySelector('#year').innerHTML = currentYear

/* form contact */

	var formulario = document.querySelector('#contact-form');

    formulario.addEventListener('submit', function(e){
        e.preventDefault();
        email();
    });

	function email() {
        let datos = new FormData(formulario);
        fetch(`../backend/send-email.php`, {
            method: 'POST',
            body: datos
        }).then(res => res.json())
        .then(data => {
            console.log(data);
            if(data === 'exito'){
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Exito",
                    text: "El mensaje ha sido enviado con exito!",
                    showConfirmButton: false,
                    timer: 3500
                });
                formulario.reset();
            } else { 
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Oops",
                    text: "Error al enviar el mensaje",
                    showConfirmButton: false,
                    timer: 3500
                });
            }
        })
    }