<?php
function langs(string $lang){
    $exp = explode(".", $lang);
    $url = 'langs/' . $exp[0] . '.php';
    if(file_exists($url)){
        $arq = include($url);
        if(array_key_exists($exp[1], $arq)) {
            return $arq[$exp[1]];
        }else{
            return $lang;
        }
    }

    return $lang;
}