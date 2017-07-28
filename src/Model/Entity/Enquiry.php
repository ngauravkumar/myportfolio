<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enquiry Entity
 *
 * @property int $Enquiryid
 * @property string $Packageid
 * @property string $Name
 * @property string $Gender
 * @property string $Mobileno
 * @property string $Email
 * @property int $NoofDays
 * @property int $Child
 * @property int $Adults
 * @property string $Message
 * @property string $Statusfield
 */
class Enquiry extends Entity
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
        'Enquiryid' => false
    ];
}
