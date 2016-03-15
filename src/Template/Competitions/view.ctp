<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Competition'), ['action' => 'edit', $competition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Competition'), ['action' => 'delete', $competition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Competitions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competition'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="competitions view large-9 medium-8 columns content">
    <h3><?= h($competition->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($competition->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Lieux') ?></th>
            <td><?= h($competition->lieux) ?></td>
        </tr>
        <tr>
            <th><?= __('Category') ?></th>
            <td><?= $competition->has('category') ? $this->Html->link($competition->category->name, ['controller' => 'Categories', 'action' => 'view', $competition->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($competition->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= $this->Number->format($competition->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Selected') ?></th>
            <td><?= $this->Number->format($competition->selected) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Competition') ?></th>
            <td><?= h($competition->date_competition) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($competition->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($competition->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($competition->description)); ?>
    </div>
</div>
