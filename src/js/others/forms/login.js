import {canSubmit, initCheckInput} from './common';

window.addEventListener('load', function(){
    if(this.document.querySelector('.auth_form')){
        initCheckInput();
        let email = document.querySelector('.form_block__input[type=email]');
        let password = document.querySelector('.form_block__input[type=password]');
        let correctEmail = false;
        let correctPassword = false;
        email.addEventListener('input', function(event){
            let value = event.target.value;
            if(/@/.test(value.trim())){
                correctEmail = true;
            }else{
                correctEmail = false;
            }
            if(correctPassword && correctEmail){
                canSubmit(true);
            }else{
                canSubmit(false);
            }
        });
        password.addEventListener('input', function(event){
            let value = event.target.value;
            if(/^[0-9A-z_#.]{8,40}$/.test(value.trim())){
                correctPassword = true;
            }else{
                correctPassword = false;
            }
            if(correctPassword && correctEmail){
                canSubmit(true);
            }else{
                canSubmit(false);
            }
        });
    }
})