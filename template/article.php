<?php
/**
 * article page template
 */
//echo '<pre>';
//print_r($result);

//    $out ='';
//    $out .='<div>';
//    $out .='<h4>'.$result['title'].'</h4>';
//    $out .='<p>'.$result['descr_min'].'</p>';
//    $out .='<img src="/static/images/'.$result['image'].'" >';
//    $out .='<p>'.$result['description'].'</p>';
//    $out .='</div>';
//?>
<?php //require_once 'header.php' ?>
<!--<section>-->
<?php
//    echo $out;
//?>
<!--</section>-->
<?php
$out ='';
$out .='<div class="aside">';
    $out .='<h4>'.$result['title'].'</h4>';
    $out .='<p>'.$result['descr_min'].'</p>';
    $out .='<p>'.$result['description'].'</p>';
    $out .='</div>';
    $out .='<div class="main">';
    $out .='<img src="/static/images/'.$result['image'].'" >';
    $out .='</div>';

require_once 'template/header.php';
?>
<section style="padding-top: 140px">
<div class="container">
    <div class="item d-flex justify-content-around pt-5">
        <?php
        echo $out;
        ?>
    </div>
</div>
    </section>
