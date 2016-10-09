<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Passage'), ['action' => 'edit', $passage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Passage'), ['action' => 'delete', $passage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $passage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Passages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Passage'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evalues'), ['controller' => 'Evalues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evalue'), ['controller' => 'Evalues', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Juges'), ['controller' => 'Juges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Juge'), ['controller' => 'Juges', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="passages view large-9 medium-8 columns content">
    <h3><?= h($passage->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($passage->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($passage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Selected') ?></th>
            <td><?= $this->Number->format($passage->selected) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Passage') ?></th>
            <td><?= h($passage->date_passage) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Evalues') ?></h4>
        <?php if (!empty($passage->evalues)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Passage Id') ?></th>
                <th scope="col"><?= __('Licencie Id') ?></th>
                <th scope="col"><?= __('Grade Actuel') ?></th>
                <th scope="col"><?= __('Grade Presente') ?></th>
                <th scope="col"><?= __('Resultat Passage') ?></th>
                <th scope="col"><?= __('Resultat Technique') ?></th>
                <th scope="col"><?= __('Resultat Kata') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($passage->evalues as $evalues): ?>
            <tr>
                <td><?= h($evalues->id) ?></td>
                <td><?= h($evalues->passage_id) ?></td>
                <td><?= h($evalues->licencie_id) ?></td>
                <td><?= h($evalues->grade_actuel) ?></td>
                <td><?= h($evalues->grade_presente) ?></td>
                <td><?= h($evalues->resultat_passage) ?></td>
                <td><?= h($evalues->resultat_technique) ?></td>
                <td><?= h($evalues->resultat_kata) ?></td>
                <td><?= h($evalues->created) ?></td>
                <td><?= h($evalues->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Evalues', 'action' => 'view', $evalues->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Evalues', 'action' => 'edit', $evalues->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Evalues', 'action' => 'delete', $evalues->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evalues->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Juges') ?></h4>
        <?php if (!empty($passage->juges)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Passage Id') ?></th>
                <th scope="col"><?= __('Jure Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($passage->juges as $juges): ?>
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
