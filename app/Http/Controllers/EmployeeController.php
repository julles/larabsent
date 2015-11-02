<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Employee;
use Larabsent;
use Datatables;
use App\Position;

class EmployeeController extends Controller
{
	public $model;

	public function __construct()
	{
		$this->model = new Employee;
		$this->positions = ['' => 'Select Position'] + Position::lists('position' , 'id')->toArray(); 
	}

    public function getIndex()
    {
        return view('employee.index');
    }

    public function getData()
    {
        $model = $this->model->join('positions' ,'positions.id' , '=' , 'employees.position_id')

        ->select(['employees.id' , 'positions.position' , 'employees.name' , 'employees.email' , 'employees.nip']);

        return Datatables::of($model)

        ->addColumn('action' , function($model){

           $edit =  '<a class = "btn btn-primary" href = "'.url('position/update/'.$model->id).'">Update</a>';
           $delete =  '<a onclick = "return confirm(\'anda yakin menghapus data ini ?\')" class = "btn btn-danger" href = "'.url('position/delete/'.$model->id).'">Delete</a>';

           return $edit.' '.$delete;
        })

        ->make('true');

    }

    public function getCreate()
    {
        $model = $this->model;
        
        $action = 'Create';

        $positions = $this->positions; 

        return view('employee.form' ,  compact('model' , 'action' ,'positions'));
    }

    public function postCreate(Request $request)
    {
        $inputs = $request->all();

        $validation = Validator::make($inputs , $this->model->rules() , $this->model->messages());

        if($validation->fails())
        {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $this->model->create($inputs);

        return redirect('position/index')->withMessage('Data has been saved!');
    }
}
