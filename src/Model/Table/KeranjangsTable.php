<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Keranjangs Model
 *
 * @property &\Cake\ORM\Association\BelongsTo $Barangs
 *
 * @method \App\Model\Entity\Keranjang get($primaryKey, $options = [])
 * @method \App\Model\Entity\Keranjang newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Keranjang[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Keranjang|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Keranjang saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Keranjang patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Keranjang[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Keranjang findOrCreate($search, callable $callback = null, $options = [])
 */
class KeranjangsTable extends Table
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

        $this->setTable('keranjangs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Barangs', [
            'foreignKey' => 'barang_id',
            'joinType' => 'INNER'
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
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->integer('qty')
            ->requirePresence('qty', 'create')
            ->notEmptyString('qty');

        $validator
            ->scalar('catatan_pembeli')
            ->maxLength('catatan_pembeli', 250)
            ->requirePresence('catatan_pembeli', 'create')
            ->notEmptyString('catatan_pembeli');

        return $validator;
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
        $rules->add($rules->existsIn(['barang_id'], 'Barangs'));

        return $rules;
    }
}
