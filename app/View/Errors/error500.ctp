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
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>

<!-- <div class="error-code">500</div>
<div class="error-message">Tidak Dapat Terhubung ke Server</div>
<div class="button-place">
    <a href="javascript:void(0);" onclick="reload();" class="btn btn-default btn-lg waves-effect">MUAT ULANG</a> 
    <a href="/" class="btn btn-default btn-lg waves-effect">KEMBALI KE BERANDA</a>
</div>

<script type="text/javascript">
	function reload() {
		window.location.reload();
	}
</script> -->

<div class="container-fluid">
    <!-- Basic Datatables -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        INTERNAL ERROR
                        <small>TERJADI KESALAHAN INTERNAL</small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>Internal error!</strong> Telah terjadi kesalahan internal. <a href="javascript:void(0);" class="alert-link" onclick="window.location.reload();">Klik untuk memuat ulang halaman</a>.
                    </div>
                    <?php if (Configure::read('debug') > 0): ?>   
                    <div class="well">
                        <?php echo $this->element('exception_stack_trace'); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
</div>