<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';

    public $guarded = [];

    public function rules($id = '')
    {
    	if(!empty($id))
    	{
    	
    		$unique = 'unique:'.$this->table.',position,'.$id;
    	
    	}else{

    		$unique = 'unique:'.$this->table;

    	}

    	return [

    		'position' => 'required|max:255|'.$unique ,

    	];
    }

    public function messages()
    {
    	return [

    		'position.required' => 'Position Tidak Boleh Kosong!',
    		'position.unique' => 'Position Tersebut sudah ada!',

    	];
    }
}
