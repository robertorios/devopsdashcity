<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JiraissueFixture
 *
 */
class JiraissueFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'jiraissue';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'decimal', 'length' => 18, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'pkey' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'issuenum' => ['type' => 'decimal', 'length' => 18, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'project' => ['type' => 'decimal', 'length' => 18, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'reporter' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'assignee' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'creator' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'issuetype' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'summary' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'description' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'environment' => ['type' => 'text', 'length' => null, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'priority' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'resolution' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'issuestatus' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'updated' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'duedate' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'resolutiondate' => ['type' => 'timestamp', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'votes' => ['type' => 'decimal', 'length' => 18, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'watches' => ['type' => 'decimal', 'length' => 18, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'timeoriginalestimate' => ['type' => 'decimal', 'length' => 18, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'timeestimate' => ['type' => 'decimal', 'length' => 18, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'timespent' => ['type' => 'decimal', 'length' => 18, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'workflow_id' => ['type' => 'decimal', 'length' => 18, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'security' => ['type' => 'decimal', 'length' => 18, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'fixfor' => ['type' => 'decimal', 'length' => 18, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'component' => ['type' => 'decimal', 'length' => 18, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null],
        '_indexes' => [
            'issue_proj_num' => ['type' => 'index', 'columns' => ['issuenum', 'project'], 'length' => []],
            'issue_proj_status' => ['type' => 'index', 'columns' => ['project', 'issuestatus'], 'length' => []],
            'issue_reporter' => ['type' => 'index', 'columns' => ['reporter'], 'length' => []],
            'issue_assignee' => ['type' => 'index', 'columns' => ['assignee'], 'length' => []],
            'issue_updated' => ['type' => 'index', 'columns' => ['updated'], 'length' => []],
            'issue_workflow' => ['type' => 'index', 'columns' => ['workflow_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1.5,
            'pkey' => 'Lorem ipsum dolor sit amet',
            'issuenum' => 1.5,
            'project' => 1.5,
            'reporter' => 'Lorem ipsum dolor sit amet',
            'assignee' => 'Lorem ipsum dolor sit amet',
            'creator' => 'Lorem ipsum dolor sit amet',
            'issuetype' => 'Lorem ipsum dolor sit amet',
            'summary' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'environment' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'priority' => 'Lorem ipsum dolor sit amet',
            'resolution' => 'Lorem ipsum dolor sit amet',
            'issuestatus' => 'Lorem ipsum dolor sit amet',
            'created' => 1491501469,
            'updated' => 1491501469,
            'duedate' => 1491501469,
            'resolutiondate' => 1491501469,
            'votes' => 1.5,
            'watches' => 1.5,
            'timeoriginalestimate' => 1.5,
            'timeestimate' => 1.5,
            'timespent' => 1.5,
            'workflow_id' => 1.5,
            'security' => 1.5,
            'fixfor' => 1.5,
            'component' => 1.5
        ],
    ];
}
