<?php namespace App\Http\Controllers;

use App\Citizenship;
use App\CivilStatus;
use App\EducationalBackground;
use App\FamilyBackground;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OtherSurvey;
use App\Person;
use App\Religion;
use App\Survey;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.index');
	}

	public function getStudentPds()
	{
		$students = Person::join('users','person.id','=','users.person_id')
		->where('users.role','student')
		->orderBy('person.last_name','asc')
		->select('person.id as person_id', 'first_name','middle_name','last_name')->get();
		
		$datatable = $students->map(function ($student) {
			$fullName = $student->first_name . ' ' . $student->middle_name . ' ' . $student->last_name;
			return [
				'name' => '<a data-person_id="'.$student->person_id.'" title="Click to view details" style="text-decoration: underline; cursor: pointer; color: #4620b1 !important;" class="viewDetail">'.$fullName.'</a>',
			];
		});
	
		return response()->json($datatable);
	}

	public function getStudentProfile()
	{
		$person_id = \Request::get('person_id');

		$person = Person::find($person_id);

		$religion_list = Religion::all();
		$citizenship_list = Citizenship::all();
		$civil_status_list = CivilStatus::all();

		$famiy_background = FamilyBackground::where('person_id', $person->id)->first();
		$education_background = EducationalBackground::where('person_id', $person->id)->first();
		$survey = Survey::where('person_id', $person->id)->first();
		$other_survey = OtherSurvey::where('person_id', $person->id)->first();
		// dd($education_background);



		return view('admin.student_pds',compact('religion_list','citizenship_list','civil_status_list','person','famiy_background','education_background','other_survey','survey'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
