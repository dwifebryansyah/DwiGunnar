<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('uikit.min') ?>
    <?= $this->Html->css('uikit-rtl.min') ?>
    <?= $this->Html->css('../assets/css/sb-admin-2.min.css') ?>
    <?= $this->Html->css('../assets/vendor/fontawesome-free/css/all.min.css') ?>
    <?= $this->Html->script('../assets/vendor/jquery/jquery.min.js') ?>
    <?= $this->Html->script('../assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>
    <?= $this->Html->script('../assets/vendor/jquery-easing/jquery.easing.min.js') ?>
    <?= $this->Html->script('uikit.min') ?>
    <?= $this->Html->script('uikit-icons.min') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    
    <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    
</body>
</html>
