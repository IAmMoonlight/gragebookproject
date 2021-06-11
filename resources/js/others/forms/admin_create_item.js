import {canSubmit, initCheckInput, checkEmptyTextareas} from './common';

window.addEventListener('load', function(){
    if(this.document.querySelector('.form_admin_create_item')){
        initCheckInput();
        checkEmptyTextareas(document.querySelectorAll('.form_block__textarea'));
        let name_item = document.querySelector('.form_block__input[type=input]');
        let correctNameItem = false;
        name_item.addEventListener('input', function(event){
            let value = event.target.value;
            if(value.trim().length > 0){
                correctNameItem = true;
            }else{
                correctNameItem = false;
            }
            if(correctNameItem){
                canSubmit(true);
            }else{
                canSubmit(false);
            }
        });
    }
});