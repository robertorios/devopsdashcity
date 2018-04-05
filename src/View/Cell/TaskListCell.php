<?php
namespace App\View\Cell;

use Cake\View\Cell;
use Cake\Network\Http\Client;

/**
 * TaskList cell
 */
class TaskListCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {

      // Build API call
      $apiStart = 'https://itops.chattanooga.gov/rest/api/latest/search';
      $apiMax = '?maxResults=100';
      $apiJql = '&jql=issuetype%20%3D%20%22Tier%20Two%22%20AND%20resolution%20%3D%20Unresolved%20AND%20assignee%20in%20(dsmith%2C%20dtiller%2C%20EMPTY)';
      $apiSort = '%20order%20by%20assignee';
      $apiFields = '&fields=key,summary,assignee';
      $fullApi = $apiStart . $apiMax . $apiJql . $apiSort . $apiFields;

      // Send API call and receive response
      $http = new Client();
      $response = $http->get($fullApi, [], [
                      'auth' => ['username' => 'ITOPSAPI', 'password' => '?Ch@ttG0v17!']
                  ]);
      $json = $response->json;   //Returns formatted as an array
      $issues = $json['issues']; // Skip the first couple of fields, start with the recurring Issues array

      // Set API response to template variable
      $this->set('issues',$issues);
      $this->set('_serialize', ['issues']);

    }
}
