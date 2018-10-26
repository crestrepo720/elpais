<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActividadesCategoria[]|\Cake\Collection\CollectionInterface $actividadesCategorias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Actividades Categoria'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Actividades'), ['controller' => 'Actividades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Actividade'), ['controller' => 'Actividades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actividadesCategorias index large-9 medium-8 columns content">
    <h3><?= __('Actividades Categorias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('actividad_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($actividadesCategorias as $actividadesCategoria): ?>
            <tr>
                <td><?= $actividadesCategoria->has('actividade') ? $this->Html->link($actividadesCategoria->actividade->id, ['controller' => 'Actividades', 'action' => 'view', $actividadesCategoria->actividade->id]) : '' ?></td>
                <td><?= $actividadesCategoria->has('categoria') ? $this->Html->link($actividadesCategoria->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $actividadesCategoria->categoria->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $actividadesCategoria->actividad_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actividadesCategoria->actividad_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $actividadesCategoria->actividad_id], ['confirm' => __('Are you sure you want to delete # {0}?', $actividadesCategoria->actividad_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
