<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Palmare'), ['action' => 'edit', $palmare->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Palmare'), ['action' => 'delete', $palmare->id], ['confirm' => __('Are you sure you want to delete # {0}?', $palmare->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Palmares'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Palmare'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Licencies'), ['controller' => 'Licencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Licency'), ['controller' => 'Licencies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="palmares view large-9 medium-8 columns content">
    <h3><?= h($palmare->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Competition') ?></th>
            <td><?= h($palmare->competition) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lieux') ?></th>
            <td><?= h($palmare->lieux) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resultat') ?></th>
            <td><?= h($palmare->resultat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Licency') ?></th>
            <td><?= $palmare->has('licency') ? $this->Html->link($palmare->licency->id, ['controller' => 'Licencies', 'action' => 'view', $palmare->licency->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($palmare->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Competition') ?></th>
            <td><?= h($palmare->date_competition) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Commentaire') ?></h4>
        <?= $this->Text->autoParagraph(h($palmare->commentaire)); ?>
    </div>
</div>
