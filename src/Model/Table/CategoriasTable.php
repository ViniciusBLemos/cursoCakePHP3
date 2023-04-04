<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categorias Model
 *
 * @property \App\Model\Table\PaginasTable&\Cake\ORM\Association\HasMany $Paginas
 *
 * @method \App\Model\Entity\Categoria get($primaryKey, $options = [])
 * @method \App\Model\Entity\Categoria newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Categoria[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Categoria|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categoria saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Categoria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Categoria[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Categoria findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CategoriasTable extends Table
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

        $this->setTable('categorias');
        $this->setDisplayField('titulo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Paginas', [
            'foreignKey' => 'categoria_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 250)
            ->requirePresence('titulo', 'create')
            ->notEmptyString('titulo');

        $validator
            ->scalar('url')
            ->maxLength('url', 250)
            ->requirePresence('url', 'create')
            ->notEmptyString('url');

        return $validator;
    }

    public function getCategoriaByUrl($url)
	{
		return $this->find()
    		->contain(['Paginas'])
    		->where(['Categorias.url'=>$url])
    		->first();
	}

	public function getMenu()
    {
    	return $this->find()
                ->select(['titulo', 'url'])
                ->all();
    }

}
