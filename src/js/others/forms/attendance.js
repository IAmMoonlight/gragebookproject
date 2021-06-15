import {canSubmit, initCheckInput} from './common';

window.addEventListener('load', function(){

    if(this.document.querySelector('.table_item_file')){
        let btns_upload_file = document.querySelectorAll('.table_item_file');
        let uploader_file = document.querySelector('.upload_file_wrapper');
            
        for(let btn_upload_file of btns_upload_file){
            btn_upload_file.addEventListener('click', function(){
                uploader_file.classList.remove('hide');
            });
        }

        if(this.document.querySelector('.upload_file_wrapper')){
            initCheckInput();
            let close_upload_file = document.querySelector('.btn_close_upload');
            let file = document.querySelector('.form_block__input[type=file]');
            let date = document.querySelector('.form_block__input[type=date]');
            let correctFile = false;
            let correctDate = false;

            close_upload_file.addEventListener('click', function(){
                uploader_file.classList.add('hide');
            });

            file.addEventListener('input', function(event){
                let value = event.target.value;
                if(value.trim().length > 0){
                    correctFile = true;
                }else{
                    correctFile = false;
                }
                if(correctFile && correctDate){
                    canSubmit(true);
                }else{
                    canSubmit(false);
                }
            });

            date.addEventListener('input', function(event){
                let value = event.target.value;
                if(value.trim().length > 0){
                    correctDate = true;
                }else{
                    correctDate = false;
                }
                if(correctFile && correctDate){
                    canSubmit(true);
                }else{
                    canSubmit(false);
                }
            });
        }

    }
});