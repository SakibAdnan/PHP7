<?php

//Check boxes functions
function isChecked($inputName, $value){
    if(isset($_GET[$inputName]) && in_array($value, $_GET[$inputName])){
        echo 'checked';
    }
}
function isFruitsChecked($value){
    if(isset($_GET['fruits']) && in_array($value, $_GET['fruits'])){
        echo 'checked';
    }
}
//Select fruits Item
function selectedFruits($options, $selectedValue){
    foreach($options as $option){
        $selected = '';
        if(in_array($option, $selectedValue)){
            $selected = 'selected';
        }
        printf("<option value='%s' %s >%s</option>", strtolower($option), $selected, ucwords($option) );
    }
} 