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
                            <h4 class="card-title">Tambah Nasabah</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" method="POST" action="<?php echo base_url('nasabah/add') ?>">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-9 form-group">
                                                <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama">
                                            </div>
                                            <div class="col-md-3">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-9 form-group">
                                                <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                                            </div>
                                            <div class="col-md-3">
                                                <label>No. Telfon</label>
                                            </div>
                                            <div class="col-md-9 form-group">
                                                <input type="number" id="notelp" class="form-control" name="notelp" placeholder="No. Telp">
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">Tambah</button>
                                            </div>
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