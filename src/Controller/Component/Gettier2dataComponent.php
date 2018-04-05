<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Network\Http\Client;

class Gettier2dataComponent extends Component
{
    // private $Controller;
    // public function initialize($controller)
    // {
    //   $this->Home = $controller;
    // }

    public function apicall($issueKey = null)
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
          // echo $issueKey;
        }
        // $this->Home->set('issueKey',$issueKey);
        return $issueKey;
    }
}
 

