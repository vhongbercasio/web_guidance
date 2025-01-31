<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

	protected $table = 'person';
	protected $fillable = ['first_name', 'last_name', 'middle_name', 'img','date_input','gender_id','civil_status_id','birthdate','citizenship_id','mobile_number','address','place_of_birth','religion_id','email_address','survey_id','family_background_id','educational_background_id','other_survey_id','incase_of_emergency'];

}
