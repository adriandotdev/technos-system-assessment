<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technos System | Log In</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-light">

    <main class="container min-vh-100 d-flex flex-column justify-content-center align-items-center gap-3">

        <h1 class="">Technos <span class="text-muted">Systems</span></h1>
        <div style="max-width: 22rem;" class="container-fluid px-0 pt-3 shadow-sm border bg-white">
            <!-- <section class="text-center">
                <h1><span class="fw-bold">Technos</span> Systems</h1>
                <hr>
            </section> -->

            <p class="text-center text-muted">Register a new membership</p>
            <form class="container" action="">

                <div class="row my-0 gap-3">

                    <div class="col-12 input-group px-3">
                        <input required aria-required placeholder="Full name" class="form-control border-end-0" type="text" name="full-name" id="full-name">
                        <span class="input-group-text bg-white border-start-0">
                            <svg style="width: 1rem;" class="img-fluid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>
                        </span>
                    </div>

                    <div class="col-12 input-group px-3">
                        <input required aria-required placeholder="Email" class="form-control border-end-0" type="email" name="email" id="email">
                        <span class="input-group-text bg-white border-start-0">
                            <svg style="width: 1.1rem;" class="img-fluid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>
                        </span>
                    </div>
                    <div class="col-12 input-group px-3">
                        <input required aria-required="required" placeholder="Password" class="form-control border-end-0" type="password" name="password" id="password">

                        <span class="input-group-text border-start-0 bg-white">
                            <svg style="width: 1.1rem;" class="img-fluid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                            </svg>
                        </span>
                    </div>

                    <div class="col-12 input-group px-3">
                        <input required aria-required="required" placeholder="Retype password" class="form-control border-end-0" type="password" name="confirm-password" id="confirm-password">

                        <span class="input-group-text border-start-0 bg-white">
                            <svg style="width: 1.1rem;" class="img-fluid" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                            </svg>
                        </span>
                    </div>

                    <div class="container px-3">

                        <div class="row justify-content-center align-items-center">

                            <div class="col-7">
                                <section class="form-check">
                                    <input class="form-check-input p-2 rounded-0" type="checkbox" name="remember-me" id="remember-me">
                                    <label class="form-check-label fw-bold" class="fw-bold" for="remember-me">I agree to the <span class="text-primary">terms</span></label>
                                </section>
                            </div>

                            <div class="col-5 text-end">
                                <input style="max-width: 5.6rem;" class="w-100 btn btn-primary" type="submit" value="Register">
                                <!-- <a style="max-width: 5.6rem;" href="" role="button" class="w-100 btn btn-primary">Sign In</a> -->
                            </div>
                        </div>
                    </div>

                    <a href="http://localhost:8080/technos-system-assessment/views/login.php" class="pb-4 ps-3 text-primary text-decoration-none">I already have a membership</a>
                </div>

            </form>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>