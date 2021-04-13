<!DOCTYPE html>
<html lang="en">
<?php 
    include_once "functions.php";
    $projects = ['Wordpress', 'html', 'CSS', 'php'];
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
                    <h1>Welcome to Checkbox & Select Form</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <?php
                        $checked = '';
                    ?>
                    <?php if(isset($_GET['projects']) && !empty($_GET['projects']) ): ?>
                        <?php 
                            //$lname = htmlspecialchars( $_GET['lname']);
                            $projectsType = filter_input(INPUT_GET, 'projects',FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY);
                            if(count($projectsType)>0){
                                $dpprojects = join("/ ", $projectsType );
                                printf("<h5>Projects Type: %s </h5>", $dpprojects );
                            }
                        ?>  
                    <?php endif;?>

                    <?php if(isset($_GET['cb1']) && $_GET['cb1']=='on' ): ?>
                        <?php 
                            $checked = 'checked';
                        ?>   
                    <?php endif;?>
                    <?php print_r($_GET); ?>
                    <form method="GET" action="">
                        <div>
                            <input type="checkbox" name="cb1"  <?php echo $checked ?>>
                            <label for="cb1" class="label-inline">Check One</label>
                        </div>
                        <select name="projects[]" id="project" multiple>
                            <option value="" selected disabled>--Select project tpe--</option>
                            <?PHP 
                                $selectProject = $_GET['projects'];
                                projectSelect($projects, $selectProject);
                            ?>
                        </select>

                        <label for="">Select Some Friends</label>
                        <input type="checkbox" name="friends[]" value="sakib" <?php checked('friends','sakib') ?> >
                        <label for="" class="label-inline" >Sakib</label>
                        <input type="checkbox" name="friends[]"  value="rakib" <?php checked('friends','rakib') ?> >
                        <label for="" class="label-inline">Rakib</label>
                        <input type="checkbox" name="friends[]" value="kamal" <?php checked('friends','Kamal')?> >
                        <label for="" class="label-inline"  >kamal</label>
                        <input type="checkbox" name="friends[]" value="jamal" <?php checked('friends','jamal') ?> >
                        <label for="" class="label-inline" >Jamal</label>

                        <br>    
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>