<?= $this->include('produk/produk_header') ?>
<body>
<?php $session = session(); ?>
<?php if($session->get('user_id') == '1'){ 
    ?>
<div align="center" >
    <div>
        <h1>Catatan Log Library!</h1>

        <table border='1'>
            <thread>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Deskripsi Buku</th>
            </thread>
            <tbody>
                <?php
                    foreach($data as $key => $keluar){
                ?>
                <tr>
                <?php $no = 1
                ?>
                    <td><?= $no++ ?></td>
                    <td><?php echo $keluar['book_id']; ?></td>
                    <td><?php echo $keluar['deskripsi_book']; ?></td>
                </tr>
                    <?php } ?>
            </tbody>
        </table>
        <p>
        </p>
        <button> <a href="<?php echo base_url('dashboard/index')?>">Home</a></button>
    </div>
</div>
<?php 
    } else {
    ?>
        <div align="center">
    <div>
        <h1>Log Library!</h1>

        <table border='1'>
            <thread>
                <th>Kode Buku</th>
                <th>Deskripsi Buku</th>
            </thread>
            <tbody>
                <?php
                    foreach($data as $key => $keluar){
                ?>
                <?php $no = 1
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?php echo $keluar['book_id']; ?></td>
                    <td><?php echo $keluar['deskripsi_book']; ?></td>
                </tr>
                    <?php } ?>
            </tbody>
        </table>
        <p>
        </p>
        <button> <a href="<?php echo base_url('dashboard/index')?>">Home</a></button>
    </div>
</div>
<?php
    }
    ?>

<?= $this->include('produk/produk_footer') ?>
