<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InscriptionPassage Entity
 *
 * @property int $id
 * @property string $commentaire
 * @property int $passage_id
 * @property int $licencie_id
 * @property int $grade_presente_id
 * @property int $user_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Passage $passage
 * @property \App\Model\Entity\Licency $licency
 * @property \App\Model\Entity\User $user
 */
class InscriptionPassage extends Entity
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
