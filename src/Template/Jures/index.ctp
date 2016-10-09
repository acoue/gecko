<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Jure'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Juges'), ['controller' => 'Juges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Juge'), ['controller' => 'Juges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jures index large-9 medium-8 columns content">
    <h3><?= __('Jures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actif') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jures as $jure): ?>
            <tr>
                <td><?= $this->Number->format($jure->id) ?></td>
                <td><?= h($jure->nom) ?></td>
                <td><?= h($jure->prenom) ?></td>
                <td><?= $this->Number->format($jure->grade) ?></td>
                <td><?= $this->Number->format($jure->actif) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jure->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jure->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jure->id)]) ?>
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
