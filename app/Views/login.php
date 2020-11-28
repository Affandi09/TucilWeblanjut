
<?= $this->include('login_header') ?>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
 
            <div class="col-6">
                <h1 align="center">Sign In</h1>
                <div class="card " style="background-color: rgb(0, 128, 128);">
                <div class="card-body login-card-body">
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                <form action="/login/auth" method="post">
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                    </div>
                    <p class="mb-1">
                    <a href="<?php echo site_url('register')?>">I need to register</a>
                    </p>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
     
      </body>
  <?= $this->include('login_footer') ?>