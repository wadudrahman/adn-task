<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $table = 'advertises';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'start_from',
        'end_at',
        'total_budget',
        'daily_budget',
        'created_by',
        'updated_by'
    ];

    public function media()
    {
        return $this->hasMany(CreativeUpload::class, 'advertise_id', 'id');
    }
}
