<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "functions.php";

if (isset($_GET['kindid'])) {

    //echo 'Here we are:'.$_GET['kindid'];
    if (isset($_GET['version'])) {
        $serial_num_of_newest_part = get_part_ID($_GET['kindid'], $_GET['version']);
        if ($serial_num_of_newest_part ) {
            $serial_num = explode('-', $serial_num_of_newest_part);
            $num = end($serial_num);
            echo str_pad($num+ 1, 4, 0, STR_PAD_LEFT);
        } else {
            
            echo "0001";
        }
        
    } else {
        $serial_num_of_newest_part = get_part_ID($_GET['kindid']);
        if ($serial_num_of_newest_part) {
            $serial_num = explode('-', $serial_num_of_newest_part);
            $num = end($serial_num);
            echo str_pad($num+ 1, 4, 0, STR_PAD_LEFT);
        } else {
            
            echo "0001";
        }
    }
}