---
title: Contact-Us
menu: Contact-Us
slug: contact-us
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
            label: 'Choose one of the following options'
            type: radio
            default: null
            options:
                mason: 'I am a mason and would like to enter your lodge'
                nomason: 'I am not a mason and would like to enter your lodge'
                info: 'I just want to know more about Freemasonry'
            validate:
                required: true
        -
            name: firstname
            label: Name
            placeholder: 'Enter your name'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
        -
            name: phone
            label: Phone
            placeholder: 'Enter your phone number (Ex: 514-555 5555)'
            autocomplete: 'on'
            type: tel
            validate:
                pattern: '[0-9]{3}-[0-9]{3} [0-9]{4}'
        -
            name: email
            label: Email
            placeholder: 'Enter your email address'
            autocomplete: 'on'
            type: email
            validate:
                rule: email
                required: true
        -
            name: Message
            label: Message
            placeholder: 'Enter your message'
            type: textarea
    buttons:
        -
            type: submit
            value: 'Send Request'
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
            message: 'Thank you very much for trusting us!'
        -
            display: thankyou
---

# Contact-Us

... 
