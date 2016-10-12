<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Resultat Poule'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Licencies'), ['controller' => 'Licencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Licency'), ['controller' => 'Licencies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="resultatPoules index large-9 medium-8 columns content">
    <h3><?= __('Resultat Poules') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_poule') ?></th>
                <th scope="col"><?= $this->Paginator->sort('classement') ?></th>
                <th scope="col"><?= $this->Paginator->sort('licencie_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('competition_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultatPoules as $resultatPoule): ?>
            <tr>
                <td><?= $this->Number->format($resultatPoule->id) ?></td>
                <td><?= $this->Number->format($resultatPoule->numero_poule) ?></td>
                <td><?= $this->Number->format($resultatPoule->classement) ?></td>
                <td><?= $resultatPoule->has('licency') ? $this->Html->link($resultatPoule->licency->id, ['controller' => 'Licencies', 'action' => 'view', $resultatPoule->licency->id]) : '' ?></td>
                <td><?= $resultatPoule->has('competition') ? $this->Html->link($resultatPoule->competition->name, ['controller' => 'Competitions', 'action' => 'view', $resultatPoule->competition->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $resultatPoule->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $resultatPoule->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $resultatPoule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resultatPoule->id)]) ?>
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
