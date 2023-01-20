let email = document.getElementById('email');
let password = document.getElementById('password');


for (let i = 0; i < document.getElementsByClassName('form-control').length; i++) {

    let item = document.getElementsByClassName('form-control')[i];

    item.addEventListener('keydown', () => {

        item.classList.remove('is-invalid');
    });
}

// Login Button Click Event
document.getElementById('btn-login').addEventListener('click', () => {

    if (!email.value) {
        email.classList.add('is-invalid');
    }

    if (!password.value) {
        password.classList.add('is-invalid');
    }
});


document.querySelector('form').addEventListener('submit', (e) => {

    e.preventDefault();
});