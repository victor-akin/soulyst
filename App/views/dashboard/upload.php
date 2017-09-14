<?php  ?>
    <a href="<?php echo PROJECT_PATH.'home'; ?>">Home</a>
    <a href="<?php echo PROJECT_PATH.'logout/index'; ?>">Logout</a>
    <?php
        if(isset($this->msg)) echo $this->msg;
    ?>

<div class="login-form">
    <div class="form-wrapper">
        <form enctype="multipart/form-data" method="POST">

            <div class="form-field">
                <label for="file" class="file"></label>
                <input name="file[]" type="file" class="file-input" multiple/>
            </div>

            <div class="form-field">
                <input type="submit" name="upload" value="Upload"/>
            </div>

        </form>
        <div class="other">
            <a href="<?php echo PROJECT_PATH.'dashboard/index' ?>">Back</a>
        </div>
    </div>
</div>


