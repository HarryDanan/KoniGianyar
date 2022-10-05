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

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
    <div class="d-flex flex-column flex-root">
        <div class="mb-0" id="home">
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <div class="container">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-equal">
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                                    <span class="svg-icon svg-icon-2hx">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                            <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                        </svg>
                                    </span>
                                </button>
                                <a href="">
                                    <img alt="Logo" src="assets/media/logos/logo-landing.svg" class="logo-default h-25px h-lg-30px" />
                                    <img alt="Logo" src="assets/media/logos/logo-landing-dark.svg" class="logo-sticky h-20px h-lg-25px" />
                                </a>
                            </div>
                            <div class="d-lg-block" id="kt_header_nav_wrapper">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
                                        <div class="menu-item">
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#porprov" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Porprov</a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#berita" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Berita</a>
                                        </div>
                                        <!-- <div class="menu-item">
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#team" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Team</a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#portfolio" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Portfolio</a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#pricing" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Pricing</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="flex-equal text-end ms-1">
                                <a href="<?php echo base_url('Landing/Login') ?>" class="btn btn-success">Log In</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                    <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                        <h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15">KOMITE OLAHRAGA NASIONAL INDONESIA
                            <br />KABUPATEN GIANYAR
                            <!-- <span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                                <span id="kt_landing_hero_text">The Best Theme Ever</span>
                            </span> -->
                        </h1>
                    </div>
                    <div class="d-flex flex-center flex-wrap position-relative px-5">
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Fujifilm">
                            <img src="assets/media/svg/brand-logos/fujifilm.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Vodafone">
                            <img src="assets/media/svg/brand-logos/vodafone.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="KPMG International">
                            <img src="assets/media/svg/brand-logos/kpmg.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Nasa">
                            <img src="assets/media/svg/brand-logos/nasa.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Aspnetzero">
                            <img src="assets/media/svg/brand-logos/aspnetzero.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="AON - Empower Results">
                            <img src="assets/media/svg/brand-logos/aon.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Hewlett-Packard">
                            <img src="assets/media/svg/brand-logos/hp-3.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Truman">
                            <img src="assets/media/svg/brand-logos/truman.svg" class="mh-30px mh-lg-40px" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <div class="mb-n10 mb-lg-n20 z-index-2">
            <div class="container">
                <div class="text-center mb-17">
                    <h3 class="fs-2hx text-dark mb-5" id="porprov" data-kt-scroll-offset="{default: 100, lg: 150}">PORPROV 2022</h3>
                    <div class="fs-5 text-muted fw-bold">Perolehan Medali
                        <br />Kabuapten Gianyar
                    </div>
                </div>
                <div class="row w-100 gy-10 mb-md-20">
                    <div class="col-md-4 px-5">
                        <div class="text-center mb-10 mb-md-0">
                            <img src="assets/media/illustrations/sketchy-1/2.png" class="mh-125px mb-9" alt="" />
                            <div class="d-flex flex-center mb-5">
                                <span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">1</span>
                                <div class="fs-5 fs-lg-3 fw-bolder text-dark">Emas</div>
                            </div>
                            <div class="fw-bold fs-6 fs-lg-4 text-muted">
                                <?php ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 px-5">
                        <div class="text-center mb-10 mb-md-0">
                            <img src="assets/media/illustrations/sketchy-1/8.png" class="mh-125px mb-9" alt="" />

                            <div class="d-flex flex-center mb-5">
                                <span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">2</span>
                                <div class="fs-5 fs-lg-3 fw-bolder text-dark">Perak</div>
                            </div>
                            <div class="fw-bold fs-6 fs-lg-4 text-muted">
                                <?php ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 px-5">
                        <div class="text-center mb-10 mb-md-0">
                            <img src="assets/media/illustrations/sketchy-1/12.png" class="mh-125px mb-9" alt="" />

                            <div class="d-flex flex-center mb-5">
                                <span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">3</span>
                                <div class="fs-5 fs-lg-3 fw-bolder text-dark">Perunggu</div>
                            </div>
                            <div class="fw-bold fs-6 fs-lg-4 text-muted">
                                <?php ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center">Perolehan Medali Per Cabang Olahraga</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tb-medali" class="table gs-7 gy-7 gx-7">
                                <thead>
                                    <tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                        <th>No</th>
                                        <th>Cabang Olahraga</th>
                                        <th>Emas</th>
                                        <th>Perak</th>
                                        <th>Perunggu</th>
                                    </tr>
                                </thead>
                                <tbody>
        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top:20vh"class="mb-n10 mb-lg-n20 z-index-2">
            <div class="container">
                <div class="text-center mb-17">
                    <h3 class="fs-2hx text-dark mb-5" id="berita" data-kt-scroll-offset="{default: 100, lg: 150}">BERITA</h3>
                    <div class="fs-5 text-muted fw-bold">Berita Olahraga
                        <br />Kabuapten Gianyar
                    </div>
                </div>
                <div class="row w-100 gy-10 mb-md-20">
                    <div class="col-md-4 px-5">
                        <div class="text-center mb-10 mb-md-0">
                            <img src="assets/media/illustrations/sketchy-1/2.png" class="mh-125px mb-9" alt="" />
                            <div class="d-flex flex-center mb-5">
                                <span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">1</span>
                                <div class="fs-5 fs-lg-3 fw-bolder text-dark">Emas</div>
                            </div>
                            <div class="fw-bold fs-6 fs-lg-4 text-muted">
                                <?php ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 px-5">
                        <div class="text-center mb-10 mb-md-0">
                            <img src="assets/media/illustrations/sketchy-1/8.png" class="mh-125px mb-9" alt="" />

                            <div class="d-flex flex-center mb-5">
                                <span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">2</span>
                                <div class="fs-5 fs-lg-3 fw-bolder text-dark">Perak</div>
                            </div>
                            <div class="fw-bold fs-6 fs-lg-4 text-muted">
                                <?php ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 px-5">
                        <div class="text-center mb-10 mb-md-0">
                            <img src="assets/media/illustrations/sketchy-1/12.png" class="mh-125px mb-9" alt="" />

                            <div class="d-flex flex-center mb-5">
                                <span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">3</span>
                                <div class="fs-5 fs-lg-3 fw-bolder text-dark">Perunggu</div>
                            </div>
                            <div class="fw-bold fs-6 fs-lg-4 text-muted">
                                <?php ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-0">
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
                </svg>
            </div>
            <div class="landing-dark-bg pt-20">

                <div class="container">

                    <div class="row py-10 py-lg-20">

                        <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9 mb-10">

                                <h2 class="text-white">Would you need a Custom License?</h2>


                                <span class="fw-normal fs-4 text-gray-700">Email us to
                                    <a href="https://keenthemes.com/support" class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a></span>

                            </div>
                            <!--end::Block-->
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9">

                                <h2 class="text-white">How About a Custom Project?</h2>


                                <span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.
                                    <a href="../../demo8/dist/pages/profile/overview.html" class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a></span>

                            </div>
                            <!--end::Block-->
                        </div>


                        <div class="col-lg-6 ps-lg-16">
                            <!--begin::Navs-->
                            <div class="d-flex justify-content-center">
                                <!--begin::Links-->
                                <div class="d-flex fw-bold flex-column me-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bolder text-gray-400 mb-6">More for Metronic</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="text-white opacity-50 text-hover-primary fs-5">Tutorials</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                                <!--begin::Links-->
                                <div class="d-flex fw-bold flex-column ms-lg-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bolder text-gray-400 mb-6">Stay Connected</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="#" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Navs-->
                        </div>

                    </div>

                </div>

                <!--begin::Separator-->
                <div class="landing-dark-separator"></div>
                <!--end::Separator-->

                <div class="container">

                    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                        <!--begin::Copyright-->
                        <div class="d-flex align-items-center order-2 order-md-1">
                            <!--begin::Logo-->
                            <a href="">
                                <img alt="Logo" src="assets/media/logos/logo-landing.svg" class="h-15px h-md-20px" />
                            </a>
                            <!--end::Logo image-->
                            <!--begin::Logo image-->
                            <span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="https://keenthemes.com">© 2021 Keenthemes Inc.</span>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item mx-5">
                                <a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="" target="_blank" class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>

                </div>

            </div>
        </div>
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="svg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
    </div>
    <?php $this->load->view('layouts/js.php') ?>
</body>

</html>