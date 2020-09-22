<?php $this->load->view('template/head') ?>

<body>
    <div id="app">
        <?php $this->load->view('template/sidebar') ?>
        <div id="main">
            <?php $this->load->view('template/navbar') ?>
            <section class="container">
                <div class="row">
                    <!-- <div class="col-md-6 col-12"> -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Update Nasabah</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" method="POST" action="<?php echo base_url('nasabah/update') ?>">
                                    <div class="form-body">
                                        <div class="row">
                                            <?php foreach ($nasabah as $nsbh) : ?>
                                                <div class="col-md-3">
                                                    <label>Name</label>
                                                </div>
                                                <div class="col-md-9 form-group">
                                                    <input type="hidden" name="id" value="<?php echo $nsbh->nasabah_id ?>">
                                                    <input type="text" id="nama" class="form-control" name="nama" value="<?php echo $nsbh->nama ?>">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-9 form-group">
                                                    <input type="email" id="email" class="form-control" name="email" value="<?php echo $nsbh->email ?>">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>No. Telfon</label>
                                                </div>
                                                <div class="col-md-9 form-group">
                                                    <input type="number" id="notelp" class="form-control" name="notelp" value="<?php echo $nsbh->no_telp ?>">
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        <?php $this->load->view('template/footer') ?>
        </>
    </div>
    </div>
    <?php $this->load->view('template/js') ?>
</body>

</html>