<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\T2ItopsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\T2ItopsTable Test Case
 */
class T2ItopsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\T2ItopsTable
     */
    public $T2Itops;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.t2_itops'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('T2Itops') ? [] : ['className' => 'App\Model\Table\T2ItopsTable'];
        $this->T2Itops = TableRegistry::get('T2Itops', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->T2Itops);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
