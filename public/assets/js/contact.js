const onSubmit = async (event) => {
    event.preventDefault();

    const lenguage = "es"
    let gRecaptchaResponse = document.querySelector('textarea[name="g-recaptcha-response"]').value
    let hCaptchaResponse = document.querySelector('textarea[name="h-captcha-response"]').value

    if( gRecaptchaResponse === '' ||  hCaptchaResponse === '' ) {
        showErrorCaptcha()
        return false
    }

    onSending()

    try {
        const form = document.getElementById('contact-form')
        const data = new FormData(form)

        const res = await fetch(`/send_email_contact`, {
            method: 'POST',
            body: data
        })

        const values = await res.json()
        if (values.ok) {
            showSuccessMessage()
            document.getElementById('contact-form').reset()
        } else {
            showErrorMessage()
        }

        resetForm()
        
    } catch(e) {
        console.log(e)
        resetForm()
        showErrorMessage()
    }
}

const onSending = () => {
    let btnSubscribe = document.getElementById('send_message')
    btnSubscribe.innerHTML = 'Enviando...'
    btnSubscribe.disabled = true
}

const resetForm = () => {
    let btnSubscribe = document.getElementById('send_message')
    btnSubscribe.innerHTML = 'Enviar'
    btnSubscribe.disabled = false
}

const showErrorMessage = () => {
    var container = document.querySelector('.form-results')
    container.classList.remove('text-success')
    container.classList.add('text-danger')
    container.textContent = 'Ocurrio un error, intentalo de nuevo'
}

const showSuccessMessage = () => {
    var container = document.querySelector('.form-results')
    container.classList.remove('text-danger')
    container.classList.add('text-success')
    container.textContent = 'Enviado Correctamente'
}

const showErrorCaptcha = () => {
    var container = document.querySelector('.form-results')
    container.classList.remove('text-success')
    container.classList.add('text-danger')
    container.textContent = 'Debes completar el captcha'
}