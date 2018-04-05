<?php
namespace App\View\Cell;

use Cake\View\Cell;
use Cake\Network\Http\Client;

/**
 * MainInfo cell
 */
class TableChartCell extends Cell
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

      // return debug($result);
      // die;
      $this->set('result', $result);
        $this->set('_serialize', ['result']);
    }
}