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
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>
		SIMDA - <?php echo $this->fetch('title'); ?>
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

		// <!-- Custom Css -->
    	echo $this->Html->css('style');
    ?>
</head>
<body class="four-zero-four">
    <div class="four-zero-four-container">
        <?php echo $this->Flash->render(); ?>
        <?php echo $this->fetch('content'); ?>
    </div>

    <?php
  		//  <!-- Jquery Core Js -->
    	echo $this->Html->script('jquery.min');

		// <!-- Bootstrap Core Js -->
    	echo $this->Html->script('bootstrap');

		// <!-- Waves Effect Plugin Js -->
    	echo $this->Html->script('waves');
    ?>
</body>
</html>
