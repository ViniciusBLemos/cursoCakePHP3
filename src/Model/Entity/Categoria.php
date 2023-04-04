<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Inflector;

/**
 * Categoria Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $url
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Pagina[] $paginas
 */
class Categoria extends Entity
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
        'titulo' => true,
        'url' => true,
        'created' => true,
        'modified' => true,
        'paginas' => true
    ];

    public function _setTitulo($titulo)
    {
        $this->set('url', strtolower(Inflector::slug($titulo)));
        return $titulo;
    }

    public function _setUrl($url)
    {
        return strtolower(Inflector::slug($url));
    }
}
