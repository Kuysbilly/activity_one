<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
        body {
            background-image: url('clouds.jpg');
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image horizontally and vertically */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background to the container */
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px #000;
            
        }
        .center-content {
            text-align: center;
            font-family: 'Times New Roman';
            font-weight: bold;
            font-size: larger;
        }
        .center-button {
            text-align: center;
            font-family: calibri;
            font-weight: bold;
            font-size: larger;
        }
    </style>
</head>
<body>

<div class="container">
    <form action="registration.php" method="post">
        <div class="center-content">
            <h1>REGISTRATION</h1>
            <p>Fill up the form with correct values.</p>
        </div>
        <hr class="mb-3">

        <label for="firstname"><b>First Name</b></label>
        <input class="form-control" id="firstname" type="text" name="firstname" required>

        <label for="lastname"><b>Last Name</b></label>
        <input class="form-control" id="lastname" type="text" name="lastname" required>

        <label for="email"><b>Email Address</b></label>
        <input class="form-control" id="email" type="email" name="email" required>

        <label for="phonenumber"><b>Phone Number</b></label>
        <input class="form-control" id="phonenumber" type="text" name="phonenumber" required>

        <label for="password"><b>Password</b></label>
        <input class="form-control" id="password" type="password" name="password" required>
        <hr class="mb-3">

        <div class="center-button">
            <input class="btn btn-primary" type="submit" id="register" name="create" value="SIGN UP">
        </div>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
    $(function () {
        $('#register').click(function (e) {

            var valid = this.form.checkValidity();

            if (valid) {

                var firstname = $('#firstname').val();
                var lastname = $('#lastname').val();
                var email = $('#email').val();
                var phonenumber = $('#phonenumber').val();
                var password = $('#password').val();

                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'process.php',
                    data: {firstname: firstname, lastname: lastname, email: email, phonenumber: phonenumber, password: password},
                    success: function (data) {
                        Swal.fire({
                            'title': 'Successful',
                            'text': data,
                            'type': 'success'
                        })

                    },
                    error: function (data) {
                        Swal.fire({
                            'title': 'Errors',
                            'text': 'There were errors while saving the data.',
                            'type': 'error'
                        })
                    }
                });

            } else {

            }
        });
    });
</script>
</body>
</html>
