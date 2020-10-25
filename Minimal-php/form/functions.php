<?php
//City Checked
function cityChecked($cities, $cityValue){
    foreach($cities as $city){
        $checked = '';
        if(in_array(strtolower($city), $cityValue )){
            $checked = 'checked';
        }
        printf("<input value='%s' type='checkbox' name='city[]' id='%s' %s  ><label style='margin-left:3px; margin-right:7px;' for='%s'>%s</label>",
        strtolower($city), strtolower($city), $checked, strtolower($city), ucwords($city));
    }
}

//Selected Counrty
function selectCountry($countries, $selectedCountry){
    foreach($countries as $country){
        $selected = '';
        if(in_array(strtolower($country), $selectedCountry)){
            $selected = 'selected';
        }
        printf("<option value='%s' %s>%s</option>",strtolower($country), $selected, ucwords($country) );
    }
    
}