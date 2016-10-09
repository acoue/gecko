<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jure'), ['action' => 'edit', $jure->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jure'), ['action' => 'delete', $jure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jure->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jure'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Juges'), ['controller' => 'Juges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Juge'), ['controller' => 'Juges', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jures view large-9 medium-8 columns content">
    <h3><?= h($jure->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($jure->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($jure->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jure->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grade') ?></th>
            <td><?= $this->Number->format($jure->grade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actif') ?></th>
            <td><?= $this->Number->format($jure->actif) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Juges') ?></h4>
        <?php if (!empty($jure->juges)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Passage Id') ?></th>
                <th scope="col"><?= __('Jure Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($jure->juges as $juges): ?>
            <tr>
                <td><?= h($juges->id) ?></td>
                <td><?= h($juges->passage_id) ?></td>
                <td><?= h($juges->jure_id) ?></td>
                <td><?= h($juges->created) ?></td>
                <td><?= h($juges->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Juges', 'action' => 'view', $juges->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Juges', 'action' => 'edit', $juges->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Juges', 'action' => 'delete', $juges->id], ['confirm' => __('Are you sure you want to delete # {0}?', $juges->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
