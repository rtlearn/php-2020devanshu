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
    <title>Unsubscribe</title>
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
                if (isset($_SESSION['error'])) {
                    echo "<span class='text-danger'>" . $_SESSION['error'] . "</span>";
                    unset($_SESSION['error']);
                }
                if (isset($_SESSION['success'])) {
                    echo "<span class='text-success'>" . $_SESSION['success'] . "</span>";
                    unset($_SESSION['success']);
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="unsubscribe.php" method="post">
                    <div class="form-group m-2">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Confirm email to unsubscribe" required>
                        <input type="hidden" name="token" value="<?= $_GET['t']; ?>" />
                    </div>
                    <button class="btn btn-primary m-2" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>