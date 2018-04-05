<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jiraissue Entity
 *
 * @property float $id
 * @property string $pkey
 * @property float $issuenum
 * @property float $project
 * @property string $reporter
 * @property string $assignee
 * @property string $creator
 * @property string $issuetype
 * @property string $summary
 * @property string $description
 * @property string $environment
 * @property string $priority
 * @property string $resolution
 * @property string $issuestatus
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $updated
 * @property \Cake\I18n\Time $duedate
 * @property \Cake\I18n\Time $resolutiondate
 * @property float $votes
 * @property float $watches
 * @property float $timeoriginalestimate
 * @property float $timeestimate
 * @property float $timespent
 * @property float $workflow_id
 * @property float $security
 * @property float $fixfor
 * @property float $component
 *
 */
class Jiraissue extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
