<?php
	
$my_arr_constructor = array();
$my_arr_literal = [];
$my_arr_init_vals = ['pomme', 'orange', 'banane']; //arrays can take a mixture of datatypes
$my_arr_mix_vals = ['pomme', 'orange', 'banane', 2, 3, 4, true, false, null, 5.6, 6.9, 7.2];
$mixed_arr = ['pomme', 'orange', 'banane', 2, 3, 4, true, false, null, 5.6, 6.9, 7.2]; //arrays can take a mixture of datatypes
    	

  // Adding to an array
array_push($mixed_arr, "J'aime les chats");
$mixed_arr[] = "J'aime les chiens";
array_unshift($mixed_arr, false);

// Removing from an array
array_pop($mixed_arr);

array_shift($mixed_arr);

array_splice($mixed_arr, 3, 1);

// Nested Array
$mixed_arr[] = [
  "Voici",
  "Le mort de le monde"
];

// Modifying a value in an array
$mixed_arr[3] = "Le paradoxe de la vie est72";
?>