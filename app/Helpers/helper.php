<?php

if(!function_exists('uniqueHtmlTagId')){
    function uniqueHtmlTagId(){
        return uniqid('id_');
    }
}