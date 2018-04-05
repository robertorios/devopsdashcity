<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Http\Client;

/**
 * Jiraissue Controller
 *
 * @property \App\Model\Table\JiraissueTable $Jiraissue
 */
class JiraissueController extends AppController
{
      public function dashboard($issueKey = null)
      {
        // Default to first issue on task list if no issue key passed in
        if (null == $issueKey) {
          // Build API call
          $apiStart = 'https://itops.chattanooga.gov/rest/api/latest/search';
          $apiMax = '?maxResults=100';
          $apiJql = '&jql=issuetype%20%3D%20%22Tier%20Two%22%20AND%20resolution%20%3D%20Unresolved%20AND%20assignee%20in%20(dsmith%2C%20dtiller%2C%20EMPTY)';
          $apiSort = '%20order%20by%20assignee';
          $apiFields = '&fields=key';
          $fullApi = $apiStart . $apiMax . $apiJql . $apiSort . $apiFields;

          // Send API call and receive response
          $http = new Client();
          $response = $http->get($fullApi, [], [
                          'auth' => ['username' => 'ITOPSAPI', 'password' => '?Ch@ttG0v17!']
                      ]);
          $json = $response->json;   //Returns formatted as an array
          $issues = $json['issues']; // Skip the first couple of fields, start with the recurring Issues array
          $issueKey = $issues[0]['key'];
      }
        $this->set('issueKey',$issueKey);
      }
}
