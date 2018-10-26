<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActividadesCategoria $actividadesCategoria
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Actividades Categoria'), ['action' => 'edit', $actividadesCategoria->actividad_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Actividades Categoria'), ['action' => 'delete', $actividadesCategoria->actividad_id], ['confirm' => __('Are you sure you want to delete # {0}?', $actividadesCategoria->actividad_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Actividades Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actividades Categoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actividades'), ['controller' => 'Actividades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actividade'), ['controller' => 'Actividades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="actividadesCategorias view large-9 medium-8 columns content">
    <h3><?= h($actividadesCategoria->actividad_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Actividade') ?></th>
            <td><?= $actividadesCategoria->has('actividade') ? $this->Html->link($actividadesCategoria->actividade->id, ['controller' => 'Actividades', 'action' => 'view', $actividadesCategoria->actividade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $actividadesCategoria->has('categoria') ? $this->Html->link($actividadesCategoria->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $actividadesCategoria->categoria->id]) : '' ?></td>
        </tr>
    </table>
</div>
