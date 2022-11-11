<?php
$sentence = 'Alice was beginning to get very tired of 
sitting by her sister on the bank, and of having nothing
 to do: once or twice she had peeped into the book her 
 sister was reading, but it had no pictures or conversations 
 in it, “and what is the use of a book,” thought Alice “without 
 pictures or conversations?”';

if (preg_match_all('/(s|t)he/', $sentence, $matches)) {
    echo 'Les mots "she" et "the" sont présents ' . count($matches[0]) . ' fois.';
} else {
    echo 'Les mots "she" et "the" ne sont pas présents';
}