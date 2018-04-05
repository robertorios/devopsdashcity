<a>table display</a>

<?php
/**
  * @var \App\View\AppView $this
  */
$all = $result[0]; 
$key = array_keys($all);
$value = (array_values($all));
$result_keys = '["' . implode('", "', array_keys($all) ) . '"]';


$resolved = $result[1];
$key1 = array_keys($resolved);
$value1 = (array_values($resolved));
$result_keys1 = '["' . implode('", "', array_keys($resolved) ) . '"]';

$this->$all;

?>

<div class="jiraissue index large-9 medium-8 columns content">
    <h3><?= __('Jiraissue') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pkey') ?></th>
                <th scope="col"><?= $this->Paginator->sort('issuenum') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project') ?></th>
	        </tr>
	    </thead>
	        <tbody>
	            <?php foreach ($jiraissue as $jiraissue): ?>
	            <tr>
	                <td><?= $this->Number->format($jiraissue->id) ?></td>
	                <td><?= h($jiraissue->pkey) ?></td>
	                <td><?= $this->Number->format($jiraissue->issuenum) ?></td>
	                <td><?= $this->Number->format($jiraissue->project) ?></td>
	            </tr>
            	<?php endforeach; ?>
        	</tbody>
    </table>

<table>
	<tr>
		<th>Tickets Created</th>
		<th>Tickets Resolved</th>
	</tr>
	<tr>
		<td>$result[0][0]</td>
	</tr>
</table>