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
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home" >

<header class="row">
    <div class="header-image"><?= $this->Html->image('elpais.png') ?></div>
    <div class="header-title">
        <h1>Bienvenido al país</h1>
    </div>
</header>

<div class="row">
    <div class="users form large-12 medium-8 columns content">

        <?= $this->Flash->render() ?>

        <?= $this->Form->create(false,
            [
                'url' => ['controller' => 'Users', 'action' => 'login']
            ]
            ) ?>
        <fieldset>
            <legend>Iniciar sesión</legend>
            <?php
            echo $this->Form->control('email',['label' => 'Correo electrónico']);
            echo $this->Form->control('password',['label' => 'Contraseña']);
            ?>
        </fieldset>
        <?= $this->Form->button('Validar') ?>
        <?= $this->Form->end() ?>
    </div>
</div>


</body>
</html>
