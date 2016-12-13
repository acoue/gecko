<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Competition Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\Time $date_competition
 * @property string $lieux
 * @property string $description
 * @property int $type
 * @property int $selected
 * @property int $archive
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $categorie_id
 * @property int $region_id
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Region $region
 * @property \App\Model\Entity\CombatPoule[] $combat_poules
 * @property \App\Model\Entity\InscriptionCompetition[] $inscription_competitions
 * @property \App\Model\Entity\Repartition[] $repartitions
 * @property \App\Model\Entity\ResultatPoule[] $resultat_poules
 * @property \App\Model\Entity\Tirage[] $tirages
 */
class Competition extends Entity
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
