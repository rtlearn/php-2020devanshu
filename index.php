<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Subscribe</title>
</head>

<body>
    <div class="container">
        <div class="row m-4">
            <div class="col-md-12 text-center">
                <H1>Github Timeline Tracker</H1>
            </div>
        </div>
        <div class="row m-4">
            <div class="col-md-4">
                <?php
                    if(isset($_SESSION['error'])){
                        echo "<span class='text-danger'>" . $_SESSION['error'] . "</span>";
                        unset($_SESSION['error']);
                    }
                    if(isset($_SESSION['success'])){
                        echo "<span class='text-success'>" . $_SESSION['success'] . "</span>";
                        unset($_SESSION['success']);
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="register.php" method="post">
                    <div class="form-group m-2">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group m-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="check" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary m-2" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <!-- <script>
        $(document).ready(function() {

        });
    </script> -->
</body>

</html>