
const dropdown = document.querySelector('.dropdown');
const dropdownMenu = document.querySelector('.dropdown-menu');


let hideTimeout;


dropdown.addEventListener('mouseenter', () => {
    clearTimeout(hideTimeout); 
    dropdownMenu.style.opacity = '1';
    dropdownMenu.style.visibility = 'visible';
    dropdownMenu.style.transform = 'translateY(0)';
});

dropdown.addEventListener('mouseleave', () => {
    hideTimeout = setTimeout(() => {
        dropdownMenu.style.opacity = '0';
        dropdownMenu.style.visibility = 'hidden';
        dropdownMenu.style.transform = 'translateY(-10px)';
    }, 5000);
});


dropdownMenu.addEventListener('mouseenter', () => {
    clearTimeout(hideTimeout); 
});


dropdownMenu.addEventListener('mouseleave', () => {
    hideTimeout = setTimeout(() => {
        dropdownMenu.style.opacity = '0';
        dropdownMenu.style.visibility = 'hidden';
        dropdownMenu.style.transform = 'translateY(-10px)';
    }, 100);
});


