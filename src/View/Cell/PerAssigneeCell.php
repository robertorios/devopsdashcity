<?php
namespace App\View\Cell;

use Cake\View\Cell;
use Cake\Network\Http\Client;
use Cake\Collection\Collection;

/**
 * MainInfo cell
 */
class PerAssigneeCell extends Cell
{
	public function display($names = null)
    {
    	 $this->loadModel('T2Itops');

        $t2Itops = $this->T2Itops->find('all')
        ->select(['assignee','created', 'issue_desc', 'issuenum', 'reporter', 'priority'])
        ->where(['resolutiondate IS NULL'])
        ->order(['T2Itops.created' => 'ASC'])
        ->toArray();
        $format = 'YmdHis';
        foreach($t2Itops as $key => $value)
        {
        	foreach ($names as $nameKey => $nameValue) {
        	($t2Itops[$key]['assignee'] == $nameKey) ? $t2Itops[$key]['assignee'] = $nameValue:0;
        	}
        	$t2Itops[$key]['created'] = date_format(\DateTime::createFromFormat($format, $t2Itops[$key]['created']), 'M d, Y'); 
        }
        $results =  $this->process($t2Itops);
        $this->set('result', $results);
        $this->set('_serialize', ['result']);
    }

    public function process($t2Itops = null)
    {
    	$collection = new Collection($t2Itops);
    	$per_devops = $collection->groupBy('assignee');
    	return $this->new_array($per_devops);
    }
 	
 	private function sortbyorder ($b, $a)
	{
    	return $a['number_of_tickets'] - $b['number_of_tickets'];
	}

    private function sortbyorder1 ($a, $b)
    {
        return $a['priority'] - $b['priority'];
    }
    
    public function new_array($per_devops = null, $color = null, $bordercolor = null)
    {
    	foreach($per_devops as $key => $value)
        {
            if (sizeof($value) > 7) {
            	$color = '#F30505';
                $bordercolor = '#F58E8E';
            }
            if (sizeof($value) == 7) {
            	$color = '#D9E133';
                $bordercolor = '#F0F76F';
            }
            if (sizeof($value) < 7) {
            	$color = '#40AB23';
                $bordercolor = '#7AD262';
            }
            $new[$key] = array('name'=> $key . ' ' . '(' .sizeof($value) . ')', 'number_of_tickets' => sizeof($value)	, 'color' => $color, 'bordercolor' => $bordercolor, 'data' => $value);
        }
        usort($new, array($this, "sortbyorder"));

        foreach ($new as $key => $value) {
            usort($new[$key]['data'], array($this, "sortbyorder1"));            
            // $collection = new Collection($new[$key]['data']);
            // $new[$key]['data'] = $colection->sortbyorder('priority')->toArray();
            // $new[$key]['data'] = $collection->groupBy('priority')->toArray();
        }

        // return debug($new);
        // die;
    	return $new;
    }
    
   


}