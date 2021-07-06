<!-- set bodyTheme = "u-card-v1" -->



<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Title -->
        <title></title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Favicon -->
        <link rel="shortcut icon" href="../../favicon.ico">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
        <!-- CSS Global Compulsory -->
        <?= $this->Html->css('/assets/vendor/bootstrap/bootstrap.css') ?>
        <!-- CSS Global Icons -->
        <?= $this->Html->css('/assets/vendor/icon-awesome/css/font-awesome.min.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-line/css/simple-line-icons.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-etlinefont/style.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-line-pro/style.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-hs/style.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-material/material-icons.css') ?>

        <?= $this->Html->css('/admin_assets/vendor/hs-admin-icons/hs-admin-icons.css') ?>

        <?= $this->Html->css('/assets/vendor/animate.css') ?>
        <?= $this->Html->css('/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css') ?>

        <?= $this->Html->css('/admin_assets/vendor/flatpickr/dist/css/flatpickr.min.css') ?>
        <?= $this->Html->css('/admin_assets/vendor/bootstrap-select/css/bootstrap-select.min.css') ?>

        <?= $this->Html->css('/admin_assets/vendor/chartist-js/chartist.min.css') ?>
        <?= $this->Html->css('/admin_assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css') ?>

        <?= $this->Html->css('/assets/vendor/fancybox/jquery.fancybox.min.css') ?>

        <?= $this->Html->css('/assets/vendor/hamburgers/hamburgers.min.css') ?>

        <!-- CSS Unify -->
        <?= $this->Html->css('/admin_assets/css/unify-admin.css') ?>

        <!-- CSS Customization -->
        <?= $this->Html->css('/assets/css/custom.css') ?>

        <!-- JS Global Compulsory -->
        <?= $this->Html->script('/admin_assets/vendor/jquery/jquery.min.js') ?>
        <?= $this->Html->script('/admin_assets/vendor/jquery-migrate/jquery-migrate.min.js') ?>

        <?= $this->Html->script('/assets/vendor/popper.min.js') ?>
        <?= $this->Html->script('/assets/vendor/bootstrap/bootstrap.min.js') ?>

        <?= $this->Html->script('/assets/vendor/cookiejs/jquery.cookie.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-validation/dist/jquery.validate.min.js') ?>
        
        
        
        
        
        <!-- jQuery UI Core -->
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/widget.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/version.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/keycode.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/position.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/unique-id.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/safe-active-element.js') ?>

        <!-- jQuery UI Helpers -->
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/widgets/menu.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/widgets/mouse.js') ?>

        <!-- jQuery UI Widgets -->
        <?= $this->Html->script('/assets/vendor/jquery-ui/ui/widgets/datepicker.js') ?>

        <!-- JS Plugins Init. -->
        <?= $this->Html->script('/assets/vendor/appear.js') ?>
        <?= $this->Html->script('/admin_assets/vendor/bootstrap-select/js/bootstrap-select.min.js') ?>
        <?= $this->Html->script('/admin_assets/vendor/flatpickr/dist/js/flatpickr.min.js') ?>
        <?= $this->Html->script('/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js') ?>

        <?= $this->Html->script('/admin_assets/vendor/chartist-js/chartist.min.js') ?>
        <?= $this->Html->script('/admin_assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.js') ?>
        <?= $this->Html->script('/admin_assets/vendor/fancybox/jquery.fancybox.min.js') ?>

        <!-- JS Unify -->
        <?= $this->Html->script('/assets/js/hs.core.js') ?>
        <?= $this->Html->script('/admin_assets/js/components/hs.side-nav.js') ?>
        <?= $this->Html->script('/assets/js/helpers/hs.hamburgers.js') ?>
        <?= $this->Html->script('/admin_assets/js/components/hs.range-datepicker.js') ?>

        <?= $this->Html->script('/assets/js/components/hs.datepicker.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.dropdown.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.scrollbar.js') ?>

        <?= $this->Html->script('/admin_assets/js/components/hs.area-chart.js') ?>
        <?= $this->Html->script('/admin_assets/js/components/hs.donut-chart.js') ?>
        <?= $this->Html->script('/admin_assets/js/components/hs.bar-chart.js') ?>

        <?= $this->Html->script('/assets/js/helpers/hs.focus-state.js') ?>
        <?= $this->Html->script('/admin_assets/js/components/hs.popup.js') ?>

        <?= $this->Html->script('/assets/js/helpers/hs.file-attachments.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.file-attachement.js') ?>


        <!-- JS Custom -->
        <?= $this->Html->script('/assets/js/custom.js') ?>
    </head>

    <body>
        <?php
            if($this->Session->read('Auth.User') == '') {
                header("Refresh:0; url=".SITE_URL.'/login');
            }
        ?>
        <!-- Header -->
        <header id="js-header" class="u-header u-header--sticky-top">
            <div class="u-header__section u-header__section--admin-dark g-min-height-65">
                <nav class="navbar no-gutters g-pa-0">
                    <div class="col-auto d-flex flex-nowrap u-header-logo-toggler g-py-12">
                        <!-- Logo -->
                        <a href="<?=SITE_URL.'adminhome'?>" class="navbar-brand d-flex align-self-center g-hidden-xs-down g-line-height-1 py-0 g-mt-5">

                           
ADMIN


                        </a>
                        <!-- End Logo -->

                        <!-- End Sidebar Toggler -->
                    </div>


                    <!-- Messages/Notifications/Top Search Bar/Top User -->
                    <div class="col-auto d-flex g-py-12 g-pl-40--lg ml-auto">




                        <!-- Top User -->
                        <div class="col-auto d-flex g-pt-5 g-pt-0--sm g-pl-10 g-pl-20--sm">
                            <div class="g-pos-rel g-px-10--lg">
                                <a id="profileMenuInvoker" class="d-block" href="#!" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#profileMenu" data-dropdown-type="css-animation" data-dropdown-duration="300"
                                   data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">

                                    <span class="g-pos-rel g-top-2">
                                        <span class="g-hidden-sm-down">Admin</span>
                                        <i class="hs-admin-angle-down g-pos-rel g-top-2 g-ml-10"></i>
                                    </span>
                                </a>

                                <!-- Top User Menu -->
                                <ul id="profileMenu" class="g-pos-abs g-left-0 g-width-100x--lg g-nowrap g-font-size-14 g-py-20 g-mt-17 rounded" aria-labelledby="profileMenuInvoker">

                                    

                                    <li class="">
                                        <a class="media g-color-lightred-v2--hover" href="<?=SITE_URL.'login/logout'?>">
                                            <span class="d-flex align-self-center g-mr-12">
                                                <i class="hs-admin-shift-right"></i>
                                            </span>
                                            <span class="media-body align-self-center">Sign Out</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Top User Menu -->
                            </div>
                        </div>
                        <!-- End Top User -->
                    </div>
                    <!-- End Messages/Notifications/Top Search Bar/Top User -->

                </nav>

            </div>
        </header>
        <!-- End Header -->


        <main class="container-fluid px-0 g-pt-35">
            <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
                <!-- Sidebar Nav -->
                <div id="sideNav" class="col-auto u-sidebar-navigation-v1 u-sidebar-navigation--dark">
                    <ul id="sideNavMenu" class="u-sidebar-navigation-v1-menu u-side-nav--top-level-menu g-min-height-100vh mb-0">
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
                            <?php $link = '<span class="d-flex align-self-center g-font-size-18 g-mr-18"><i class="hs-admin-medall"></i></span><span class="media-body align-self-center">โปรโมชั่น</span>'; ?>
                            <?= $this->Html->link($link, ['controller' => 'articles', 'action' => 'index', 'promotion'], ['class' => 'media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12', 'escape' => false]) ?>
                        </li>

                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
                            <?php $link = '<span class="d-flex align-self-center g-font-size-18 g-mr-18"><i class="hs-admin-medall"></i></span><span class="media-body align-self-center">เคล็ดลับ</span>'; ?>
                            <?= $this->Html->link($link, ['controller' => 'articles', 'action' => 'index', 'trick'], ['class' => 'media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12', 'escape' => false]) ?>
                        </li>
                        
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
                            <?php $link = '<span class="d-flex align-self-center g-font-size-18 g-mr-18"><i class="hs-admin-medall"></i></span><span class="media-body align-self-center">วิดีโอ</span>'; ?>
                            <?= $this->Html->link($link, ['controller' => 'admin-vdo', 'action' => 'index'], ['class' => 'media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12', 'escape' => false]) ?>
                        </li>

                    </ul>
                </div>
                <!-- End Sidebar Nav -->


                <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
                    <div class="g-pa-20">
                        <?= $this->fetch('content'); ?>
                    </div>

                    <!-- Footer -->
                    <footer id="footer" class="u-footer--bottom-sticky g-bg-white g-color-gray-dark-v6 g-brd-top g-brd-gray-light-v7 g-pa-20">
                        <div class="row align-items-center">
                            <!-- Footer Nav -->
                            <div class="col-md-4 g-mb-10 g-mb-0--md">
                                <ul class="list-inline text-center text-md-left mb-0">

                                </ul>
                            </div>
                            <!-- End Footer Nav -->



                            <!-- Footer Copyrights -->
                            <div class="col-md-4 text-center text-md-right">
                                <small class="d-block g-font-size-default">&copy; 2018 sboclub99. All Rights Reserved.</small>
                            </div>
                            <!-- End Footer Copyrights -->
                        </div>
                    </footer>
                    <!-- End Footer -->
                </div>
            </div>
        </main>




        

        <!-- JS Plugins Init. -->
        <script>
            $(document).on('ready', function () {
                // initialization of custom select
                $('.js-select').selectpicker();

                // initialization of hamburger
                $.HSCore.helpers.HSHamburgers.init('.hamburger');

                // initialization of charts
                $.HSCore.components.HSAreaChart.init('.js-area-chart');
                $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                $.HSCore.components.HSBarChart.init('.js-bar-chart');

                // initialization of sidebar navigation component
                $.HSCore.components.HSSideNav.init('.js-side-nav', {
                    afterOpen: function () {
                        setTimeout(function () {
                            $.HSCore.components.HSAreaChart.init('.js-area-chart');
                            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                            $.HSCore.components.HSBarChart.init('.js-bar-chart');
                        }, 400);
                    },
                    afterClose: function () {
                        setTimeout(function () {
                            $.HSCore.components.HSAreaChart.init('.js-area-chart');
                            $.HSCore.components.HSDonutChart.init('.js-donut-chart');
                            $.HSCore.components.HSBarChart.init('.js-bar-chart');
                        }, 400);
                    }
                });

                // initialization of range datepicker
                $.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker, #rangeDatepicker2, #rangeDatepicker3');

                // initialization of datepicker
                $.HSCore.components.HSDatepicker.init('#datepicker', {
                    dayNamesMin: [
                        'SU',
                        'MO',
                        'TU',
                        'WE',
                        'TH',
                        'FR',
                        'SA'
                    ]
                });

                // initialization of HSDropdown component
                $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});

                // initialization of custom scrollbar
                $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

                // initialization of popups
                $.HSCore.components.HSPopup.init('.js-fancybox', {
                    btnTpl: {
                        smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v3 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
                    }
                });
            });
        </script>
    </body>

</html>
