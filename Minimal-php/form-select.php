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
                        <h1>Hello Welcome To Our Select Form</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit!</p>
                    </div>
                    <div>
                        <?php 
                            $fruitsList = ['Apple', 'Mango', 'Banana', 'Orange', 'Lemon'];
                        ?>
                    <h3>Selected Fruits</h3>
                    <p>
                        You Have Select fro: 
                        <?php 
                            $sfruits = filter_input(INPUT_POST, 'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY) ?? [];
                            if(count($sfruits)>0){
                                echo join(" / ", $sfruits );
                            }
                            
                        ?>
                    </p>
                    <hr>
                    </div>
                    <form action="" method="POST">
                    <h3>
                        <label for="">Select Some Fruits</label>
                    </h3>
                    <hr>
                        <select name="fruits[]" id="" class="form-control" style="height:200px;" multiple>
                            <option value="" selected disabled> Select Some Fruits</option>
                            <?php selectedFruits($fruitsList, $sfruits);?>
                        </select>
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

