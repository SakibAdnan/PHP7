<!DOCTYPE html>
<?php include_once 'functions.php'?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome PHP</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" crossorigin="anonymous" />   
</head>
<body>
    <section class="main-container mt-50">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="main-content">
                        <h1>Hello Welcome To Our Website</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum facilis aliquam reiciendis enim voluptate quasi similique assumenda facere expedita voluptates! Cum facilis aliquam reiciendis enim voluptate quasi similique assumenda facere expedita voluptates!</p>
                    </div>
                    <div>
                        <?php
                            $fname ='';
                            if(isset($_GET['fname']) && !empty($_GET['fname'])){
                                $fname = htmlspecialchars($_GET['fname']);
                            }

                            $lname ='';
                            if(isset($_GET['lname']) && !empty($_GET['lname'])){
                                $lname = htmlspecialchars($_GET['lname']);
                            }

                            $checked ='';
                            if(isset($_GET['check1']) && $_GET['check1']== 1){
                                $checked = 'checked';
                            }
                        ?>
                        <p>First Name: <?php echo $fname ?></p>
                        <p>Last Name: <?php echo $lname ?></p>
                        <p>Checked Fruits: <?php print_r( $_GET['fruits']); ?></p>
                    </div>
                    <form action="" method="GET">
                        <label class="mt-3" for="">First Name:</label>
                        <input class="form-control" type="text" name="fname" id="" value="<?php echo $fname;?>">
                        <label class="mt-3" for="">Last Name:</label>
                        <input class="form-control" type="text" name="lname" id="" value="<?php echo $lname;?>">
                        <input class="mt-3" type="checkbox" name="check1" value="1" id="ck1" <?php echo $checked; ?>>
                        <label  for="ck1">Check</label></br>
                        <label class="mt-3" for="">Checked Some Fruits</label>
                        <hr>
                        <input type="checkbox" name="fruits[]" value="orange" id="" <?php isFruitsChecked( 'orange')?>>
                        <label  for="">Orange</label></br>
                        <input type="checkbox" name="fruits[]" value="banana" id="" <?php isFruitsChecked( 'banana')?>>
                        <label  for="">Banana</label></br>
                        <input type="checkbox" name="fruits[]" value="mango" id="" <?php isFruitsChecked('mango')?>>
                        <label  for="">Mango</label></br>
                        <input type="checkbox" name="fruits[]" value="apple" id="" <?php isFruitsChecked( 'apple')?>>
                        <label  for="">Appel</label></br>
                        <input class="mt-3 btn btn-primary" type="submit" value="Submit" >
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

