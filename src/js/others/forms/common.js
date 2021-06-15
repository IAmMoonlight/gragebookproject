export const canSubmit = function(correct){
    let btn = document.querySelector(".btn_submit");
    if(correct){
        btn.classList.add("btn_submit_active");
        btn.removeAttribute('disabled');
    }else{
        if(btn.classList.contains('btn_submit_active')){
            btn.classList.remove('btn_submit_active');
        }
        if(!btn.hasAttribute('disabled')){
            btn.setAttribute('disabled','disabled');
        }
    }
}


export const checkEmptyTextareas = function (textareas){
    for(let i = 0; i < textareas.length; i++){
        textareas[i].onchange = function(){
            if(textareas[i].value.trim().length !== 0){
                textareas[i].classList.add('has-val');
            }else{
                textareas[i].classList.remove('has-val');
            }
        }
    }
};
// function addListenerToChangeDateField(dateInputs){
//     for(let i = 0; i < dateInputs.length; i++){
//         dateInputs[i].addEventListener('changeDate', function(e){
//             let inputEvent = e.target;
//             if(inputEvent.value.trim().length !== 0){
//                 inputEvent.classList.add('has-val');
//             }else{
//                 inputEvent.classList.remove('has-val');
//             }
//         });
//     }
// }

function checkEmptyInputs(inputs){
    for(let i = 0; i < inputs.length; i++){
        inputs[i].addEventListener('change', function(){
        // inputs[i].onchange = function(){
            let closest_choices = inputs[i].closest('.choices');
            if(inputs[i].value.trim().length !== 0){
                inputs[i].classList.add('has-val');

                if(closest_choices){
                    closest_choices.classList.add('has-val')
                }
            }else{
                inputs[i].classList.remove('has-val');

                if(closest_choices){
                    closest_choices.classList.remove('has-val')
                }
            }
        // }
        });
    }
}
export const initCheckInput = function(){
    let inputs = document.querySelectorAll('.form_block input');
    if(inputs.length > 0){
        checkEmptyInputs(inputs);
    }
}