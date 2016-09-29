<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Palmare Entity
 *
 * @property int $id
 * @property string $competition
 * @property string $lieux
 * @property \Cake\I18n\Time $date_competition
 * @property string $resultat
 * @property string $commentaire
 * @property int $licencie_id
 *
 * @property \App\Model\Entity\Licency $licency
 */
class Palmare extends Entity
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
