<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evalue'), ['action' => 'edit', $evalue->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evalue'), ['action' => 'delete', $evalue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evalue->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Evalues'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evalue'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Passages'), ['controller' => 'Passages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Passage'), ['controller' => 'Passages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Licencies'), ['controller' => 'Licencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Licency'), ['controller' => 'Licencies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="evalues view large-9 medium-8 columns content">
    <h3><?= h($evalue->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Passage') ?></th>
            <td><?= $evalue->has('passage') ? $this->Html->link($evalue->passage->name, ['controller' => 'Passages', 'action' => 'view', $evalue->passage->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Licency') ?></th>
            <td><?= $evalue->has('licency') ? $this->Html->link($evalue->licency->id, ['controller' => 'Licencies', 'action' => 'view', $evalue->licency->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($evalue->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grade Actuel') ?></th>
            <td><?= $this->Number->format($evalue->grade_actuel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grade Presente') ?></th>
            <td><?= $this->Number->format($evalue->grade_presente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resultat Passage') ?></th>
            <td><?= $this->Number->format($evalue->resultat_passage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resultat Technique') ?></th>
            <td><?= $this->Number->format($evalue->resultat_technique) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resultat Kata') ?></th>
            <td><?= $this->Number->format($evalue->resultat_kata) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($evalue->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($evalue->modified) ?></td>
        </tr>
    </table>
</div>
