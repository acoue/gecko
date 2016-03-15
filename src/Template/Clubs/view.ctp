<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Club'), ['action' => 'edit', $club->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Club'), ['action' => 'delete', $club->id], ['confirm' => __('Are you sure you want to delete # {0}?', $club->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clubs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Club'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Regions'), ['controller' => 'Regions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['controller' => 'Regions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Licencies'), ['controller' => 'Licencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Licency'), ['controller' => 'Licencies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clubs view large-9 medium-8 columns content">
    <h3><?= h($club->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($club->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Region') ?></th>
            <td><?= $club->has('region') ? $this->Html->link($club->region->name, ['controller' => 'Regions', 'action' => 'view', $club->region->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($club->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Licencies') ?></h4>
        <?php if (!empty($club->licencies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Prenom') ?></th>
                <th><?= __('Nom') ?></th>
                <th><?= __('Club Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($club->licencies as $licencies): ?>
            <tr>
                <td><?= h($licencies->id) ?></td>
                <td><?= h($licencies->prenom) ?></td>
                <td><?= h($licencies->nom) ?></td>
                <td><?= h($licencies->club_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Licencies', 'action' => 'view', $licencies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Licencies', 'action' => 'edit', $licencies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Licencies', 'action' => 'delete', $licencies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $licencies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
