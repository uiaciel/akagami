<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function job()
    {
        return $this->belongsTo('App\Models\Job', 'job_id');
    }

    public function age()
    {
        return Carbon::parse($this->birth)->age;
    }

    public function ordercrew()
    {
        return $this->belongsTo('App\Models\Ordercrew', 'crew_id');
    }
}
