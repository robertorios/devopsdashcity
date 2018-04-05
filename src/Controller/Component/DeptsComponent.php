<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class DeptsComponent extends Component
{
    public function create_depts_array()
    {
        // return array('silvenis_b' => 'Brian Silvenis', => 'Ken Kitchen',  => 'Diedra Smith',  => 'Donald Tiller',  => 'Volney Farned',  => 'Mandi Scott',  => 'Nicole Fryar',  => 'Darryl Kyles',  => 'Roberto Rios',  => 'Jeremy Stakich',  => 'Chris Hurst',  => 'Darryl Sheppard',  => 'Thomas Cook',  => 'Craig Soborowicz',  => 'Jason Sewell',  => 'Joe Peel', 'tolliver_d' => 'Dan Tolliver' );
        // return debug($a);
        // die;
        return array('Apps'=>array('kitchen_ken', 'smith_diedra', 'tiller_don', 'farned_v', 'scott_a', 'fryar_n', 'kyles_d', 'rrios' ),'Network'=>array('churst', 'cook_t', 'csoborowicz', 'sewell_jason'),'Systems'=>array('jstakich', 'sheppard_d', 'jpeel'));
    }
}