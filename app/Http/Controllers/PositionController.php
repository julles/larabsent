<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Larabsent;
use Datatables;
use App\Position;
use Validator;

class PositionController extends Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Position;
    }

    public function getIndex()
    {
        return view('position.index');
    }

    public function getData()
    {
        $model = $this->model->select('id' , 'position');

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

        return view('position.form' ,  compact('model' , 'action'));
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

    public function getUpdate($id)
    {
        $model = $this->model->find($id);
        
        $action = 'Update';

        return view('position.form' ,  compact('model' , 'action'));
    }

    public function postUpdate(Request $request , $id)
    {
        $inputs = $request->all();

        $validation = Validator::make($inputs , $this->model->rules($id) , $this->model->messages());

        if($validation->fails())
        {
            return redirect()->back()->withInput()->withErrors($validation);
        }

        $this->model->find($id)->update($inputs);

        return redirect('position/index')->withMessage('Data has been updated!');
    }

    public function getDelete($id)
    {
        $model = $this->model->find($id);

        try
        {
            $model->delete();

            return redirect('position/index')->withMessage('Data has been deleted!');

        }catch(\Exception $e){
            
            return redirect('position/index')->withInfo('Data cannot be deleted!');

        }
    }
}
