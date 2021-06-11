window.addEventListener('load', function(){
    if(this.document.querySelector('.login_wrapper')){
        let login = document.querySelector('.login_wrapper');
        let submenu = document.querySelector('.login_submenu');

        login.addEventListener('click', function(event){
            if(submenu.classList.contains('hide')){
                submenu.classList.remove('hide');
            }else{
                submenu.classList.add('hide');
            }
        });
    }
});