<?php
/**
 * User: Maxime
 * Date: 15/12/2016
 */

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\RulesChecker;
use App\Model\Entity\Experience;

class ExperiencesTable extends Table
{

	public function initialize(array $config)
	{
		$this->table('experiences');
		$this->primaryKey('id');
		$this->entityClass(Experience::class);
	}

	public function buildRules(RulesChecker $rules)
	{
	}
}