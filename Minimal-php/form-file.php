<?php 
    $fileTypes = ['image/png', 'image/jpg', 'image/jpeg'];
    $totalFiles = count($_FILES['image']['name']);
    for($i=0; $i<$totalFiles; $i++){
        if(isset($_FILES['image']) && in_array($_FILES['image']['type'][$i], $fileTypes)!=false){
            move_uploaded_file($_FILES['image']['tmp_name'][$i], "files/". $_FILES['image']['name'][$i]);
        }
    }

?>
<!DOCTYPE html>
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
                        <h1>Hello Welcome To Our File Upload Form</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit!</p>
                    </div>
                    <div>
                        <pre>
                            <p>
                                <?php print_r($_POST); ?>
                                <?php print_r($_FILES); ?>
                            </p>
                        </pre>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <label for="fname">First Name</label>
                        <input class="form-control" type="text" name="fname" id="fname">
                        <label for="lname">Last Name</label>
                        <input class="form-control" type="text" name="lname" id="lname">
                        <hr>
                        <h3>
                            <label for="">Upload a Image</label>
                        </h3>
                        <input type="file" name="image[]" id="">
                        <input type="file" name="image[]" id="">
                        <input type="file" name="image[]" id="">
                        <br>
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

