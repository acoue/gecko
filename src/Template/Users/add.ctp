<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Profils'), ['controller' => 'Profils', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profil'), ['controller' => 'Profils', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Historiques'), ['controller' => 'Historiques', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Historique'), ['controller' => 'Historiques', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Membres'), ['controller' => 'Membres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Membre'), ['controller' => 'Membres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('hasid');
            echo $this->Form->input('lastlogin');
            echo $this->Form->input('actif');
            echo $this->Form->input('token');
            echo $this->Form->input('profil_id', ['options' => $profils]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
