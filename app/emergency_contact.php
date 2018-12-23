<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class emergency_contact extends Eloquent
{
    //
        protected $collection = '162_EmergencyContact';
        public function applicationform(){
    		return $this->belongsTo('App\applicationform','application_form_id','_id');
    	}
}
