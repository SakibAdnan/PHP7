<!DOCTYPE html>
<html lang="en">
<?php 
    include_once "functions.php";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="style.css">
    <title>Basic HTML to PHP</title>
</head>
<body>
    <div class="container page-rapper">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <div class="content-inner">
                    <ul class="nav-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="form-one.php">Form One</a></li>
                        <li><a href="checkbox-select.php">Check Box & Select</a></li>
                        <li><a href="file-upload.php">File upload form</a></li>
                    </ul>
                    <h1>Welcome to Our FOrm One</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <?php
                        $fname = '';
                        $lname = '';
                    ?>
                    <?php if(isset($_GET['fname']) && !empty($_GET['fname']) ) : ?>
                        <?php 
                           // $fname = htmlspecialchars($_GET['fname']);
                            $fname = filter_input(INPUT_GET, 'fname',FILTER_SANITIZE_STRING);
                            printf("<h5>First Name: %s </h5>", $fname );
                        ?>    
                    <?php endif;?>
                    <?php if(isset($_GET['lname']) && !empty($_GET['lname']) ): ?>
                        <?php 
                            //$lname = htmlspecialchars( $_GET['lname']);
                            $lname = filter_input(INPUT_GET, 'lname',FILTER_SANITIZE_STRING);
                            printf("<h5>Last Name: %s </h5>", $lname );
                        ?>  
                    <?php endif;?>

                    <?php print_r($_GET); ?>

                    <form method="GET"  enctype="multipart/form-data" action="">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" value="<?php echo $fname ?>">
                        <label for="lname">First Name</label>
                        <input type="text" name="lname" value="<?php echo $lname ?>">
                        <br>    
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>