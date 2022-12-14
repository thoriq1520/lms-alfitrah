<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Kelas <?php echo $kelas ?></h6>
            <h1 class="mb-5">Courses Categories</h1>
        </div>
        <br />

        <div class="row g-3">

            <div>

                <div class="row g-3 justify-content-center">
                    <!-- Kursus -->
                    <?php
                    foreach ($mapel->getResultArray() as $m) :
                    ?>
                        <div class="col-lg-3 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="<?= base_url('materi/' . $kelas.'/'. $m['nama'].'/'.$m['gambar']); ?>">
                                <img class="img-fluid" src="<?php echo base_url('img/'. $m['gambar']) ?>" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0"><?php echo $m['nama'] ?></h5>
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