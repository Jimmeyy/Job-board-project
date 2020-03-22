const modals = function() {
    const activeClass = 'is-active';

    function createModal(modalClass, modalBtnClass) {
        const wrapper = document.querySelector(modalClass);
        const main = wrapper.querySelector('.modal-main');
        const openBtn = document.querySelector(modalBtnClass);
        const closeBtn = wrapper.querySelector('.modal-close-js');

        const modal = {
            wrapper,
            main,
            openBtn,
            closeBtn,
        };

        modal.openBtn.addEventListener('click', () => open(modal));
        modal.closeBtn.addEventListener('click', () => close(modal));
        modal.wrapper.addEventListener('click', () => clickOutside(event, modal));
    }

    function open(modal) {
        modal.wrapper.classList.add('is-active');
    }

    function close(modal) {
        modal.wrapper.classList.remove('is-active');
    }

    function clickOutside(event, modal) {
        const isClickInside = modal.main.contains(event.target);
        if (!isClickInside) {
            close(modal);
        }
    }

    const modalLogin = createModal('.modal-login-js', '.modal-login-btn-js');
    const modalRegister = createModal('.modal-register-js', '.modal-register-btn-js');
};

export default modals;
