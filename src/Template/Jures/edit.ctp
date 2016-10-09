<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jure->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jure->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Juges'), ['controller' => 'Juges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Juge'), ['controller' => 'Juges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jures form large-9 medium-8 columns content">
    <?= $this->Form->create($jure) ?>
    <fieldset>
        <legend><?= __('Edit Jure') ?></legend>
        <?php
            echo $this->Form->input('nom');
            echo $this->Form->input('prenom');
            echo $this->Form->input('grade');
            echo $this->Form->input('actif');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
