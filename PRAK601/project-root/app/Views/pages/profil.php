<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="cont_table">
            <table class="table table-sm table-borderless mt-3">
                <tr>
                    <th colspan="3"><h2>Profil</h1> </th>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>Muhammad Qalby</td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>2110817210001</td>
                </tr>
                <tr>
                    <th>Asal Prodi</th>
                    <td>Teknologi Informasi</td>
                </tr>
                <tr>
                    <th>Hobi</th>
                    <td>Membaca Komik</td>
                </tr>
                <tr>
                    <th>Skill</th>
                    <td><ul>
                        <li>HTML</li>
                        <li>CSS</li>
                    </ul></td>
                </tr>
            </table>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>