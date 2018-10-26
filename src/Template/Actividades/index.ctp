<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actividade[]|\Cake\Collection\CollectionInterface $actividades
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Actividade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="actividades index large-9 medium-8 columns content">
    <h3>
        <?= __('Actividades') ?>
        <input type="text" name="buscador" id="buscador">

    </h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($actividades as $actividade): ?>
            <tr>
                <td><?= $this->Number->format($actividade->id) ?></td>
                <td><?= $actividade->has('user') ? $this->Html->link($actividade->user->id, ['controller' => 'Users', 'action' => 'view', $actividade->user->id]) : '' ?></td>
                <td><?= h($actividade->titulo) ?></td>
                <td><?= h($actividade->created) ?></td>
                <td><?= h($actividade->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $actividade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actividade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $actividade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actividade->id)]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Paginas {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>



<?= $this->Form->create($actividade,['id' => 'form-buscador']) ?>
    <?php
    echo $this->Form->control('filtro',['type' => 'hidden']);
    ?>
<?= $this->Form->end() ?>