<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jury Entity
 *
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property int $grade_id
 * @property int $actif
 *
 * @property \App\Model\Entity\Grade $grade
 * @property \App\Model\Entity\Juge[] $juges
 */
class Jury extends Entity
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
