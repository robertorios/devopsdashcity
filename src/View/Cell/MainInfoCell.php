<?php
namespace App\View\Cell;

use Cake\View\Cell;
use Cake\Network\Http\Client;

/**
 * MainInfo cell
 */
class MainInfoCell extends Cell
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
     * @param string|null $issueKey Issue Key.
     * @return void
     */
    public function display($issueKey = null)
    {
      // Build API call
      $fullApi = 'https://itops.chattanooga.gov/rest/api/latest/issue/'.$issueKey.
                '?fields=key,summary,priority,status,components,description,comment,attachments';

      // Send API call and receive response
      $http = new Client();
      $response = $http->get($fullApi, [], [
                      'auth' => ['username' => 'ITOPSAPI', 'password' => '?Ch@ttG0v17!']
                  ]);
      $issue = $response->json;   //Returns formatted as an array

      // Set API response to template variable
      $this->set('issue',$issue);
      $this->set('_serialize', ['issue']);
    }
}
