<?php

require './Random.php';

/**
 *  generate 3 random numbers
 */

$randNumbers = new Random;
$randNumbers->generate(3);

/**
 * 
 * for Debuging purpose only 
 * 
 */
echo '<pre>';
print_r($randNumbers->randNumbers);
echo '</pre>';



echo $randNumbers->checkStatus();

