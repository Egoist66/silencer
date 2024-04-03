class Email  {

    static form = document.querySelector('form')
    static button = document.querySelector('button')
    static async configure() {
        Email.button.disabled = true
        Email.button.textContent = 'Sending...'
        await delay(1000)
        try {
            const response = await fetch('?action=store', {
                method: 'POST',
                body: JSON.stringify({
                    fromName: Email.form.fromName.value,
                    to: Email.form.to.value,
                    toName: Email.form.toName.value,
                    subject: Email.form.subject.value,
                    message: JSON.stringify(transformStringToCode(Email.form.message.value))
                })
            })

            const data = await response.text()
            if(response.ok){
                Email.button.disabled = false
                Email.button.textContent = 'Message is sent'
                Email.form.reset()

                await delay(1000)
                Email.button.textContent = 'Send'

            }
            else {

                Email.button.disabled = false
                Email.button.textContent = 'Message is not sent'
            }

        }
        catch (e) {

            console.log(e)
            Email.button.disabled = false
            Email.button.textContent = 'Message is not sent'
        }
    }

    static submit() {
        Email.form.addEventListener('submit', async (e) => {

            e.preventDefault()
            await Email.configure()
        })
    }
}

Email.submit()