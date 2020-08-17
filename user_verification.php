<?php include('controllers/user_activation.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>User Verification</title>
 
 </head>

<body>

    <div class="container">
        <div class="jumbotron text-center">
            <h1 class="display-4">User Email Verification </h1>
            <div class="col-12 mb-5 text-center">
                <?php echo $email_already_verified; ?>
                <?php echo $email_verified; ?>
                <?php echo $activation_error; ?>
            </div>
            <p class="lead">Click the button to continue</p>
            <a class="btn btn-lg btn-success" href="http://localhost:8888/php-user-authentication/index.php"
               >Click to Login
            </a>
        </div>
    </div>


    <!-- jQuery + Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>