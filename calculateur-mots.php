<?php

function calculateurMots($chaineCaractere) {
    echo str_word_count($chaineCaractere); 
}

$str = 'Welcome to the jungle';
calculateurMots($str);