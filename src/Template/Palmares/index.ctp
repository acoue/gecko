<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Palmare'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Licencies'), ['controller' => 'Licencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Licency'), ['controller' => 'Licencies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="palmares index large-9 medium-8 columns content">
    <h3><?= __('Palmares') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('competition') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lieux') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_competition') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resultat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('licencie_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($palmares as $palmare): ?>
            <tr>
                <td><?= $this->Number->format($palmare->id) ?></td>
                <td><?= h($palmare->competition) ?></td>
                <td><?= h($palmare->lieux) ?></td>
                <td><?= h($palmare->date_competition) ?></td>
                <td><?= h($palmare->resultat) ?></td>
                <td><?= $palmare->has('licency') ? $this->Html->link($palmare->licency->id, ['controller' => 'Licencies', 'action' => 'view', $palmare->licency->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $palmare->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $palmare->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $palmare->id], ['confirm' => __('Are you sure you want to delete # {0}?', $palmare->id)]) ?>
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
