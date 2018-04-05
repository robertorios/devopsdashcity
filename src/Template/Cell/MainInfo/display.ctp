<div class="accordion-expand-holder">
    <button type="button" id="openAll">Expand all</button>
    <button type="button" id="closeAll">Collapse all</button>
</div>
<div id="mainAccordion">
  <div>
  <h3>Details</h3>
    <div class="panel-body">
      <table cellpadding="0" cellspacing="0" class="panel panel-success">
          <tbody>
            <tr>
              <td><b>Ticket Key </b></td>
              <td id="details_key_id" ><?= $issue['key'] ?></td>
            </tr>
            <tr>
              <td><b>Summary </b></td>
              <td id="details_summary_id" ><?= $issue['fields']['summary'] ?></td>
            </tr>
            <tr>
              <td><b>Priority </b></td>
              <td id="details_priority_id" ><?= $issue['fields']['priority']['name'] ?></td>
            </tr>
            <tr>
              <td><b>Status </b></td>
              <td id="details_status_id" ><?= $issue['fields']['status']['name'] ?></td>
            </tr>
            <tr>
              <td id="details_tag_id" ><b>Tags </b></td>
              <td>
              <table>
                  <tbody>
                        <?php foreach ($issue['fields']['components'] as $component): ?>
                          <tr>
                            <td>
                              <?= $component['name'] ?>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </tr>
      </tbody>
  </table>
</td>
</div>
  </div>
    <div>
    <h3>Description</h3>
      <div class="panel-body">
        <table cellpadding="0" cellspacing="0" class="panel panel-success">
            <tbody>
                  <tr>
                    <td id="description_id" ><?= nl2br($issue['fields']['description']) ?></td>
                </tr>
              </tbody>
        </table>
      </div>
    </div>
  <div>
  <h3>Comments</h3>
    <div class="panel-body">
      <table cellpadding="0" cellspacing="0" class="panel panel-success" id="allComments">
          <tbody id="commentAccordion">
                <?php foreach ($issue['fields']['comment']['comments'] as $comment): ?>
                  <tr class="commentHeader">
                      <td>
                        <?= 'By: ' . $comment['author']['displayName']  ?>
                       &nbsp&nbsp&nbsp
                       <?= 'Created: '. substr($comment['created'],0,10) . ' ' . substr($comment['created'],11,8)?>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?= nl2br($comment['body']) ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  </div>
    <div>
  <h3>Attachments</h3>
    <div class="panel-body">
      <table cellpadding="0" cellspacing="0" class="panel panel-success">
          <tbody>
                <tr>
                  <td id="attachment_key_id" > </td>
                </tr>
          </tbody>
      </table>
    </div>
  </div>
    <div>
  <h3>Related KBs/SOPs</h3>
    <div class="panel-body">
      <table cellpadding="0" cellspacing="0" class="panel panel-success">
          <tbody>
                <tr>
                  <td id="kbsop_key_id" > </td>
                </tr>
          </tbody>
      </table>
    </div>
</div>
</div>

<script>
$( function() {
  $( "#mainAccordion" ).accordion({
    header: "> div > h3",
    collapsible: true,
    animate: 300
  })
  .sortable({
    axis: "y",
    handle: "h3",
    stop: function( event, ui ) {
      // IE doesn't register the blur when sorting
      // so trigger focusout handlers to remove .ui-state-focus
      ui.item.children( "h3" ).triggerHandler( "focusout" );

      // Refresh accordion to handle new order
      $( this ).accordion( "refresh" );
    }
  });
  $('#openAll').click(function () {
       $('.ui-accordion-header').removeClass('ui-corner-all').addClass('ui-accordion-header-active ui-state-active ui-corner-top').attr({'aria-selected':'true','tabindex':'0'});
       $('.ui-accordion-header .ui-icon').removeClass('ui-icon-triangle-1-e').addClass('ui-icon-triangle-1-s');
       $('.ui-accordion-content').addClass('ui-accordion-content-active').attr({'aria-expanded':'true','aria-hidden':'false'}).show();
       $(this).hide();
       $('#closeAll').show();
   });
   $('#closeAll').click(function () {
       $('.ui-accordion-header').removeClass('ui-accordion-header-active ui-state-active ui-corner-top').addClass('ui-corner-all').attr({'aria-selected':'false','tabindex':'-1'});
       $('.ui-accordion-header .ui-icon').removeClass('ui-icon-triangle-1-s').addClass('ui-icon-triangle-1-e');
       $('.ui-accordion-content').removeClass('ui-accordion-content-active').attr({'aria-expanded':'false','aria-hidden':'true'}).hide();
       $(this).hide();
       $('#openAll').show();
   });
   $('.ui-accordion-header').click(function () {
       $('#openAll').show();
       $('#closeAll').show();
   });
} );
$( function() {
  $( "#commentAccordion" ).accordion({
    header: "> tr.commentHeader",
    collapsible: true,
    animate: 300
  });
} );


</script>
