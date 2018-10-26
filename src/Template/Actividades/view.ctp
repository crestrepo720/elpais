<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actividade $actividade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Actividade'), ['action' => 'edit', $actividade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Actividade'), ['action' => 'delete', $actividade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actividade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actividades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actividade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actividades view large-9 medium-8 columns content">
    <h3><?= h($actividade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $actividade->has('user') ? $this->Html->link($actividade->user->id, ['controller' => 'Users', 'action' => 'view', $actividade->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($actividade->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($actividade->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($actividade->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($actividade->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Cuerpo') ?></h4>
        <?= $this->Text->autoParagraph(h($actividade->cuerpo)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Categorias') ?></h4>
        <?php if (!empty($actividade->categorias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($actividade->categorias as $categorias): ?>
            <tr>
                <td><?= h($categorias->id) ?></td>
                <td><?= h($categorias->titulo) ?></td>
                <td><?= h($categorias->created) ?></td>
                <td><?= h($categorias->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categorias', 'action' => 'view', $categorias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categorias', 'action' => 'edit', $categorias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categorias', 'action' => 'delete', $categorias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
