<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Juge'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Passages'), ['controller' => 'Passages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Passage'), ['controller' => 'Passages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jures'), ['controller' => 'Jures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Jure'), ['controller' => 'Jures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="juges index large-9 medium-8 columns content">
    <h3><?= __('Juges') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('passage_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jure_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($juges as $juge): ?>
            <tr>
                <td><?= $this->Number->format($juge->id) ?></td>
                <td><?= $juge->has('passage') ? $this->Html->link($juge->passage->name, ['controller' => 'Passages', 'action' => 'view', $juge->passage->id]) : '' ?></td>
                <td><?= $juge->has('jure') ? $this->Html->link($juge->jure->id, ['controller' => 'Jures', 'action' => 'view', $juge->jure->id]) : '' ?></td>
                <td><?= h($juge->created) ?></td>
                <td><?= h($juge->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $juge->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $juge->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $juge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $juge->id)]) ?>
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
