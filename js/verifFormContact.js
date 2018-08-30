$('#form-contact').validate({
    rules: {
        name: {
            required: true,
            minlength: 2,
            pattern: /^([a-zA-Z'àâéèêïôùûüçÀÂÉÈÏÔÙÛÜÇ-]{1,75})$/
        },
        firstname: {
            required: true,
            minlength: 2,
            pattern: /^([a-zA-Z'àâéèêïôùûüçÀÂÉÈÏÔÙÛÜÇ-]{1,75})$/
        },
        email: {
            required: true,
            email: true,
            pattern: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        },
        msg: {
            required: true,
            minlength: 4
        },
    },
    messages: {
        name: {
            required: "Veuillez entrer votre nom",
            minlength: "Veuillez entrer au moins 2 caractères",
            pattern: "Veuillez entrer un nom valide"
        },
        firstname: {
            required: "Veuillez entrer votre prénom",
            minlength: "Veuillez entrer au moins 2 caractères",
            pattern: "Veuillez entrer un prenom valide"
        },
        email: {
            required: "Veuillez entrer une adresse email valide",
            pattern: "Veuillez entrer un email valide"
        },
        msg: {
            required: "Veuillez entrer votre message",
            pattern: "Veuillez entrer au moins 4 caractères"
        },
    }
});

