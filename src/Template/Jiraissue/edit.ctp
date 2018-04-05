<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jiraissue->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jiraissue->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jiraissue'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="jiraissue form large-9 medium-8 columns content">
    <?= $this->Form->create($jiraissue) ?>
    <fieldset>
        <legend><?= __('Edit Jiraissue') ?></legend>
        <?php
            echo $this->Form->control('pkey');
            echo $this->Form->control('issuenum');
            echo $this->Form->control('project');
            echo $this->Form->control('reporter');
            echo $this->Form->control('assignee');
            echo $this->Form->control('creator');
            echo $this->Form->control('issuetype');
            echo $this->Form->control('summary');
            echo $this->Form->control('description');
            echo $this->Form->control('environment');
            echo $this->Form->control('priority');
            echo $this->Form->control('resolution');
            echo $this->Form->control('issuestatus');
            echo $this->Form->control('duedate');
            echo $this->Form->control('resolutiondate');
            echo $this->Form->control('votes');
            echo $this->Form->control('watches');
            echo $this->Form->control('timeoriginalestimate');
            echo $this->Form->control('timeestimate');
            echo $this->Form->control('timespent');
            echo $this->Form->control('workflow_id');
            echo $this->Form->control('security');
            echo $this->Form->control('fixfor');
            echo $this->Form->control('component');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
