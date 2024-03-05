<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Registration</title>
</head>
<body>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
            <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="images/logo.png" alt="Bootstrap" width="65" height="65">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-light">Home</a></li>
                <li><a href="#" class="nav-link px-2 link-light">About</a></li>
                <li><a href="#" class="nav-link px-2 link-light">Menu</a></li>
                <li><a href="#" class="nav-link px-2 link-light">Apps</a></li>
                <li><a href="#" class="nav-link px-2 link-light">Contact</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn me-2 btn-custom">Login</button>
                <button type="button" class="btn btn-custom">Sign-up</button>
            </div>
        </header>
    </div>



    <div class="container d-flex justify-content-center">
        <form class="mt-3">
            <div class="mb-3">
                <label for="fullNameInputExample" class="form-label text-white">Full Name</label>
                <input type="text" class="form-control" id="fullNameInputExample" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="ageInputExample" class="form-label text-white">Age</label>
                <input type="text" class="form-control" id="ageInputExample" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="addressInputExample" class="form-label text-white">Address</label>
                <input type="text" class="form-control" id="addressInputExample" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="phoneNumberInputExample" class="form-label text-white">Phone Number</label>
                <input type="text" class="form-control" id="phoneNumberInputExample" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label class="form-check-label text-white" for="exampleCheck1">Already have an account? <a href="login.php">Click Here</a></label>
            </div>
                <button type="submit" class="btn btn-primary btn-custom">Register</button>
        </form>
    </div>

</body>
</html>