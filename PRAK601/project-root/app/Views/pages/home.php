<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="cont_table">
                <table class="table table-sm table-borderless mt-3">
                    <tr>
                        <th><h4>Nama &nbsp&nbsp:</h4></th>
                        <td><h5><?php echo $nama; ?></h5></td>
                    </tr>
                    <tr>
                        <th><h4>NIM &nbsp&nbsp&nbsp&nbsp&nbsp:</h4></th>
                        <td><h5><?php echo $nim; ?></h5></td>
                    </tr>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>