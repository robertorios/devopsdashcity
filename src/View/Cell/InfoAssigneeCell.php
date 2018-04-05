<?php
namespace App\View\Cell;

use Cake\View\Cell;
use Cake\Network\Http\Client;
use Cake\Collection\Collection;

/**
 * MainInfo cell
 */
class InfoAssigneeCell extends Cell
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
    
    public function display($names = null)
    {
        $results =  $names;
                // $results =  array_values($names);

        $this->set('result', $results);
        $this->set('_serialize', ['result']);
    }
}