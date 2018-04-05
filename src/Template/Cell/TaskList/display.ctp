<?php use Cake\Routing\Router; ?>
<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">Task List</h3>
  </div>
  <div class="panel-body">
    <table cellpadding="0" cellspacing="0" class="panel panel-success">
        <tbody>
          <?php foreach ($issues as $issue): ?>
            <tr>
              <tr>
                <td><button id="tasklist_key_id" onclick="refreshMain(this.innerHTML)" ><?= $issue['key'] ?></button> </td>
              </tr>
              <tr>
                <td><?= $issue['fields']['summary'] ?></td>
              </tr>
              <tr>
                <td><?= $issue['fields']['assignee']['name'] ?></td>
              </tr>
            </tr>
            <tr>
              <td>&nbsp</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>

<script>
  function refreshMain(issueKey) {
    window.location = "/jiraissue/dashboard/"+issueKey;
  }
</script>
