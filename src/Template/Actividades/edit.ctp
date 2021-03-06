<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actividade $actividade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $actividade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $actividade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Actividades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actividades form large-9 medium-8 columns content">
    <?= $this->Form->create($actividade) ?>
    <fieldset>
        <legend><?= __('Edit Actividade') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('titulo');
            echo $this->Form->control('cuerpo');
            echo $this->Form->control('categorias._ids', ['options' => $categorias]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
