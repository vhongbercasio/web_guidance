<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherSurvey extends Model {

	protected $table = 'other_survey';
	protected $fillable = ['person_id','easiest_sub','most_difficult_sub','sub_with_lowest','sub_with_highest','plan_after_hs','awards'];

}
