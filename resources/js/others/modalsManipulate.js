export const closeModal = function(modal) {
    modal?.classList.add('hide');
};

export const openModal = function(modal) {
    modal?.classList.remove('hide');
};

export const modalManipulate = function(modal) {
    // modal?.addEventListener('click', () => {
    //     closeModal(modal);
    // });

    modal?.querySelector('.modal__close')?.addEventListener('click', () => {
        closeModal(modal);
    });

    modal?.querySelector('.modal__body')?.addEventListener('click', ev => {
        ev.stopPropagation();
    });
};

window.addEventListener('load', function(){
    [...document.querySelectorAll('[data-open-modal]')].map(el => {
        let modal = document.querySelector(el.getAttribute('data-open-modal'));
        el.addEventListener('click', () => {
            openModal(modal);
        });
        modalManipulate(modal);
    });
})