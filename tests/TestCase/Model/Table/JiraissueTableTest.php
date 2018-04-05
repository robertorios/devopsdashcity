<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JiraissueTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JiraissueTable Test Case
 */
class JiraissueTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JiraissueTable
     */
    public $Jiraissue;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.jiraissue',
        'app.workflows'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Jiraissue') ? [] : ['className' => 'App\Model\Table\JiraissueTable'];
        $this->Jiraissue = TableRegistry::get('Jiraissue', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jiraissue);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
