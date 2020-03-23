---
title: Contacto
menu: Contacto
slug: contacto
content:
    items: '@self.modular'
    order:
        by: ''
        dir: asc
form:
    name: contact-form
    fields:
        -
            name: Choice
            label: 'Seleccione una de las siguientes opciones'
            type: radio
            default: null
            options:
                mason: 'Soy mason/a y quisiera ingresar a su logia'
                nomason: 'No soy mason/a y quisiera ingresar a su logia'
                info: 'Solo quisiera saber mas sobre la masoneria'
            validate:
                required: true
        -
            name: firstname
            label: Nombre y Apellidos
            placeholder: 'Escriba su nombre'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
        -
            name: phone
            label: Teléphono
            placeholder: 'Escriba su teléfono (Ex: 514-555 5555)'
            autocomplete: 'on'
            type: tel
            validate:
                pattern: '[0-9]{3}-[0-9]{3} [0-9]{4}'
        -
            name: email
            label: Correo Web
            placeholder: 'Escriba su dirección de correo'
            autocomplete: 'on'
            type: email
            validate:
                rule: email
                required: true
        -
            name: Message
            label: Mensaje
            placeholder: 'Escriba su mensaje'
            type: textarea
    buttons:
        -
            type: submit
            value: 'Enviar información'
            classes: 'button button-square button-small'
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ config.plugins.email.to }}'
                    - '{{ form.value.email }}'
                subject: '[Site Contact Form] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: contact-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Muchas gracias por confiar en nosotros!'
        -
            display: thankyou
---

# Contacto

En caso de preguntas concretas en relacion a la masoneria, sientase usted con la libertad de contactarnos mediante la siguiente forma y le responderemos a la brevedad posible. 

**Nota:** Nuestro sitio cumple con las politicas de confidencialidad y encriptado de datos personales por medio de https para garantizar la seguridad de su informacion personal. 
