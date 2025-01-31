<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationalBackground extends Model {

	protected $table = 'educational_background';
	protected $fillable = ['person_id','elem_school','elem_subject_like','elem_subject_not_like','jhs_school','jhs_subject_like','jhs_subject_not_like','g11_school','g11_subject_like','g11_subject_not_like','g12_school','g12_subject_like','g12_subject_not_like','college_school','college_subject_like','college_subject_not_like'];

}
