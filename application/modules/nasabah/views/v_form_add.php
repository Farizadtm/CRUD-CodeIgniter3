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
                            <h4 class="card-title">Horizontal Form</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="first-name" class="form-control" name="fname" placeholder="First Name">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="email" id="email-id" class="form-control" name="email-id" placeholder="Email">
                                            </div>
                                            <div class="col-md-4">
                                                <label>No. Telfon</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="contact-info" class="form-control" name="contact" placeholder="Mobile">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Password</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
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