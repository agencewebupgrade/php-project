<?php

function calculateurMots($chaineCaractere) {
    return str_word_count($chaineCaractere); 
}

$str = 'Welcome to the jungle';
echo calculateurMots($str);