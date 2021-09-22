<?php 

define('__CONFIG__', true);
require_once "inc/config.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="robots" content="follow" />
	<title>Index page</title>
	<base href="/" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/css/uikit.min.css" />

</head>
<body>

	<div class="uk-section uk-container">
		<?php
            echo "Hello, today is ";
            echo date("y m d");
        ?>
        <br>
        <a href="/login.php">Login</a>
        <a href="/register.php">Register</a>
	</div>

    <?php
        require_once "inc/footer.php";
    ?>

</body>
</html>