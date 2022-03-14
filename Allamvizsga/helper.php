<?php

//ellenorzes a firstName es a lastName nak
function validate_input_text($textValue){
    if (!empty($textValue)){
        $trim_text = trim($textValue);
        // tavolitsa el a feher karaktereket
        //a FILTER_SANITIZE_STRING szűrő eltavolitja a specialis karakteket
        $sanitize_str = filter_var($trim_text,FILTER_SANITIZE_STRING );
    
        return $sanitize_str;
    }
    //ha ures akkor teritsen vissza ures stringet
    return '';
}
//ellenorzés az emailnak
function validate_input_email($emailValue){
    if (!empty($emailValue)){
        $trim_text = trim($emailValue);
        // tavolitsa el a feher karaktereket
        //a FILTER_SANITIZE_STRING szűrő eltavolitja a specialis karakteket
        $sanitize_str = filter_var($trim_text,FILTER_SANITIZE_EMAIL);
        return $sanitize_str;
    }
    //ha ures akkor teritsen vissza ures stringet
    return '';
}

