<?php
/**
 * main page template
 */


$out = '';
for ($i = 0; $i < count($result); $i++) {
    $out .='<div class="col">';
    $out .='<div class="item pb-5"  style="width: 15rem;">';
    $out .='<img class="img-thumbnail " src="/static/images/'.$result[$i]['image'].'">';
    $out .='<h4>'.$result[$i]['title'].'</h4>';
    $out .='<p'.$result[$i]['descr_min'].'</p>';
    $out .='<div><a class="btn btn-info text-light" href="/article/'.$result[$i]['url'].'">Read more</a></div>';
    $out .='</div>';
    $out .='</div>';
}
?>

<?php require_once 'header.php'?>
<section style="padding-top: 140px">
<div class="container">
    <div class="row text-center g-4">
        <div class="row">
<?php
echo $out;
?>
</div>
</div>
</div>
</section>
