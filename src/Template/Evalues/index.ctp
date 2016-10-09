<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Evalue'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Passages'), ['controller' => 'Passages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Passage'), ['controller' => 'Passages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Licencies'), ['controller' => 'Licencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Licency'), ['controller' => 'Licencies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evalues index large-9 medium-8 columns content">
    <h3><?= __('Evalues') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('passage_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('licencie_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grade_actuel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grade_presente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resultat_passage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resultat_technique') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resultat_kata') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($evalues as $evalue): ?>
            <tr>
                <td><?= $this->Number->format($evalue->id) ?></td>
                <td><?= $evalue->has('passage') ? $this->Html->link($evalue->passage->name, ['controller' => 'Passages', 'action' => 'view', $evalue->passage->id]) : '' ?></td>
                <td><?= $evalue->has('licency') ? $this->Html->link($evalue->licency->id, ['controller' => 'Licencies', 'action' => 'view', $evalue->licency->id]) : '' ?></td>
                <td><?= $this->Number->format($evalue->grade_actuel) ?></td>
                <td><?= $this->Number->format($evalue->grade_presente) ?></td>
                <td><?= $this->Number->format($evalue->resultat_passage) ?></td>
                <td><?= $this->Number->format($evalue->resultat_technique) ?></td>
                <td><?= $this->Number->format($evalue->resultat_kata) ?></td>
                <td><?= h($evalue->created) ?></td>
                <td><?= h($evalue->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $evalue->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evalue->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evalue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evalue->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
