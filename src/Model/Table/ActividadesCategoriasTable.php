<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ActividadesCategorias Model
 *
 * @property \App\Model\Table\ActividadesTable|\Cake\ORM\Association\BelongsTo $Actividades
 * @property \App\Model\Table\CategoriasTable|\Cake\ORM\Association\BelongsTo $Categorias
 *
 * @method \App\Model\Entity\ActividadesCategoria get($primaryKey, $options = [])
 * @method \App\Model\Entity\ActividadesCategoria newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ActividadesCategoria[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ActividadesCategoria|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ActividadesCategoria|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ActividadesCategoria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ActividadesCategoria[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ActividadesCategoria findOrCreate($search, callable $callback = null, $options = [])
 */
class ActividadesCategoriasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('actividades_categorias');
        $this->setDisplayField('actividad_id');
        $this->setPrimaryKey(['actividad_id', 'categoria_id']);

        $this->belongsTo('Actividades', [
            'foreignKey' => 'actividad_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Categorias', [
            'foreignKey' => 'categoria_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['actividad_id'], 'Actividades'));
        $rules->add($rules->existsIn(['categoria_id'], 'Categorias'));

        return $rules;
    }
}
