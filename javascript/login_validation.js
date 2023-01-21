let email = document.getElementById('email');
let password = document.getElementById('password');

// Add events to the input fields that has a class of 'form-control'
for (let i = 0; i < document.getElementsByClassName('form-control').length; i++) {

    let item = document.getElementsByClassName('form-control')[i];

    item.addEventListener('keydown', () => {

        item.classList.remove('is-invalid');
        document.getElementById('error-alert').classList.add('d-none');
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

    if (email.value && password.value) {
        
        fetch('http://localhost:8080/technos-system-assessment/routes/login-auth.php', {

            method: 'POST',
            headers: {
                
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({

                userName: email.value,
                password: password.value
            })
        })
        .then(res => res.json())
        .then(data => {

            if (data.MESSAGE === "SUCCESS") {
                window.location.href = 'http://localhost:8080/technos-system-assessment/extras/dashboard.php';
            }
            else {
                document.getElementById('error-alert').classList.remove('d-none');
            }
        })
    }
});


document.querySelector('form').addEventListener('submit', (e) => {

    e.preventDefault();
});