<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New T2 Itop'), ['action' => 'add']) ?></li>
    </ul>
</nav> -->
<br>
<br>
<div class="t2Itops index large-9 medium-8 columns content">
    <h3><?= __('T2 Itops') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('assignee') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('component') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('duedate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('issue_desc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('issue_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('issuenum') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_type_desc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('priority') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_desc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reporter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resolution_desc') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('resolution_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resolutiondate') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('sequence') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status_desc') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('status_type') ?></th>
               <!--  <th scope="col"><?= $this->Paginator->sort('_desc_substring') ?></th>
                <th scope="col"><?= $this->Paginator->sort('_resolve_days_taken') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fme_rejection_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('geom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($t2Itops as $t2Itop): ?>
            <tr>
                <td><?= h($t2Itop->assignee) ?></td>
                <!--<td><?= h($t2Itop->component) ?></td>-->
                <td><?= h($t2Itop->created) ?></td>
                <!-- <td><?= h($t2Itop->duedate) ?></td>
                <td><?= h($t2Itop->issue_desc) ?></td>
                <td><?= h($t2Itop->issue_type) ?></td>
                <td><?= h($t2Itop->issuenum) ?></td>
                <td><?= h($t2Itop->item_type_desc) ?></td>
                <td><?= h($t2Itop->priority) ?></td>
                <td><?= h($t2Itop->project_desc) ?></td>
                <td><?= h($t2Itop->project_key) ?></td>
                <td><?= h($t2Itop->project_name) ?></td>
                <td><?= h($t2Itop->project_type) ?></td>
                <td><?= h($t2Itop->reporter) ?></td>
                <td><?= h($t2Itop->resolution_desc) ?></td>-->
                <td><?= h($t2Itop->resolution_type) ?></td>
                <td><?= h($t2Itop->resolutiondate) ?></td>
                <!--<td><?= h($t2Itop->sequence) ?></td> 
                <td><?= h($t2Itop->status_desc) ?></td>-->
                <td><?= h($t2Itop->status_type) ?></td>
                <!--<td><?= h($t2Itop->_desc_substring) ?></td>
                <td><?= h($t2Itop->_resolve_days_taken) ?></td>
                <td><?= h($t2Itop->fme_rejection_code) ?></td>
                <td><?= h($t2Itop->geom) ?></td>
                <td><?= $this->Number->format($t2Itop->id) ?></td> -->
                <!-- <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $t2Itop->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $t2Itop->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $t2Itop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $t2Itop->id)]) ?>
                </td> -->
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div> -->
</div>
