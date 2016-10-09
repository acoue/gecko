<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $passage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $passage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Passages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Evalues'), ['controller' => 'Evalues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evalue'), ['controller' => 'Evalues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Juges'), ['controller' => 'Juges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Juge'), ['controller' => 'Juges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="passages form large-9 medium-8 columns content">
    <?= $this->Form->create($passage) ?>
    <fieldset>
        <legend><?= __('Edit Passage') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('date_passage');
            echo $this->Form->input('selected');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
