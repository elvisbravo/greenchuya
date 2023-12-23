const form_login = document.getElementById('authentication-form');

form_login.addEventListener('submit', (e) => {
    e.preventDefault();

    window.location = "https://greenchuya.com/dashboard";
})