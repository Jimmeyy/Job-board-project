const dropdowns = function() {
    const activeClass = 'is-active';
    const dropdowns = [...document.querySelectorAll('.dropdown-js')];

    function closeAll() {
        dropdowns.forEach(dropdown => dropdown.classList.remove(activeClass));
    }

    function toggle() {
        dropdowns.forEach(dropdown => {
            if (this === dropdown) {
                dropdown.classList.toggle(activeClass);
            } else {
                dropdown.classList.remove(activeClass);
            }
        });
    }

    function selectValue(event, dropdown) {
        if (event.target.nodeName.toLowerCase() === 'li') {
            const value = event.target.getAttribute('data-value');
            const dropdownSpan = dropdown.querySelector('span');
            const dropdownInput = dropdown.querySelector('input');
            dropdownSpan.textContent = value;
            dropdownInput.setAttribute('value', value);
            dropdownSpan.style.color = '#000000';
        }
    }

    dropdowns.forEach(dropdown => {
        const dropdownList = dropdown.querySelector('ul');
        dropdown.addEventListener('click', toggle);
        dropdownList.addEventListener('click', () => selectValue(event, dropdown));
    });
};

export default dropdowns;
