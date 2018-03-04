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
