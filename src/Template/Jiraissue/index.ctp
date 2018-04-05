<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Jiraissue'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jiraissue index large-9 medium-8 columns content">
    <h3><?= __('Jiraissue') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pkey') ?></th>
                <th scope="col"><?= $this->Paginator->sort('issuenum') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reporter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assignee') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creator') ?></th>
                <th scope="col"><?= $this->Paginator->sort('issuetype') ?></th>
                <th scope="col"><?= $this->Paginator->sort('summary') ?></th>
                <th scope="col"><?= $this->Paginator->sort('priority') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resolution') ?></th>
                <th scope="col"><?= $this->Paginator->sort('issuestatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duedate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resolutiondate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('votes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('watches') ?></th>
                <th scope="col"><?= $this->Paginator->sort('timeoriginalestimate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('timeestimate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('timespent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('workflow_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('security') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fixfor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('component') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jiraissue as $jiraissue): ?>
            <tr>
                <td><?= $this->Number->format($jiraissue->id) ?></td>
                <td><?= h($jiraissue->pkey) ?></td>
                <td><?= $this->Number->format($jiraissue->issuenum) ?></td>
                <td><?= $this->Number->format($jiraissue->project) ?></td>
                <td><?= h($jiraissue->reporter) ?></td>
                <td><?= h($jiraissue->assignee) ?></td>
                <td><?= h($jiraissue->creator) ?></td>
                <td><?= h($jiraissue->issuetype) ?></td>
                <td><?= h($jiraissue->summary) ?></td>
                <td><?= h($jiraissue->priority) ?></td>
                <td><?= h($jiraissue->resolution) ?></td>
                <td><?= h($jiraissue->issuestatus) ?></td>
                <td><?= h($jiraissue->created) ?></td>
                <td><?= h($jiraissue->updated) ?></td>
                <td><?= h($jiraissue->duedate) ?></td>
                <td><?= h($jiraissue->resolutiondate) ?></td>
                <td><?= $this->Number->format($jiraissue->votes) ?></td>
                <td><?= $this->Number->format($jiraissue->watches) ?></td>
                <td><?= $this->Number->format($jiraissue->timeoriginalestimate) ?></td>
                <td><?= $this->Number->format($jiraissue->timeestimate) ?></td>
                <td><?= $this->Number->format($jiraissue->timespent) ?></td>
                <td><?= $this->Number->format($jiraissue->workflow_id) ?></td>
                <td><?= $this->Number->format($jiraissue->security) ?></td>
                <td><?= $this->Number->format($jiraissue->fixfor) ?></td>
                <td><?= $this->Number->format($jiraissue->component) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jiraissue->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jiraissue->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jiraissue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jiraissue->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
