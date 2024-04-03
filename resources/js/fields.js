class Fields {

    static state = {
        /* state vars */

        fromName: '',
        recipientEmail: '',
        recipientName: '',
        message: '',


        /* actions */


        validateFields(){
            return this.fromName.length > 0 && this.message.length > 0 && this.recipientEmail.length > 0 && this.recipientName.length > 0

        },

    }

    static init() {
        document.addEventListener('alpine:init', () => {
            Alpine.store('fields', this.state)
        })
    }
}

Fields.init()