            <!-- BEGIN Login Form -->
            <?php if(Yii::app()->user->hasFlash('berhasil')): ?>
                    <div class="flash-success">
                    <div class="alert alert-success hidden-xs">
                        <button class="close" data-dismiss="alert">&times;</button>
                       <p><?php echo Yii::app()->user->getFlash('berhasil'); ?></p>
                   </div>
                </div>
            <?php endif; ?>
            <?php if(Yii::app()->user->hasFlash('tidak_ditemukan')): ?>
                <div class="flash-success">
                    <div class="alert alert-warning hidden-xs">
                        <button class="close" data-dismiss="alert">&times;</button>
                        <p><?php echo Yii::app()->user->getFlash('tidak_ditemukan'); ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(Yii::app()->user->hasFlash('gagal')): ?>
                <div class="flash-success">
                    <div class="alert alert-warning hidden-xs">
                        <button class="close" data-dismiss="alert">&times;</button>
                        <p><?php echo Yii::app()->user->getFlash('gagal'); ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <?php $form=$this->beginWidget('CActiveForm', array(
              'id'=>'login-form',
              // Please note: When you enable ajax validation, make sure the corresponding
              // controller action is handling ajax validation correctly.
              // See class documentation of CActiveForm for details on this,
              // you need to use the performAjaxValidation()-method described there.
              'enableAjaxValidation'=>false,'htmlOptions'=>array('class'=>'form-horizontal','enctype'=>'multipart/form-data')
            )); ?>
                <h3>Login to your account</h3>
                <hr/>
                <div class="form-group">
                    <div class="controls">
                        <input type="text" id="username" name="Login[username]" placeholder="Username" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <input type="password" id="password" name="Login[password]" placeholder="Password" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" value="remember" /> Remember me
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <button type="submit" value="login" class="btn btn-primary form-control">Sign In</button>
                    </div>
                </div>
                <hr/>
                <p class="clearfix">
                    <a href="#" class="goto-forgot pull-left">Forgot Password?</a>
                    <a href="#" class="goto-register pull-right">Sign up now</a>
                </p>
            </form>
            <!-- END Login Form -->

            <!-- BEGIN Forgot Password Form -->
            <form id="form-forgot" action="index.html" method="get" style="display:none">
                <h3>Get back your password</h3>
                <hr/>
                <div class="form-group">
                    <div class="controls">
                        <input type="text" placeholder="Email" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary form-control">Recover</button>
                    </div>
                </div>
                <hr/>
                <p class="clearfix">
                    <a href="#" class="goto-login pull-left">← Back to login form</a>
                </p>
            <?php $this->endWidget(); ?>
            <!-- END Forgot Password Form -->

            <!-- BEGIN Register Form -->
            <form id="form-register" action="index.html" method="get" style="display:none">
                <h3>Sign up</h3>
                <hr/>
                <div class="form-group">
                    <div class="controls">
                        <input type="text" placeholder="Email" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <input type="text" placeholder="Username" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <input type="password" placeholder="Password" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <input type="password" placeholder="Repeat Password" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" value="remember" /> I accept the <a href="#">user aggrement</a>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary form-control">Sign up</button>
                    </div>
                </div>
                <hr/>
                <p class="clearfix">
                    <a href="#" class="goto-login pull-left">← Back to login form</a>
                </p>
            </form>
            <!-- END Register Form -->
       
