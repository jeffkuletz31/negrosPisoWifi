<?php
$blogList = blog()->list();
?>

<!-- Item list -->
<section class="content roboto">
    <div class="container-fluid" style="padding: 0px 0px 8px 0px;">
        <div class="row">
            <div class="col-md-4 col-xs-12" style="padding-top: 8px;">
                <h4 class="no-gap">My Blogs</h4>
            </div>
            <div class="col-md-8 col-xs-12 no-gap">
                <div class="col-md-8 col-xs-9" style="padding-top: 8px;">
                    <form>
                        <div class="form-group no-gap">
                            <input type="text" id="cpanel-search-item" class="form-control" placeholder="Search" autocomplete="off" value="">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-xs-3" style="padding-top: 8px;">
                    <div class="pull-right">
                        <a href="../admin/?view=addBlog" type="button" id="btn-new-item" class="btn btn-green" style="font-size: 12px;">Add a new blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pull-right">
    </div>
    <div class="col-md-12 no-gap">
        <div class="">
            <div class="panel-body no-gap">
                <div class="table-container" style="margin-top: 8px;">
                    <table class="table table-filter">
                        <tbody>
                        <?php foreach($blogList as $row) { ?>
                            <tr class="">
                                <td>
                                    <div class="media">
                                        <?php if($row->image != null) {?>
                                          <div class="media-photo pull-left" style="background-image: url('../include/img/upload/<?=$row->image;?>');">
                                          </div>
                                        <?php }else{ ?>
                                          <div class="media-photo pull-left" style="background-image: url('../include/img/no-image.png');">
                                          </div>
                                        <?php } ?>
                                        <div class="media-body">
                                          <span class="media-meta pull-right"><?=date("j F Y", strtotime($row->createDate));?></span>
                                          <h4 class="title">
                                              <?=$row->title;?>
                                          </h4>
                                          <p class="summary"><?=$row->content;?></p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <div class="content-footer">
    </div>
    </div>
</section>
<!-- End of Shop/Item list -->