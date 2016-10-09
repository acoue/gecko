<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Juge'), ['action' => 'edit', $juge->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Juge'), ['action' => 'delete', $juge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $juge->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Juges'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Juge'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Passages'), ['controller' => 'Passages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Passage'), ['controller' => 'Passages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jures'), ['controller' => 'Jures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jure'), ['controller' => 'Jures', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="juges view large-9 medium-8 columns content">
    <h3><?= h($juge->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Passage') ?></th>
            <td><?= $juge->has('passage') ? $this->Html->link($juge->passage->name, ['controller' => 'Passages', 'action' => 'view', $juge->passage->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jure') ?></th>
            <td><?= $juge->has('jure') ? $this->Html->link($juge->jure->id, ['controller' => 'Jures', 'action' => 'view', $juge->jure->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($juge->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($juge->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($juge->modified) ?></td>
        </tr>
    </table>
</div>
