<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Kelas <?php echo $kelas ?></h6>
            <h1 class="mb-5"><?php echo $mapel ?></h1>
            <?php
            if (session()->get('login')) {
            ?>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahMateri">
                    <i class="fa fa-plus"> Tambah Materi</i>
                </button>
            <?php
            }
            ?>
        </div>
        <br />

        <div class="row g-3">

            <div>

                <div class="row g-3 justify-content-center">
                    <!-- Kursus -->
                    <?php
                    foreach ($materi->getResultArray() as $m) :
                    ?>
                        <div class="col-lg-3 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="<?= base_url('baca_materi/' . $m['id_materi']); ?>">
                                <img class="img-fluid" src="<?php echo base_url('img/cat-2.jpg') ?>" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0"><?php echo $m['nama_mapel'] ?></h5>
                                    <small class="text-primary"><?php echo $m['judul_materi'] ?></small>
                                </div>
                            </a>
                        </div>
                    <?php
                    endforeach;
                    ?>
                    <!-- Kursus -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->


<div class="modal fade" id="tambahMateri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Materi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="/post_materi" enctype="multipart/form-data">
                    <fieldset>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <input type="hidden" name="nama_mapel" value="<?php echo $mapel ?>" id="disabledTextInput" class="form-control form-control-sm">
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
                            <input type="hidden" name="kelas" value="<?php echo $kelas ?>" id="disabledTextInput" class="form-control form-control-sm">
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>