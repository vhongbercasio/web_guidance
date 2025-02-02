<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model {

	
	protected $table = 'survey';
	protected $fillable = ['person_id','working_student','guardian','scholar','sponsor','single_parent','children','married'];

}
