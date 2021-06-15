import {canSubmit, initCheckInput} from './common';

window.addEventListener('load', function(){
    if(this.document.querySelector('.reset_form')){
        initCheckInput();
        let email = document.querySelector('.form_block__input[type=email]');
        let password = document.querySelector('.form_block__input[type=password]');
        let repeat_pswd = document.querySelector('.repeat_pswd');
        
        let pswd1 = '';
        let pswd2 = '';

        let correctEmail = false;
        let correctPassword = false;
        let correctRepeatPswd = false;

        email.addEventListener('input', function(event){
            let value = event.target.value;
            if(/@/.test(value.trim())){
                correctEmail = true;
            }else{
                correctEmail = false;
            }
            if(correctPassword && correctEmail && correctRepeatPswd && (pswd1 == pswd2) ){
                canSubmit(true);
            }else{
                canSubmit(false);
            }
        });
        password.addEventListener('input', function(event){
            pswd1 = event.target.value;
            if(/^[0-9A-z_#.]{8,40}$/.test(pswd1.trim())){
                correctPassword = true;
            }else{
                correctPassword = false;
            }
            if(correctPassword && correctEmail && correctRepeatPswd && (pswd1 == pswd2) ){
                canSubmit(true);
            }else{
                canSubmit(false);
            }
        });
        repeat_pswd.addEventListener('input', function(event){
            pswd2 = event.target.value;
            if(/^[0-9A-z_#.]{8,40}$/.test(pswd2.trim())){
                correctRepeatPswd = true;
            }else{
                correctRepeatPswd = false;
            }
            if(correctPassword && correctEmail && correctRepeatPswd && (pswd1 == pswd2) ){
                canSubmit(true);
            }else{
                canSubmit(false);
            }
        });
    }
})