<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidates extends Model
{
	use SoftDeletes;
	
    protected $fillable = ['name','email','phone_number','motivation','linkedin_url','github_url','english_level','wage_cents','attachment_path'];
    protected $guarded = ['id', 'created_at', 'update_at', 'deleted_at'];
    protected $table = 'candidates';
}
