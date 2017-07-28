<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Package Entity
 *
 * @property int $Packid
 * @property string $Packname
 * @property int $Category
 * @property int $Subcategory
 * @property int $Packprice
 * @property string $Pic1
 * @property string $Pic2
 * @property string $Pic3
 * @property string $Detail
 */
class Package extends Entity
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
        'Packid' => false
    ];
}
