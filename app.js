import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import IMask from 'imask';

const cpfCnpjElement = document.getElementById('cpf_Cnpj');
if (cpfCnpjElement) {
    IMask(cpfCnpjElement, {
        mask: [
            {
                mask: '000.000.000-00'
            },
            {
                mask: '00.000.000/0000-00'
            }
        ]
    });
}


const telefoneElement = document.getElementById('telefone');
if (telefoneElement) {
    IMask(telefoneElement, {
        mask: [
            {
                mask: '(00) 0000-0000'
            },
            {
                mask: '(00) 00000-0000'
            }
        ]
    });
}

const emailElement = document.getElementById('email');
if (emailElement) {
    IMask(emailElement, {
        mask: /^\S*@?\S*$/
    });
}
