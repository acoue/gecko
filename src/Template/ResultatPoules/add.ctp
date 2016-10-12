<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Resultat Poules'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Licencies'), ['controller' => 'Licencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Licency'), ['controller' => 'Licencies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="resultatPoules form large-9 medium-8 columns content">
    <?= $this->Form->create($resultatPoule) ?>
    <fieldset>
        <legend><?= __('Add Resultat Poule') ?></legend>
        <?php
            echo $this->Form->input('numero_poule');
            echo $this->Form->input('classement');
            echo $this->Form->input('licencie_id', ['options' => $licencies]);
            echo $this->Form->input('competition_id', ['options' => $competitions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
