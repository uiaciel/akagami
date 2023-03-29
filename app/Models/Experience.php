<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function crew()
    {
        return $this->belongTo('App\Models\Crew');
    }

    public function job()
    {
        return $this->belongsTo('App\Models\Job', 'job_id');
    }

    public function shipname()
    {
        return $this->belongsTo('App\Models\Ship', 'vesselsname');
    }
}
