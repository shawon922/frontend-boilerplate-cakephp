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

?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('style.css') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>

        <script>
            var baseUrl = "<?= isset($baseUrl) ? $baseUrl : '' ?>";
            var apiBaseUrl = "<?= isset($apiBaseUrl) ? $apiBaseUrl : '' ?>";
        </script>
    </head>
    <body>
        <div class="container clearfix">
            <?= $this->fetch('content') ?>
        </div>

        
        <!-- jQuery 3 -->
        <?= $this->Html->script('../plugins/jquery/jquery.min.js') ?>
        
        <?= $this->Html->script('common/urls.js') ?>
        <?= $this->Html->script('common/ajax-wrapper.js') ?>
        <?= $this->Html->script('admin-script.js') ?>
    </body>
</html>
