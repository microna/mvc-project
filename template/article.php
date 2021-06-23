<?php
/**
 * article page template
 */
//echo '<pre>';
//print_r($result);
    $out ='';
    $out .='<div>';
    $out .='<h4>'.$result['title'].'</h4>';
    $out .='<p>'.$result['descr_min'].'</p>';
    $out .='<img src="/static/images/'.$result['image'].'" >';
    $out .='<p>'.$result['description'].'</p>';
    $out .='</div>';
    echo $out;

