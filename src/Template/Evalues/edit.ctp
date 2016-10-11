<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $evalue->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $evalue->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Evalues'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Passages'), ['controller' => 'Passages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Passage'), ['controller' => 'Passages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Licencies'), ['controller' => 'Licencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Licency'), ['controller' => 'Licencies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evalues form large-9 medium-8 columns content">
    <?= $this->Form->create($evalue) ?>
    <fieldset>
        <legend><?= __('Edit Evalue') ?></legend>
        <?php
            echo $this->Form->input('passage_id', ['options' => $passages]);
            echo $this->Form->input('licencie_id', ['options' => $licencies]);
            echo $this->Form->input('grade_actuel');
            echo $this->Form->input('grade_presente');
            echo $this->Form->input('resultat_passage');
            echo $this->Form->input('resultat_technique');
            echo $this->Form->input('resultat_kata');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>