<?php
$Id = (isset($_GET['Id']) && $_GET['Id'] != '') ? $_GET['Id'] : '';
$ROOT = "../";

include $ROOT."include/_header.php";

if($Id){
  $obj = blog()->get("Id=$Id");
}else{
  $obj = blog()->get("Id>0 order by Id desc limit 1");
}

?>

<section class="heading-title">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Blog</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row product-grid">
            <div class="col-md-8 blog-detail">
                <?php if ($obj) { ?>
                <img src="<?=$ROOT;?>media/<?=$obj->image;?>">
                <h1><?=$obj->title;?></h1>
                <h6><?=$obj->createDate;?></h6>
                <p><?=nl2br($obj->content);?></p>
                <?php } ?>
            </div>
            <div class="col-md-4 archive-list">
                <h2>Archives</h2>
                <table class="table">
                    <?php foreach (blog()->list("Id>0 order by Id desc") as $key) { ?>
                    <tr>
                        <td><a href="./blog.php?Id=<?=$key->Id;?>"><?=$key->title;?> (<?=$key->createDate;?>)</a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</section>

<?php include $ROOT."include/_footer.php";?>
