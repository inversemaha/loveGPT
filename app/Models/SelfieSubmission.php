<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelfieSubmission extends Model
{
    use HasFactory;
    public $timestamps=true;
    protected $guarded=[];
    public function votes(){
        return $this->hasMany(SelfieVote::class, 'selfie_id');
    }
}
