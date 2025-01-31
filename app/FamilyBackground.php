<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FamilyBackground extends Model {

	protected $table = 'family_background';
	protected $fillable = ['person_id', 'no_brother', 'no_sister', 'father_name','mother_name','father_age','mother_age','father_address','mother_address','father_educational','mother_educational','father_occupation','mother_occupation','father_mobile','mother_mobile','family_background_id','educational_background_id','other_survey_id','incase_of_emergency'];

}
