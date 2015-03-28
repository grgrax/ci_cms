<form method="post" action="" enctype="multipart/form-data">
    <div class="panel panel-default">
        <div class="panel-heading">Edit Details</div>
        <div class="panel-body">
            <div class="form-group">
                <label for="student">Username</label>
                <input name="username" type="text" class="form-control" placeholder="Username here"
                value="<?php echo set_value('username',$row['username']) ?>">
            </div>
            <div class="form-group">
                <label for="student">Email Address</label>
                <input name="email" type="text" class="form-control" placeholder="Email here"
                value="<?php echo set_value('email',$row['email']) ?>">
            </div>
        </div>
        <div class="panel-footer">
            <input type="submit" name="add" value="Edit" class="btn btn-primary"/>
            <a href="<? echo $url ?>" class="btn btn-default"/>Cancel</a>
        </div>
    </div>
</form>


