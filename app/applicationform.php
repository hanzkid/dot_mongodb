<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class applicationform extends Eloquent
{
        protected $collection = '162_ApplicationForm';
        public function dataapplicant(){
    		return $this->hasOne('App\dataapplicant','application_form_id','_id');
    	}
    	public function tenor(){
    		return $this->hasOne('App\tenor','application_form_id','_id');
    	}
    	public function emergency_contact(){
    		return $this->hasOne('App\emergency_contact','application_form_id','_id');
    	}
    	public function company(){
    		return $this->hasOne('App\company','application_form_id','_id');
    	}
    	public function qc(){
    		return $this->hasOne('App\qc','application_form_id','_id');
    	}

}
