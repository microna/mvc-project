
<form action="" method="POST" enctype="multipart/form-data">
        <label for="title">Title</label>
        <input class="form-control w-50" type="text" name="title" value="<?php echo $result['title'];?>">
    <label class="mt-4" for="url">URL:</label>
    <input class="form-control w-50 " type="text" name="url" value="<?php echo $result['url'];?>">

    <label class="mt-4" for="descr_min">Min descr:</label>
    <textarea class="form-control w-50" name="descr_min"><?php echo $result['descr_min'];?></textarea>

    <label class="mt-4" for="description">Descr:</label>
    <textarea class="form-control w-50" name="description"><?php echo $result['description'];?></textarea>

    <label class="mt-4">Category:
        <select class="form-select mb-4" name="cid">
            <?php
            $out = '';
            for($i=0; $i < count($category); $i++) {
                if ($category[$i]['id'] ===  $result['cid']){
                    $out .= '<option value="' . $category[$i]['id'] . '" selected>' . $category[$i]['title'] . "</option>";
                }
                else {
                    $out .= '<option value="' . $category[$i]['id'] . '">' . $category[$i]['title'] . "</option>";
                }
            }
            echo $out;
            ?>
        </select>
    </label>

        <input class="form-control w-50" type="file" name="image" value="<?php echo $result['image'];?>">
    <?php
        if (isset($result['image']) AND $result['image']!='') {
            echo '<img src="/static/images/'.$result['image'].'" style="width:100px">';
        }
    ?>
     <input class="btn btn-primary d-block mt-4" type="submit" name="submit" value="<?php echo $action;?>">
</form>

