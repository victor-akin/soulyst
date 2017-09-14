<a href="<?php echo PROJECT_PATH.'home' ?>">Home</a> |

<?php
    echo $this->msg;
?>

<div class="login-form">
    <div class="form-wrapper">
        <form method="post" action="">

            <div class="form-field">
                <label for="fullname" class="fullname"></label>
                <input type="text" name="fullname" value="" placeholder="fullname" />
            </div>

            <div class="form-field">
                <label for="username" class="username"></label>
                <input type="text" name="username" value="" placeholder="username" />
            </div>

            <div class="form-field">
                <label for="email" class="email"></label>
                <input type="email" name="email" value="" placeholder="email@email.com" />
            </div>

            <div class="form-field">
                <label for="password" class="password"></label>
                <input type="password" name="password" value="" placeholder="password" />
            </div>

            <div class="form-field">
                <input type="submit" name="register" value="Register" />
            </div>

        </form>
    </div>
</div>