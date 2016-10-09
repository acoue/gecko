<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Licency Entity
 *
 * @property int $id
 * @property string $prenom
 * @property string $nom
 * @property \Cake\I18n\Time $sexe
 * @property string $ddn
 * @property int $licence
 * @property string $grade
 * @property int $club_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Club $club
 */
class Licency extends Entity
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
