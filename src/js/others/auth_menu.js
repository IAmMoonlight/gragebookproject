window.addEventListener('load', function(){
    if(this.document.querySelector('.menu_auth_btn')){
        let menu_auth_btn = document.querySelector('.menu_auth_btn');
        let menu_btn_close = document.querySelector('.menu_auth_btn__close');
        let menu_btn_open = document.querySelector('.menu_auth_btn__open');
        let menu_auth = document.querySelector('.aside_wrapper');
        
        menu_auth_btn.addEventListener('click', function(event){
            if(menu_auth.classList.contains('show_menu_auth')){
                menu_btn_close.classList.add('hide_btn_auth');
                menu_btn_open.classList.remove('hide_btn_auth');
                menu_auth.classList.remove('show_menu_auth');
            }else{
                menu_auth.classList.add('show_menu_auth');
                menu_btn_open.classList.add('hide_btn_auth');
                menu_btn_close.classList.remove('hide_btn_auth');
            }
        });
    }
});