<?php

namespace App\Models;

use App\Traits\CustomTimestamps;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    use HasFactory,CustomTimestamps;
    protected $fillable = [
        'title',
        'document',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];

    public function getCreatedAtFormattedAttribute(){
        return Carbon::parse($this->created_at)->format('d-m-Y H:i');
    }

    public function getDocumentUrlAttribute()
    {
        return config('constants.SOLUTION_DOC_URL').$this->document;
    }
}
