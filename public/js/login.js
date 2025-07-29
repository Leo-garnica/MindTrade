document.addEventListener('DOMContentLoaded', () => {

    const elementsToAnimate = [
        document.querySelector('.logo-container'),
        document.querySelector('form'),
        document.querySelector('.forgot-password'),
        document.querySelector('.welcome-text')
    ];

    const loginBoxChildren = document.querySelectorAll('.login-box > *');
    
    loginBoxChildren.forEach((child, index) => {
        setTimeout(() => {
            child.classList.add('visible');
        }, (index + 1) * 150);
    });
});