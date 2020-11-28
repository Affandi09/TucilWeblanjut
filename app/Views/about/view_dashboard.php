<?= $this->include('about/about_header') ?>
<body>
    <center>
    <?php $session = session(); ?>
     <br>
     <br>
     <br>
     <h1><?php echo "Wellcome to Author Contact, ".$session->get('user_name');  ?></h1>
     <p>Gilang Rahman Affandi</p>
     <p>1817051075</p>
     <p></p>
     <img src="<?=base_url('bootstrap-4.5.3/dist/image.png')?>" height="500px" width="500px;">
     <p></p>
     <a href="<?php echo base_url('/Dashboard'); ?>" class="btn btn-lg btn-secondary">Back</a>
     </br>
     </br>
     </br>
    </center>
</body>
<?= $this->include('about/about_footer') ?>