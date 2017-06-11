<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CombatPoule Entity.
 *
 * @property int $id
 * @property int $poule
 * @property int $ordre
 * @property int $licencie1
 * @property int $licencie2
 * @property string $resultat_rouge
 * @property string $resultat_blanc
 * @property int $vainqueur
 * @property int $competition_id
 * @property \App\Model\Entity\Competition $competition
 */
class CombatPoule extends Entity
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
        'id' => false,
    ];
}
