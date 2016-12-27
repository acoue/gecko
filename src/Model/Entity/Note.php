<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Note Entity
 *
 * @property int $id
 * @property int $passage_id
 * @property int $licencie_id
 * @property int $juge_id
 * @property int $resultat_technique
 * @property int $resultat_kata
 * @property int $resultat_passage
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Passage $passage
 * @property \App\Model\Entity\Licency $licency
 * @property \App\Model\Entity\Juge $juge
 */
class Note extends Entity
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
