<?= $this->include('register_header') ?>
  <body>
    <div class="container">
        <div class="row justify-content-md-center">
 
            <div class="col-6">
                <h1 align="center">Sign Up</h1>
                <div class="card" style="background-color: rgb(0, 128, 128);" >
                <div class="card-body login-card-body">
                <?php if(isset($validation)):?>
                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                <?php endif;?>
                <form action="/register/save" method="post">
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('name') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword">
                    </div>
                    <div class="mb-3">
                        <label for="InputForConfPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                    </div>
                    <a href="<?php echo site_url('Login')?>">Sorry, Login Instead</a>
                    <p></p>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <p></p>
                    
                </form>
            </div>
            </div>
            </div>
        </div>
    </div>
     
   
  </body>
  <?= $this->include('register_footer') ?>