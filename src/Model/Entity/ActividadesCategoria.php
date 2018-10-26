<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ActividadesCategoria Entity
 *
 * @property int $actividad_id
 * @property int $categoria_id
 *
 * @property \App\Model\Entity\Actividade $actividade
 * @property \App\Model\Entity\Categoria $categoria
 */
class ActividadesCategoria extends Entity
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
        'actividade' => true,
        'categoria' => true
    ];
}
