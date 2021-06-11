import {canSubmit, initCheckInput} from './common';

window.addEventListener('load', function(){
    if(this.document.querySelector('.forgot_form')){
        initCheckInput();
        let email = document.querySelector('.form_block__input[type=email]');
        let correctEmail = false;
        email.addEventListener('input', function(event){
            let value = event.target.value;
            if(/@/.test(value.trim())){
                correctEmail = true;
            }else{
                correctEmail = false;
            }
            if(correctEmail){
                canSubmit(true);
            }else{
                canSubmit(false);
            }
        });
    }
});