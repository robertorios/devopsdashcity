<?php
namespace App\View\Cell;

use Cake\View\Cell;
use Cake\Network\Http\Client;
use Cake\Collection\Collection;

/**
 * MainInfo cell
 */
class DeptPieCell extends Cell
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
    
    public function display($dept = null)
    {
        $this->loadModel('T2Itops');
        $query = $this->T2Itops->find()
        ->select(['assignee'])
        ->where(['resolutiondate IS NULL'])
        ->toArray();  

        $apps = 0; 
        $network = 0;
        $systems = 0;     

        foreach ($query as $key => $value) {
            if (in_array($query[$key]['assignee'], $dept['Apps'])) {
                $apps++;
                continue;
            }
            if (in_array($query[$key]['assignee'], $dept['Network'])) {
                $network++;
                continue;
            }
            if (in_array($query[$key]['assignee'], $dept['Systems'])) {
                $systems++;
                continue;
            }
        }

        $results =  array('apps' => $apps, 'network' => $network, 'systems' => $systems);
        $this->set('result', $results);
        $this->set('_serialize', ['result']);
        // return debug($systems);
        // die;
    }
}