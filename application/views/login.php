<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="login-logo">
                        <a href="<?php //echo base_url('Admin/dashboard');?>">
                            <img src="<?php echo base_url('assets/backend/common/images/logo.svg');?>" alt="jhl" />
                        </a>
                    </div>
                    <div class="auto-form-wrapper">
                        <form action="#">
                            <div role="alert" class="alert alert-danger">
                                <?php echo $this->session->flashdata('UserLoginFailed'); ?>
                            </div>
                            <div role="alert" class="alert alert-success">
                                <?php echo $this->session->flashdata('UserSuccessReg'); ?>
                            </div>
                            <div class="form-group">
                                <label class="label">Email</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="*********">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary submit-btn btn-block">Login</button>
                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <a href="#" class="text-small forgot-password text-black">Forgot Password ?</a>
                            </div>
                            <div class="text-block text-center my-3">
                                <span class="text-small font-weight-semibold">Not a member ?</span>
                                <a href="register.html" class="text-black text-small">Create new account</a>
                            </div>
                        </form>
                    </div>
                    <ul class="auth-footer">
                        <li>
                            <a href="#">Conditions</a>
                        </li>
                        <li>
                            <a href="#">Help</a>
                        </li>
                        <li>
                            <a href="#">Terms</a>
                        </li>
                    </ul>
                    <p class="footer-text text-center">copyright © 2018 Bootstrapdash. All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
