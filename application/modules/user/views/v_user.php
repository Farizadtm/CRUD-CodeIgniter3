<?php $this->load->view('template/head') ?>

<body>
    <div id="app">
        <?php $this->load->view('template/sidebar') ?>
        <div id="main">
            <?php $this->load->view('template/navbar') ?>
            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Datatable</h3>
                            <p class="text-subtitle text-muted">We use 'simple-datatables' made by @fiduswriter. You can check the full documentation <a href="https://github.com/fiduswriter/Simple-DataTables/wiki">here</a>.</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Datatable</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <a type="button" class="btn btn-primary pencil-square" href="<?= base_url('nasabah/form_add') ?>"><i data-feather="edit"></i> Tambah Nasabah</a>
                        </div>
                        <div class="card-body">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($nasabah as $nsbh) : ?>
                                        <tr>
                                            <td><?= $nsbh->nama; ?></td>
                                            <td><?= $nsbh->email; ?></td>
                                            <td><?= $nsbh->no_telp; ?></td>
                                            <td>
                                                <a type="button" class="btn btn-primary btn-sm" href="<?= base_url('nasabah/form_update/' . $nsbh->nasabah_id); ?>">Update</a>
                                                <a type="button" class="btn btn-danger btn-sm" href="<?= base_url('nasabah/delete/' . $nsbh->nasabah_id); ?>">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            <?php $this->load->view('template/footer') ?>
            </>
        </div>
        <?php $this->load->view('template/js') ?>
</body>

</html>