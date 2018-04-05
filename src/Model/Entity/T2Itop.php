<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * T2Itop Entity
 *
 * @property string $assignee
 * @property string $component
 * @property string $created
 * @property string $duedate
 * @property string $issue_desc
 * @property string $issue_type
 * @property string $issuenum
 * @property string $item_type_desc
 * @property string $priority
 * @property string $project_desc
 * @property string $project_key
 * @property string $project_name
 * @property string $project_type
 * @property string $reporter
 * @property string $resolution_desc
 * @property string $resolution_type
 * @property string $resolutiondate
 * @property string $sequence
 * @property string $status_desc
 * @property string $status_type
 * @property string $_desc_substring
 * @property string $_resolve_days_taken
 * @property string $fme_rejection_code
 * @property string $geom
 * @property int $id
 */
class T2Itop extends Entity
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
