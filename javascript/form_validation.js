// Form fields.
let fullNameTextfield = document.getElementById('full-name');
let emailField = document.getElementById('email');
let password = document.getElementById('password');
let resetTypePassword = document.getElementById('confirm-password');
let signupCheckbox = document.getElementById('remember-me');

// Valid email format.
const VALID_EMAIL_FORMAT = /[a-zA-Z0-9_]@(gmail|yahoo).com$/;
let isFormValidToSubmit = true;

// onChange event for the checkbox.
signupCheckbox.addEventListener('change', (e) => {

    if (e.target.checked) {
        document.getElementById('signup-submit').disabled = false;
    }
    else {
        document.getElementById('signup-submit').disabled = true;
    }
});

// Loop through all the fields that has a class of 'form-control'
for (let i = 0; i < document.getElementsByClassName('form-control').length; i++) {

    let item =  document.getElementsByClassName('form-control')[i];

    // Add a 'keydown' event to remove the error message whenever the user types again.
    item.addEventListener('keydown', () => {
        
        // removes the is-invalid class.
        item.classList.remove('is-invalid');
        
        // resets the error message.
        item.parentElement.children[item.parentElement.children.length - 1].innerHTML = 'This field is required';

        /** Hide the error message if the email is already exists. */
        if (item.id === 'email') {
            document.getElementById('error-alert').classList.add('d-none');
        }

        /** If the password or confirm password is on focus, hide their both error messages. */
        if (item.id === 'password' || item.id === 'confirm-password') {

             if (item.id === 'confirm-password') {
                document.getElementById('password').classList.remove('is-invalid');
             }
             else {
                document.getElementById('confirm-password').classList.remove('is-invalid');
             }
        }
    });

    if (item.id === 'email') {

        item.addEventListener('change', () => {

            item.classList.remove('is-invalid');
            item.parentElement.children[item.parentElement.children.length - 1].innerHTML = 'This field is required';
        })
    }
}

// Click event for the submit button.
document.getElementById('signup-submit').addEventListener('click', (e) => {

    
    if (!fullNameTextfield.value) {
        fullNameTextfield.classList.add('is-invalid');
        isFormValidToSubmit = false;
    }

    if (!emailField.value) {
        emailField.classList.add('is-invalid');
        isFormValidToSubmit = false;
    }
    else if (!emailField.value.match(VALID_EMAIL_FORMAT)) {
        emailField.classList.add('is-invalid');
        document.getElementById('email-error-message').innerText = 'Invalid email. The valid email contains only alphanumeric characters such as numbers (0-9), letters (A-Za-z), and (_).';
        isFormValidToSubmit = false;
    }

    if (!password.value) {
        password.classList.add('is-invalid');
        isFormValidToSubmit = false;
    }

    if (!resetTypePassword.value) {
        resetTypePassword.classList.add('is-invalid');
        isFormValidToSubmit = false;
    }

    if (password.value && resetTypePassword.value && password.value !== resetTypePassword.value) {
        password.classList.add('is-invalid');
        resetTypePassword.classList.add('is-invalid');

         document.getElementById('password-error-message').innerText = "Password doesn't match";
        isFormValidToSubmit = false;
        document.getElementById('retypePass-error-message').innerText = "Password doesn't match";
        isFormValidToSubmit = false;
    }

    if (fullNameTextfield.value && emailField.value && emailField.value.match(VALID_EMAIL_FORMAT) 
        && password.value && resetTypePassword.value && password.value === resetTypePassword.value) {
           isFormValidToSubmit = true;

        // Make a POST request to endpoint 'check-email-exist'
        fetch('http://localhost:8080/technos-system-assessment/routes/check-email-exist.php', {

            method: 'POST',
            mode: 'no-cors',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({email: emailField.value})
            })
            .then(res => res.json())
            .then(data => {
                
                // If the response is SUCCESS, then we insert the new user info.
                if (data.MESSAGE === "SUCCESS") {
                    alert("You have now successfully registered to Technos Systems!");
                    document.getElementById('signup-submit').disabled = true;
                    AddNewUser();
                    document.querySelector('form').reset();
                }
                else {
                    console.log("FAILED EMAIL EXISTING");
                     document.getElementById('error-alert').classList.remove('d-none');
                }
            })
            .catch(err => console.error(err))
    }
});

// Disables the default behavior of form.
document.querySelector('form').addEventListener('submit', (e) => {

    e.preventDefault(); 
});

/**
 * A function that make a POST request to 'add-user' endpoint. */
function AddNewUser() {

     fetch('http://localhost:8080/technos-system-assessment/routes/add-user.php', {

                method: 'POST',
                mode: 'no-cors',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({

                    fullName: fullNameTextfield.value,
                    userName: emailField.value,
                    password: password.value
                })
            })
            .then(res => res.json())
            .then(data => console.log(data));
}