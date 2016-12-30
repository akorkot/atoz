<?php


/**
 * @param $var
 * @param bool $die
 */
function dump($var, $die = TRUE) {
    print "<pre>";
        print_r($var);
    print "</pre>";
    if($die) die;
}