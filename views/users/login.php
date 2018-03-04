<!--Created by PhpStorm.-->
<!--User: Tamas-->
<!--Date: 2018-03-04-->
<!--Time: 4:43 PM-->

<div class="card" style="width: 18rem;">
    <div class="card-header">
        User Login
    </div>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </form>
</div>
