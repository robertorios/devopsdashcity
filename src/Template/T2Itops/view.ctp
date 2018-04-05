<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit T2 Itop'), ['action' => 'edit', $t2Itop->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete T2 Itop'), ['action' => 'delete', $t2Itop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $t2Itop->id)]) ?> </li>
        <li><?= $this->Html->link(__('List T2 Itops'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New T2 Itop'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="t2Itops view large-9 medium-8 columns content">
    <h3><?= h($t2Itop->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Assignee') ?></th>
            <td><?= h($t2Itop->assignee) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Component') ?></th>
            <td><?= h($t2Itop->component) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($t2Itop->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duedate') ?></th>
            <td><?= h($t2Itop->duedate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Issue Desc') ?></th>
            <td><?= h($t2Itop->issue_desc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Issue Type') ?></th>
            <td><?= h($t2Itop->issue_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Issuenum') ?></th>
            <td><?= h($t2Itop->issuenum) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item Type Desc') ?></th>
            <td><?= h($t2Itop->item_type_desc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Priority') ?></th>
            <td><?= h($t2Itop->priority) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project Desc') ?></th>
            <td><?= h($t2Itop->project_desc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project Key') ?></th>
            <td><?= h($t2Itop->project_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project Name') ?></th>
            <td><?= h($t2Itop->project_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project Type') ?></th>
            <td><?= h($t2Itop->project_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reporter') ?></th>
            <td><?= h($t2Itop->reporter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resolution Desc') ?></th>
            <td><?= h($t2Itop->resolution_desc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resolution Type') ?></th>
            <td><?= h($t2Itop->resolution_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resolutiondate') ?></th>
            <td><?= h($t2Itop->resolutiondate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sequence') ?></th>
            <td><?= h($t2Itop->sequence) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Desc') ?></th>
            <td><?= h($t2Itop->status_desc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Type') ?></th>
            <td><?= h($t2Itop->status_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __(' Desc Substring') ?></th>
            <td><?= h($t2Itop->_desc_substring) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __(' Resolve Days Taken') ?></th>
            <td><?= h($t2Itop->_resolve_days_taken) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fme Rejection Code') ?></th>
            <td><?= h($t2Itop->fme_rejection_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Geom') ?></th>
            <td><?= h($t2Itop->geom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($t2Itop->id) ?></td>
        </tr>
    </table>
</div>
