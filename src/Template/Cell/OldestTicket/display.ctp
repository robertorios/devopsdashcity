<?php
/**
  * @var \App\View\AppView $this
  */

// return debug($oldest_tickets[4]['assignee']);
//       die;
?>

<fieldset>
	<legend>Oldest Tickets</legend>
	<table>
	  <tr>
	    <th width="17%">Assignee</th>
	    <th width="15%">Created</th>
	    <th width="9%">RFS</th>
	    <th width="15%">Reporter</th>
	    <th width="10%">Priority</th>
	  </tr>
	   <tr> 
	    <td><?= h($oldest_tickets[0]['assignee']) ?></td>
	    <td><?= h($oldest_tickets[0]['created']) ?></td>
	    <td><?= h($oldest_tickets[0]['issuenum']) ?></td>
	    <td><?= h($oldest_tickets[0]['reporter']) ?></td>
	    <td><?= h($oldest_tickets[0]['priority']) ?></td>
	  </tr>
	   <tr> 
	    <td><?= h($oldest_tickets[1]['assignee']) ?></td>
	    <td><?= h($oldest_tickets[1]['created']) ?></td>
	    <td><?= h($oldest_tickets[1]['issuenum']) ?></td>
	    <td><?= h($oldest_tickets[1]['reporter']) ?></td>
	    <td><?= h($oldest_tickets[1]['priority']) ?></td>
	  </tr>
	  <tr> 
	    <td><?= h($oldest_tickets[2]['assignee']) ?></td>
	    <td><?= h($oldest_tickets[2]['created']) ?></td>
	    <td><?= h($oldest_tickets[2]['issuenum']) ?></td>
	    <td><?= h($oldest_tickets[2]['reporter']) ?></td>
	    <td><?= h($oldest_tickets[2]['priority']) ?></td>
	  </tr>
	  <tr> 
	    <td><?= h($oldest_tickets[3]['assignee']) ?></td>
	    <td><?= h($oldest_tickets[3]['created']) ?></td>
	    <td><?= h($oldest_tickets[3]['issuenum']) ?></td>
	    <td><?= h($oldest_tickets[3]['reporter']) ?></td>
	    <td><?= h($oldest_tickets[3]['priority']) ?></td>
	  </tr>
	  <tr> 
	    <td><?= h($oldest_tickets[4]['assignee']) ?></td>
	    <td><?= h($oldest_tickets[4]['created']) ?></td>
	    <td><?= h($oldest_tickets[4]['issuenum']) ?></td>
	    <td><?= h($oldest_tickets[4]['reporter']) ?></td>
	    <td><?= h($oldest_tickets[4]['priority']) ?></td>
	  </tr>
	</table>
</fieldset>