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
                    <th width="30px"> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Edit
                        </button></th>
                    <th width="30px"><button type="button" class="btn btn-danger">Hapus</button></th>
                </tr>

            </table>
    </div>
    <div class="col-sm-12">
        <iframe width="100%" height="600px" src="<?php echo base_url($m['kelas'] . '/' . $m['nama_mapel'] . '/' . $m['link_materi']) ?>"></iframe>
    </div>
<?php
        endforeach;
?>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Materi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="/post_materi" enctype="multipart/form-data">
                    <fieldset>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <input type="hidden" name="nama_mapel" value="" id="disabledTextInput" class="form-control form-control-sm">
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="materi" class="col-sm-2 col-form-label col-form-label-sm">Materi</label>
                        <div class="col-sm-10">
                            <input type="text" id="materi" name="judul_materi" value="" class="form-control form-control-sm" placeholder="Judul Materi">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <input type="hidden" name="kelas" value="" id="disabledTextInput" class="form-control form-control-sm">
                        </div>
                    </div>
                    <fieldset>
                        <div class="row mb-3">
                            <label for="formFileSm" class="col-sm-2 form-label col-form-label-sm">Masukan Materi</label>
                            <div class="col-sm-10">
                                <input name="link_materi" value="" class="form-control form-control-sm" id="formFileSm" type="file">
                            </div>
                        </div>
                    </fieldset>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>