<!--Created by PhpStorm.-->
<!--User: Tamas-->
<!--Date: 2018-03-04-->
<!--Time: 4:42 PM-->

<div>
    <a href="<?php echo ROOT_PATH?>shares/add" class="btn btn-success btn-share">Share Something</a>
    <?php foreach ($viewmodel as $item) : ?>
        <div class="well">
            <h3><?php echo $item['title']; ?></h3>
            <small><?php echo $item['create_date'];?></small>
            <hr>
            <p><?php echo $item['body'];?></p>
            <br>
            <a href="<?php echo $item['link'];?>" class="btn btn-default" target="_blank">Go to Website</a>
        </div>
    <?php endforeach; ?>
</div>

