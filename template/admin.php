<?php
/**
 * login page template
 */
if (!getUser()) {
    header("Location: /login");
}
$out = '';
for ($i = 0; $i < count($result); $i++) {
    $out .= '<div class="col mt-5">';
    $out .= '<img src="/static/images/' . $result[$i]['image'] . '" width=120px>';
    $out .= '<p>' . $result[$i]['title'] . '</p>';
    $out .= '<div><a class="btn btn-danger mb-3" href="/admin/delete/' . $result[$i]['id'] . '" onclick="return confirm(\'Are you sure???\')">Delete</a></div>';
    $out .= '<div><a class="btn btn-success" href="/admin/update/' . $result[$i]['id'] . '" onclick="return confirm(\'Are you sure???\')">Update</a></div>';
    $out .= '</div>';
}

?>
<?php require_once 'header.php'?>
<div class="container">
    <section style="padding-top: 140px">
        <h1>Admin panel</h1>
        <div class="wrapper d-flex">
        <div class="mx-5"><a class="btn btn-info text-white" href="/admin/create">Create</a></div>
        <div><a class="btn btn-secondary" href="/logout">Logout</a></div>
        </div>
        <div class="row text-center g-4">
            <div class="row">
                <?php
                echo $out;
                ?>
            </div>
        </div>
</div>
</section>
