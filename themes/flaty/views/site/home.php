  <div class="container">
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'login-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),'htmlOptions'=>array('class'=>'form-signin','enctype'=>'multipart/form-data')
)); ?>
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" class="sr-only">Email address</label>
        <input type="text" name="LoginForm[username]" id="inputUsername" class="form-control" placeholder="Masukan username anda" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="LoginForm[password]" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input name="LoginForm[rememberMe]" type="checkbox" value="1"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="yt0"  value="Login">Sign in</button>
      <?php $this->endWidget(); ?>
</div>