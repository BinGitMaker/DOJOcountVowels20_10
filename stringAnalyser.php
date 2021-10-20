<?php

/**
 * A simple string analyser module
 * 
 * It contains functions to get information on strings
 */

declare(strict_types=1);
    
// TODO add your countVowels 

function countVowels(string $sentence)
{

    $vowels = [
    "a" => substr_count(strtolower($sentence), "a"),
    "e" => substr_count(strtolower($sentence), "e"), 
    "i" => substr_count(strtolower($sentence), "i"), 
    "o" => substr_count(strtolower($sentence), "o"), 
    "u" => substr_count(strtolower($sentence), "u"), 
    "y" => substr_count(strtolower($sentence), "y")
    ];
    return $vowels;
}
