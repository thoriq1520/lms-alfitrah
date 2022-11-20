<div class="row">
    <div class="col-sm-12">
    <?php
    foreach ($materi->getResultArray() as $m) :
    ?>
        <table class="table table-borderless">
            <tr>
                <th width="150px">Nama Mapel</th>
                <th width="30px">:</th>
                <th><?php echo $m['nama_mapel'] ?></th>
            </tr>
            <tr>
                <th width="150px">Kelas</th>
                <th width="30px">:</th>
                <th><?php echo $m['kelas'] ?></th>
            </tr>
            <tr>
                <th width="150px">Judul Materi</th>
                <th width="30px">:</th>
                <th><?php echo $m['judul_materi'] ?></th>
            </tr>
        </table>
    </div>
        <div class="col-sm-12">
            <iframe width="100%" height="600px" src="<?php echo base_url($m['kelas'].'/'.$m['nama_mapel'].'/'.$m['link_materi']) ?>"></iframe>
        </div>
    <?php
    endforeach;
    ?>
</div>