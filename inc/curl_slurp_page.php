<!--
Project Name:   EHW CODE_LANG Demo: LONG_DEMO_NAME
Main Prj File:  controller.php

This Filename:  some_inc_file_name.php
Date Created:   02/02/22
Date Updated:   --
Programmer:     Eric L. Hepperle

File Version:    1.00.00

File Purpose:
  Single page demo for ....
-->

<?php
/* INCLUDES */
require_once('ehw_lib.php');

/**
 * @input: array of urls to image files
 * @returns: string, html chunk formatted as img gallery
 */
function show_img_gallery($urls, $desired_num=999) {
    $li_items = '';
    
    $desired_num = $desired_num < count($urls) ? $desired_num : count($urls);

    for ($i=0; $i < $desired_num; $i++) {
        $li = "<li class='res-img-cont'>";
        $li .= $i+1 . ": <img src='$urls[$i]' style='width: 100%'>";
        $li .= '</li>';
        $li_items .= $li;
    }

    $out = <<<OUT
    <ul>
      $li_items
    </ul>
    OUT;
    
    return $out;
}


?>