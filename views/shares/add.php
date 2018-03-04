<!--Created by PhpStorm.-->
<!--User: Tamas-->
<!--Date: 2018-03-04-->
<!--Time: 4:43 PM-->

<div class="card" style="width: 18rem;">
    <div class="card-header">
        Share Something!
    </div>
    <form method="post">
        <div class="form-group">
            <label for="title">Share Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea type="text" name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" name="link" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
        <a href="<?php echo ROOT_PATH; ?>shares" class="btn btn-danger">Cancel</a>
    </form>
</div>

<!--<div class="panel panel-default">-->
<!--    <div class="panel-heading">-->
<!--        <h3 class="panel-title">Share Something!</h3>-->
<!--    </div>-->
<!--    <div class="panel-body">-->
<!--        <form method="post" action="--><?php //$_SERVER['PHP_SELF']; ?><!--">-->
<!--            <div class="form-group">-->
<!--                <label>Share Title</label>-->
<!--                <input type="text" name="title" class="form-control" />-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label>Body</label>-->
<!--                <textarea name="body" class="form-control"></textarea>-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label>Link</label>-->
<!--                <input type="text" name="link" class="form-control" />-->
<!--            </div>-->
<!--            <input class="btn btn-primary" name="submit" type="submit" value="Submit" />-->
<!--            <a class="btn btn-danger" href="--><?php //echo ROOT_PATH; ?><!--shares">Cancel</a>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!---->
