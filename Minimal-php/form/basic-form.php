<?php 
    include_once 'functions.php';
    $cities = ['Dhaka', 'Cumilla', 'Rangpur', 'Feni', 'nowakhali'];
    $countries = ['Bangladesh', 'Indea', 'Pakistan', 'USA', 'Austrilia'];
    //array_pop($cities);
    $fileTypes = ['image/png', 'image/jpg', 'image/jpeg'];
    if(isset($_FILES['image']) && in_array($_FILES['image']['type'], $fileTypes)){
        move_uploaded_file($_FILES['image']['tmp_name'],  "images/". $_FILES['image']['name']);
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
                        <h1>Contuct Us Now</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum facilis aliquam reiciendis enim voluptate quasi similique assumenda facere expedita voluptates! Cum facilis aliquam reiciendis enim voluptate quasi similique assumenda facere expedita voluptates!</p>
                    </div>
                    <div>
                        <?php
                            $fname = '';
                            if(isset($_POST['fname']) && $_POST['fname']!=''){
                                $fname = $_POST['fname'];
                            }
                            $lname = '';
                            if(isset($_POST['lname']) && $_POST['lname']!=''){
                                $lname = $_POST['lname'];
                            }
                            $agree = '';
                            if(isset($_POST['agree']) && $_POST['agree']=='agree'){
                                $agree = "checked";
                            }
                            $displyCity = "";
                            $dpcities = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY) ?? [];
                            if(count($dpcities)>0){
                                $displyCity = join(" / ", $dpcities );
                            }
                            $displyCountry = "";
                            $dpCountry = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY) ?? [];
                            if(count($dpCountry)>0){
                                $displyCountry = join(" / ", $dpCountry );
                            }
                            $country = '';
                            if(isset($_POST['country']) && $_POST['country'] !=''){
                                $country = $_POST['country'];
                            }
                        ?>
                        
                        <img style="height:250px; width:100%;" src="images/<?php echo $_FILES['image']['name']?>" alt="">
                        <br><h3>Output Result</h3><hr>
                        <p>First Name: <?php echo $fname?> </p>
                        <p>Last Name: <?php echo $lname?> </p>
                        <p>Selected Cities: <?php echo $displyCity?> </p>
                        <p>Selected Country: <?php echo $displyCountry?> </p>
                    </div>
                    <hr>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <label for="fname">Fast Name</label>
                        <input class="form-control" type="text" name="fname" id="fname">
                        <label for="lname">Last Name</label>
                        <input class="form-control" type="text" name="lname" id="lname">
                        <input type="checkbox" value="agree" name="agree" id="agree" <?php echo $agree?>>
                        <label class="mt-3" for="agree" value="agree">I agree</label>
                        <hr>
                        <h4>Checked City</h4>
                            <?php
                                $checkedCity = $_POST['city'] ?? [];
                                cityChecked($cities, $checkedCity);
                            ?>
                        <hr>
                        <h4>Select Country</h4>
                        <select class="form-control mt-3" name="country[]" id="" multiple>
                            <option value="" disabled selected>Select Country</option>
                            <?php
                                $sCountry = $_POST['country'];
                                selectCountry($countries, $sCountry);
                            ?>
                        </select>
                        <hr>
                        <h4>Chose File</h4>
                        <input type="file" name="image" id="" value="<?php echo $_FILES['image']['name']?>">
                        <br>
                        <input class="mt-3 btn btn-primary" type="submit" value="Submit">
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

