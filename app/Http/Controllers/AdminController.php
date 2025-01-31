<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Person;
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
				'name' => $fullName,
			];
		});
	
		return response()->json($datatable);
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
