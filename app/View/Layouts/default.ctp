<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());

?>

<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>
        <?php echo $appName; ?> - <?php echo $this->fetch('title'); ?>
    </title>

    <?php
        // <!-- Favicon-->
        echo $this->Html->meta('icon');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <?php
        // <!-- Bootstrap Core Css -->
        echo $this->Html->css('bootstrap');

        // <!-- Waves Effect Css -->
        echo $this->Html->css('waves');

        // <!-- Animation Css -->
        echo $this->Html->css('animate');

        // <!-- Morris Chart Css-->
        echo $this->Html->css('morris');

        // <!-- JQuery DataTable Css -->
        echo $this->Html->css('dataTables.bootstrap');

        // <!-- Bootstrap Material Datetime Picker Css -->
        echo $this->Html->css('bootstrap-material-datetimepicker');

        // <!-- Wait Me Css -->
        echo $this->Html->css('waitMe');

        // <!-- Bootstrap Select Css -->
        echo $this->Html->css('bootstrap-select');

        // <!-- Sweet Alert Css -->
        echo $this->Html->css('sweetalert');

        // <!-- Custom Css -->
        echo $this->Html->css('style');

        // <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        echo $this->Html->css('themes/all-themes');
    ?>
</head>
<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Memuat halaman...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    
    <?php echo $this->element('top_bar'); ?>

    <section>
    <?php 
        echo $this->element('left_sidebar'); 
        echo $this->element('right_sidebar');
    ?>
    </section>

    <section class="content">
    <?php if ($this->request->params['controller'] !== 'pages' && $this->request->params['action'] !== 'display') { ?>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ol class="breadcrumb breadcrumb-bg-teal">
                    <li>
                        <?php
                            // echo $this->Html->getCrumbs(' > ', 'Home');
                            echo $this->Html->getCrumbs(' > ', array(
                                'text' => '<i class="material-icons">home</i> Beranda',
                                'url' => array('controller' => 'pages', 'action' => 'display', 'home'),
                                'escape' => false
                            ));
                        ?>
                    </li>
                </ol>
                </div>
            </div>
        </div>
    <?php } ?>

        <?php echo $this->Flash->render(); ?>
        <?php echo $this->fetch('content'); ?>
    </section>

    <?php
        //  <!-- Jquery Core Js -->
        echo $this->Html->script('jquery.min');

        // <!-- Bootstrap Core Js -->
        echo $this->Html->script('bootstrap');

        // <!-- Select Plugin Js -->
        echo $this->Html->script('bootstrap-select');

        // <!-- Slimscroll Plugin Js -->
        echo $this->Html->script('jquery.slimscroll');

        // <!-- Bootstrap Notify Plugin Js -->
        echo $this->Html->script('bootstrap-notify');

        // <!-- Waves Effect Plugin Js -->
        echo $this->Html->script('waves');

        // <!-- Jquery CountTo Plugin Js -->
        echo $this->Html->script('jquery.countTo');

        // <!-- Morris Plugin Js -->
        echo $this->Html->script('raphael.min');
        echo $this->Html->script('morris');

        // <!-- ChartJs -->
        echo $this->Html->script('Chart.bundle');

        // <!-- Flot Charts Plugin Js -->
        echo $this->Html->script('jquery.flot');
        echo $this->Html->script('jquery.flot.resize');
        echo $this->Html->script('jquery.flot.pie');
        echo $this->Html->script('jquery.flot.categories');
        echo $this->Html->script('jquery.flot.time');

        // <!-- Sparkline Chart Plugin Js -->
        echo $this->Html->script('jquery.sparkline');

        // <!-- Jquery DataTable Plugin Js -->
        echo $this->Html->script('jquery.dataTables');
        echo $this->Html->script('dataTables.bootstrap');
        echo $this->Html->script('dataTables.buttons.min');
        echo $this->Html->script('buttons.flash.min');
        echo $this->Html->script('jszip.min');
        echo $this->Html->script('pdfmake.min');
        echo $this->Html->script('vfs_fonts');
        echo $this->Html->script('buttons.html5.min');
        echo $this->Html->script('buttons.print.min');

        // <!-- Autosize Plugin Js -->
        echo $this->Html->script('autosize');

        // <!-- Moment Plugin Js -->
        echo $this->Html->script('moment');

        // <!-- Bootstrap Material Datetime Picker Plugin Js -->
        echo $this->Html->script('bootstrap-material-datetimepicker');

        // <!-- Sweet Alert Plugin Js -->
        echo $this->Html->script('sweetalert.min');

        // <!-- Jquery Validation Plugin Css -->
        echo $this->Html->script('jquery.validate');

        // <!-- Custom Js -->
        echo $this->Html->script('admin');
        echo $this->Html->script('pages/ui/tooltips-popovers');
        echo $this->Html->script('pages/ui/modals');
        echo $this->Html->script('pages/ui/notifications');

        if ($this->request->params['controller'] == 'pages') {
            echo $this->Html->script('pages/index');
        } else if (strtolower($this->request->params['controller']) == 'skpkd' || strtolower($this->request->params['controller']) == 'skpd') {
            echo $this->Html->script('pages/tables/jquery-datatable');
            echo $this->Html->script('pages/forms/basic-form-elements');
        }

        // <!-- Demo Skin Changer Js -->
        // echo $this->Html->script('demo');
    ?>
</body>
</html>