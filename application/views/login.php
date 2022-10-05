<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="">
    <title>Koni</title>
    <meta name="description" content="Website Resmi Koni Gianyar" />
    <meta name="keywords" content="Koni,Koni Gianyar, Koni Kabupaten Gianyar" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Koni Gianyar" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Koni | Dashboard" />
    <?php $this->load->view('layouts/css.php') ?>
</head>
<body id="kt_body" class="bg-body">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <a href="" class="mb-12">
                    <img alt="Logo" src="assets/media/logos/logo-1.svg" class="h-40px" />
                </a>
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <form class="form w-100" method="POST" action="<?php echo base_url('Auth/Login') ?>" enctype="multipart/form-data">
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">Log In to Koni</h1>
                            <!-- <div class="text-gray-400 fw-bold fs-4">New Here?
                                <a href="../../demo8/dist/authentication/flows/basic/sign-up.html" class="link-primary fw-bolder">Create an Account</a>
                            </div> -->
                        </div>
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                            <input id="username" name="username" class="form-control form-control-lg form-control-solid" type="text" autocomplete="off" />
                        </div>
                        <div class="fv-row mb-10">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                <a href="../../demo8/dist/authentication/flows/basic/password-reset.html" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                            </div>
                            <input id="password" name="password" class="form-control form-control-lg form-control-solid" type="password" autocomplete="off" />
                        </div>
                        <div class="text-center">
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Continue</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex flex-center flex-column-auto p-10">
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
                    <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
                    <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('layouts/js.php') ?>
</body>
</html>