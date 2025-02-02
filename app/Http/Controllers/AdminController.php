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



		return view('admin.student_pds',compact('religion_list','citizenship_list','civil_status_list','person','famiy_background','education_background','other_survey','survey', 'person_id' ));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function studenPDF(Request $request)
	{
		//

		$student_id = \Request::get('student_id');
		

		// dd($student_id);
		$student = Person::leftJoin('gender', 'person.gender_id', '=', 'gender.id')
		->leftJoin('civil_status', 'person.civil_status_id', '=', 'civil_status.id')
		->leftJoin('citizenship', 'person.citizenship_id', '=', 'citizenship.id')
		->leftJoin('religion', 'person.religion_id', '=', 'religion.id')
		->leftJoin('family_background', 'person.family_background_id', '=', 'family_background.person_id')
		->leftJoin('educational_background', 'person.educational_background_id', '=', 'educational_background.person_id')
		->leftJoin('other_survey', 'person.other_survey_id', '=', 'other_survey.person_id')
		->leftJoin('survey', 'person.survey_id', '=', 'survey.person_id') // Fixed spacing
		->where('person.id', $student_id)
		->select([
			'person.first_name',
			'person.last_name',
			'person.middle_name',
			'gender.name as gender',
			'civil_status.civil_status_name',
			'person.mobile_number',
			'citizenship.citizenship_name',
			'person.address',
			'person.place_of_birth',
			'religion.religion_name',
			'survey.*',
			// 'survey.working_student',
			// 'survey.guardian',
			// 'survey.scholar',
			// 'survey.sponsor',
			// 'survey.single_parent',
			// 'survey.married',
		])
		->first(); // Use first() instead of get() if expecting one record



	

dd($student);


		// $student = Person::join('gender', 'person.gender_id', '=', 'gender.id')
		// 		// ->join('civil_status', 'person.civil_status_id', '=', 'civil_status.id')
		// 		// ->join('citizenship', 'person.citizenship_id', '=', 'citizenship.id')
		// 		// ->join('religion', 'person.religion_id', '=', 'religion.id')
		// 		// ->join('family_background', 'person.family_background_id', '=', 'family_background.person_id')
		// 		// ->join('educational_background', 'person.educational_background_id', '=', 'educational_background.person_id')
		// 		// ->join('other_survey', 'person.other_survey_id', '=', 'other_survey.person_id')
		// 		->where('person.id', $student_id )
		// 		->select('person.first_name')
		// 		->get();
	// dd($student);

		$pdf = \PDF::loadView('pdf/index', compact('resultsCertificate', 'currentDate', 'school_department' ,'term_value'))
			->setPaper('A4', 'portrait');

	
		return $pdf->stream();   
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
