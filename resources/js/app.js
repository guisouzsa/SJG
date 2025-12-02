import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import IMask from 'imask';

const cpfElement = document.getElementById('cpf_Cnpj');

if (cpfElement) {
    IMask(cpfElement, {
        mask: '000.000.000-00',
        prepare: function (str) {
            return str.replace(/\D/g, ''); // remove tudo que NÃO é número
        }
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
