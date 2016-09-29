<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Palmares'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Licencies'), ['controller' => 'Licencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Licency'), ['controller' => 'Licencies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="palmares form large-9 medium-8 columns content">
    <?= $this->Form->create($palmare) ?>
    <fieldset>
        <legend><?= __('Add Palmare') ?></legend>
        <?php
            echo $this->Form->input('competition');
            echo $this->Form->input('lieux');
            echo $this->Form->input('date_competition');
            echo $this->Form->input('resultat');
            echo $this->Form->input('commentaire');
            echo $this->Form->input('licencie_id', ['options' => $licencies]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
