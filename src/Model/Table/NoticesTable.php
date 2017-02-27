<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Notices Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Teachers
 *
 * @method \App\Model\Entity\Notice get($primaryKey, $options = [])
 * @method \App\Model\Entity\Notice newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Notice[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Notice|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Notice patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Notice[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Notice findOrCreate($search, callable $callback = null, $options = [])
 */
class NoticesTable extends Table
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

        $this->table('notices');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->belongsTo('Teachers', [
            'foreignKey' => 'teacher_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

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
        $rules->add($rules->existsIn(['teacher_id'], 'Teachers'));

        return $rules;
    }
}
