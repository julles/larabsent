<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    public $guarded = [];

    public function rules($id = '')
    {

    	if(!empty($id))
    	{

    		$uniqueNip = 'unique:employees,nip,'.$id;
    		$uniqueEmail = 'unique:employees,email,'.$id;

    	}else{

    		$uniqueNip = 'unique:employees';
    		$uniqueEmail = 'unique:employees';
    	
    	}

    	return [
    		'position_id' => 'required',
    		'nip' => 'required|'.$uniqueNip,
    		'phone' => 'max:15|numeric',
    		'email' => 'required|email|'.$uniqueEmail,
    	];
    }

    public function position()
    {
        return $this->belongsTo('App\Position' , 'position_id');
    }
}
