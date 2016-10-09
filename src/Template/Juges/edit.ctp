<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $juge->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $juge->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Juges'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Passages'), ['controller' => 'Passages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Passage'), ['controller' => 'Passages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jures'), ['controller' => 'Jures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Jure'), ['controller' => 'Jures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="juges form large-9 medium-8 columns content">
    <?= $this->Form->create($juge) ?>
    <fieldset>
        <legend><?= __('Edit Juge') ?></legend>
        <?php
            echo $this->Form->input('passage_id', ['options' => $passages]);
            echo $this->Form->input('jure_id', ['options' => $jures]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
