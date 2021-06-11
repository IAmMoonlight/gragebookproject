import {canSubmit, initCheckInput, checkEmptyTextareas} from './common';

window.addEventListener('load', function(){
    let form = document.querySelector('form');
    if(form){
        initCheckInput();
        checkEmptyTextareas(document.querySelectorAll('.form_block__textarea'));
        let name_item = document.querySelector('.form_block__input[type=input]');
        let correctNameItem = false;
        if(form.getAttribute('class') !== 'form_search_item'){
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
    }
});