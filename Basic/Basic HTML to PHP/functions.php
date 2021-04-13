<?php 
function checked($input, $value){
    if(isset($_GET[$input]) && in_array($value, $_GET[$input] )){
        echo 'checked';
    }
}

function projectSelect($options, $selectedValue){
   
    foreach ($options as $option ) {
        $selected = '';
        if(in_array(strtolower($option), $selectedValue) ){
           $selected = 'selected'; 
        }
        printf("<option value='%s' %s>%s</option> \n", strtolower($option), $selected, strtoupper($option));
    }
}