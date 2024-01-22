import './bootstrap';

import '~resources/scss/app.scss';

import.meta.glob("../img/**");

import * as bootstrap from 'bootstrap';


// button delete

const buttons = document.querySelectorAll('.btn-danger');

buttons.forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault();

        const deleteModal = new bootstrap.Modal('#delete-modal');

        const title = button.getAttribute('data-title');
        document.getElementById('title-to-delete').innerHTML = title;

        document.getElementById('action-delete').addEventListener('click', () => {
            button.parentElement.submit();
        })
        
        deleteModal.show();
    })
})