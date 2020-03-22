const modals = function() {
    const activeClass = 'is-active';

    function createModal(modalClass, modalBtnClass) {
        const wrapper = document.querySelector(modalClass);
        const main = wrapper.querySelector('.modal-main');
        const openBtn = document.querySelector(modalBtnClass);
        const closeBtn = wrapper.querySelector('.modal-close-js');

        return {
            wrapper,
            main,
            openBtn,
            closeBtn,
        };
    }

    const modalLogin = createModal('.modal-login-js', '.modal-login-btn-js');
    const modalRegister = createModal('.modal-register-js', '.modal-register-btn-js');

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

    // modalLogin.openBtn.addEventListener('click', () => open(modalLogin));
    // modalLogin.closeBtn.addEventListener('click', () => close(modalLogin));
    // modalLogin.wrapper.addEventListener('click', () => clickOutside(event, modalLogin));

    // modalRegister.openBtn.addEventListener('click', () => open(modalRegister));
    // modalRegister.closeBtn.addEventListener('click', () => close(modalRegister));
    // modalRegister.wrapper.addEventListener('click', () => clickOutside(event, modalRegister));
};

export default modals;
