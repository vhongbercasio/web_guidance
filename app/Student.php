<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

	protected $table = 'student';
	protected $fillable = ['person_id', 'gen_user_id', 'student_no', 'student_curriculum_id'];

}
