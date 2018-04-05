<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jiraissue'), ['action' => 'edit', $jiraissue->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jiraissue'), ['action' => 'delete', $jiraissue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jiraissue->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jiraissue'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jiraissue'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jiraissue view large-9 medium-8 columns content">
    <h3><?= h($jiraissue->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pkey') ?></th>
            <td><?= h($jiraissue->pkey) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reporter') ?></th>
            <td><?= h($jiraissue->reporter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assignee') ?></th>
            <td><?= h($jiraissue->assignee) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creator') ?></th>
            <td><?= h($jiraissue->creator) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Issuetype') ?></th>
            <td><?= h($jiraissue->issuetype) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Summary') ?></th>
            <td><?= h($jiraissue->summary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Priority') ?></th>
            <td><?= h($jiraissue->priority) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resolution') ?></th>
            <td><?= h($jiraissue->resolution) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Issuestatus') ?></th>
            <td><?= h($jiraissue->issuestatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jiraissue->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Issuenum') ?></th>
            <td><?= $this->Number->format($jiraissue->issuenum) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $this->Number->format($jiraissue->project) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Votes') ?></th>
            <td><?= $this->Number->format($jiraissue->votes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Watches') ?></th>
            <td><?= $this->Number->format($jiraissue->watches) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timeoriginalestimate') ?></th>
            <td><?= $this->Number->format($jiraissue->timeoriginalestimate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timeestimate') ?></th>
            <td><?= $this->Number->format($jiraissue->timeestimate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timespent') ?></th>
            <td><?= $this->Number->format($jiraissue->timespent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Workflow Id') ?></th>
            <td><?= $this->Number->format($jiraissue->workflow_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Security') ?></th>
            <td><?= $this->Number->format($jiraissue->security) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fixfor') ?></th>
            <td><?= $this->Number->format($jiraissue->fixfor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Component') ?></th>
            <td><?= $this->Number->format($jiraissue->component) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($jiraissue->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($jiraissue->updated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duedate') ?></th>
            <td><?= h($jiraissue->duedate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resolutiondate') ?></th>
            <td><?= h($jiraissue->resolutiondate) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($jiraissue->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Environment') ?></h4>
        <?= $this->Text->autoParagraph(h($jiraissue->environment)); ?>
    </div>
</div>
