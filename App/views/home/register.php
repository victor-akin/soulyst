<div class="row">
 <div class="col s5 offset-s4">
 &nbsp
    <div class="login-form ">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s6"><a target="_self" href="#">Sign Up</a></li>
        <li class="tab col s6"><a target="_self" class="active" href="<?php echo PROJECT_PATH.'home'; ?>">Home</a></li>
      </ul>
    </div>
        <div class="form-wrapper">
            <form method="post" action="">

               <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">fullname</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">email</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">lock</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">password</label>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Register
                    <i class="material-icons right">send</i>
                </button>

            </form>
        </div>
    </div>
 </div>    
</div>    