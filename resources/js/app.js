require('./bootstrap');
const Swal = require('sweetalert2')

$(() => {
    const success = $('#success-message').val()
    const error = $('#error-message').val()
    if (success || error) {
        Swal.fire({
            icon: success ? 'success' : 'error',
            title: success ? success : error
        })
    }
})
