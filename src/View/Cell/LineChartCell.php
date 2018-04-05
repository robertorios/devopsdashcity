<?php
namespace App\View\Cell;

use Cake\View\Cell;
use Cake\Network\Http\Client;
use Cake\Collection\Collection;

/**
 * MainInfo cell
 */
class LineChartCell extends Cell
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
    
    public function display($result = null)
    {

        $this->loadModel('T2Itops');

        $t2Itops90 = $this->T2Itops->find('all')
        ->where(['T2Itops.created >=' => date('YmdHis', strtotime('-90 days'))])
        ->order(['T2Itops.created' => 'ASC'])
        ->toArray();

        $t2Itops30 = $this->T2Itops->find('all')
        ->where(['T2Itops.created >=' => date('YmdHis', strtotime('-30 days'))])
        ->order(['T2Itops.created' => 'ASC'])
        ->toArray();

        $t2Itops10 = $this->T2Itops->find('all')
        ->where(['T2Itops.created >=' => date('YmdHis', strtotime('-10 days'))])
        ->order(['T2Itops.created' => 'ASC'])
        ->toArray();

        // ->limit(10);
        $results =  $this->process($t2Itops90, $t2Itops30, $t2Itops10);
        $this->set('result', $results);
        $this->set('_serialize', ['result']);
        // return debug($unresolved);
        // die;

    }

    public function process($t2Itops90 = null, $t2Itops30 = null, $t2Itops10= null)
    {
        $arrays = array($this->data_processing($t2Itops90), $this->data_processing($t2Itops30), $t2Itops10);
        return $arrays;
    }

    public function data_processing($t2Itops = null)
    { 
        foreach($t2Itops as $key => $value)
        {
            $t2Itops[$key]['created'] = substr($t2Itops[$key]['created'], 4,2); 
        }
        $collection = new Collection($t2Itops);
        $resolved = $collection->match(['resolution_type' => 'Completed']);
        $all_tickets = $this->grouping($collection);
        $resolved_tickets = $this->grouping($resolved);
        $open_tickets = sizeof($t2Itops)-array_sum((array_values($resolved_tickets)));
        $array = array($all_tickets, $resolved_tickets, $open_tickets);
        return $array;
    }

    public function grouping($collection = null){
        // $ticketsbydate = $collection->groupBy('created');
        $grouped = $collection->countBy('created');
        return $this->convertmonth($grouped->toArray());
    }

    public function convertmonth($grouped = null)
    {
        $months_array = ['January' => '1', 'February' => '2', 'March' => '3', 'April' => '4', 'May' => '5', 'June' => '6', 'July' => '7', 'August' => '8' , 'September' => '9', 'October' => '10', 'November' => '11', 'December' => '12'];
        // $months = new Collection($months_array);
            foreach( $grouped as $key1 => $value1)
            {
                $new = array_search($key1, $months_array);
                $grouped[$new] = $grouped[$key1];
                unset($grouped[$key1]);
            }
            return $grouped;
    }
}