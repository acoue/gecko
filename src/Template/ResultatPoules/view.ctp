<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Resultat Poule'), ['action' => 'edit', $resultatPoule->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Resultat Poule'), ['action' => 'delete', $resultatPoule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resultatPoule->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Resultat Poules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resultat Poule'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Licencies'), ['controller' => 'Licencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Licency'), ['controller' => 'Licencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="resultatPoules view large-9 medium-8 columns content">
    <h3><?= h($resultatPoule->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Licency') ?></th>
            <td><?= $resultatPoule->has('licency') ? $this->Html->link($resultatPoule->licency->id, ['controller' => 'Licencies', 'action' => 'view', $resultatPoule->licency->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Competition') ?></th>
            <td><?= $resultatPoule->has('competition') ? $this->Html->link($resultatPoule->competition->name, ['controller' => 'Competitions', 'action' => 'view', $resultatPoule->competition->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($resultatPoule->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Poule') ?></th>
            <td><?= $this->Number->format($resultatPoule->numero_poule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Classement') ?></th>
            <td><?= $this->Number->format($resultatPoule->classement) ?></td>
        </tr>
    </table>
</div>
