<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List T2 Itops'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="t2Itops form large-9 medium-8 columns content">
    <?= $this->Form->create($t2Itop) ?>
    <fieldset>
        <legend><?= __('Add T2 Itop') ?></legend>
        <?php
            echo $this->Form->control('assignee');
            echo $this->Form->control('component');
            echo $this->Form->control('duedate');
            echo $this->Form->control('issue_desc');
            echo $this->Form->control('issue_type');
            echo $this->Form->control('issuenum');
            echo $this->Form->control('item_type_desc');
            echo $this->Form->control('priority');
            echo $this->Form->control('project_desc');
            echo $this->Form->control('project_key');
            echo $this->Form->control('project_name');
            echo $this->Form->control('project_type');
            echo $this->Form->control('reporter');
            echo $this->Form->control('resolution_desc');
            echo $this->Form->control('resolution_type');
            echo $this->Form->control('resolutiondate');
            echo $this->Form->control('sequence');
            echo $this->Form->control('status_desc');
            echo $this->Form->control('status_type');
            echo $this->Form->control('_desc_substring');
            echo $this->Form->control('_resolve_days_taken');
            echo $this->Form->control('fme_rejection_code');
            echo $this->Form->control('geom');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
