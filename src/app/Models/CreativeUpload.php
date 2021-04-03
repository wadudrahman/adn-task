<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreativeUpload extends Model
{
    use HasFactory;

    protected $table = 'creative_uploads';

    protected $primaryKey = 'id';

    protected $fillable = [
        'path',
        'advertise_id'
    ];
}
