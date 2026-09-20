<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ComplaintResponse extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'complaint_id',
        'staff_id',
        'comment',
    ];
}
