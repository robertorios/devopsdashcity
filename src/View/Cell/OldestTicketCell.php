<?php
namespace App\View\Cell;

use Cake\View\Cell;
use Cake\Network\Http\Client;
use Cake\Collection\Collection;

/**
 * MainInfo cell
 */
class OldestTicketCell extends Cell
{
	public function display($names = null)
    {
    	// return debug($names);
     //    die;
    	$this->loadModel('T2Itops');
    	$query = $this->T2Itops->find()
    	->select(['assignee', 'created', 'issuenum', 'project_key', 'reporter', 'resolutiondate', 'priority'])
    	->where(['resolutiondate IS NULL'])
        ->order(['T2Itops.created' => 'ASC'])
        ->toArray();
        $oldest_tickets = array_slice($query, 0, 5);
        $format = 'YmdHis';
        foreach($oldest_tickets as $key => $value)
        {
            // $oldest_tickets[$key]['created'] = substr($oldest_tickets[$key]['created'], 0,8); 
            $oldest_tickets[$key]['created'] = date_format(\DateTime::createFromFormat($format, $oldest_tickets[$key]['created']), 'M d, Y'); 
        	foreach ($names as $nameKey => $nameValue) {
        	($oldest_tickets[$key]['assignee'] == $nameKey) ? $oldest_tickets[$key]['assignee'] = $nameValue:0;
        		// if ($oldest_tickets[$key]['assignee'] == $nameKey) {
        		// 	$oldest_tickets[$key]['assignee'] = $nameValue;
        		// }
        	}
        }

        $this->set('oldest_tickets', $oldest_tickets);
        $this->set('_serialize', ['oldest_tickets']);
        

//         $time = strtotime('10/16/2003');

// $newformat = date('Y-m-d',$time);

// echo $newformat;
// echo strtotime("now");
// echo date( "Y-m-d", strtotime( "2016-03-23"));
// echo date( "Ymd", strtotime( "20160323"));

// $a = dateTime( "Ymdhms", strtotime( "20160323090210"));

// $newformat = date('Y-m-d',$a);

// echo $newformat;


// $format = 'YmdHis';
// $date = \DateTime::createFromFormat($format, '20160323090210');
// echo date_format($date, 'M d, Y');
// echo $a;
        // return debug($names);
        // die;

    }
}