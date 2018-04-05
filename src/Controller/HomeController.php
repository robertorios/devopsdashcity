<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Http\Client;

/**
 * Home Controller
 *
 * @property \App\Model\Table\HomeTable $Home
 */
class HomeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */


    public function index($result = null)
    {
        $result =  $this->Gettier2data->apicall();
        $this->set('results',$result);
        // debug($result[0]);

    }

    public function dashboard($issueKey = null)
      {
        // Default to first issue on task list if no issue key passed in
        if (null == $issueKey) {
          // Build API call
          $apiStart = 'https://itops.chattanooga.gov/rest/api/latest/search';
          $apiMax = '?maxResults=100';
          $apiJql = '&jql=issuetype%20%3D%20%22Tier%20Two%22%20AND%20resolution%20%3D%20Unresolved%20AND%20assignee%20in%20(dsmith%2C%20dtiller%2C%20EMPTY)';
          $apiSort = '%20order%20by%20assignee';
          $fullApi = $apiStart . $apiMax . $apiJql . $apiSort;
          // echo $fullApi;
          // Send API call and receive response
          $http = new Client();
          $response = $http->get($fullApi, [], [
                          'auth' => ['username' => 'ITOPSAPI', 'password' => '?Ch@ttG0v17!']
                      ]);
          $json = $response->json;   //Returns formatted as an array
          $issues = $json['issues']; // Skip the first couple of fields, start with the recurring Issues array
          $issueKey = $issues[0]['key'];
          return $issueKey;
      }
        // $this->set('issueKey',$issueKey);
      }
    
}
