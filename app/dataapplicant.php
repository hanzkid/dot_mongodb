<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class dataapplicant extends Eloquent
{
    //
    protected $collection = '162_DataApplicant';

    public function applicationform(){
    	return $this->belongsTo('App\applicationform','application_form_id','_id');
    }
}
