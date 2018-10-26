<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActividadesCategoria $actividadesCategoria
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $actividadesCategoria->actividad_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $actividadesCategoria->actividad_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Actividades Categorias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Actividades'), ['controller' => 'Actividades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actividade'), ['controller' => 'Actividades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actividadesCategorias form large-9 medium-8 columns content">
    <?= $this->Form->create($actividadesCategoria) ?>
    <fieldset>
        <legend><?= __('Edit Actividades Categoria') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
