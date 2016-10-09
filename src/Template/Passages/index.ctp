<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Passage'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evalues'), ['controller' => 'Evalues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evalue'), ['controller' => 'Evalues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Juges'), ['controller' => 'Juges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Juge'), ['controller' => 'Juges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="passages index large-9 medium-8 columns content">
    <h3><?= __('Passages') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_passage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('selected') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($passages as $passage): ?>
            <tr>
                <td><?= $this->Number->format($passage->id) ?></td>
                <td><?= h($passage->name) ?></td>
                <td><?= h($passage->date_passage) ?></td>
                <td><?= $this->Number->format($passage->selected) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $passage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $passage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $passage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $passage->id)]) ?>
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

<div id="exTab2" class="container">	
	<ul class="nav nav-tabs">
		<li class="active">
        	<a  href="#1" data-toggle="tab">Jury</a></li>
		<li><a href="#2" data-toggle="tab">Licenciés</a></li>
		<li><a href="#3" data-toggle="tab">Résultats</a></li>
	</ul>
	<div class="tab-content ">
		<div class="tab-pane active" id="1">
			<h3>Onglet listant les membre du jury</h3>
		</div>
		<div class="tab-pane" id="2">
			<h3>Notice the gap between the content and tab after applying a background color</h3>
		</div>
        <div class="tab-pane" id="3">
			<h3>add clearfix to tab-content (see the css)</h3>
		</div>
	</div>
</div>