<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory;
    use SoftDeletes, Notifiable;
    protected $dates = ['deleted_at'];

    public $incrementing = false;
    protected $keyType = 'string';
    protected $casts = [
        'type_candidat' => 'boolean',
        'type_com' => 'boolean',
        'created_at'  => 'datetime',
    ];
    
    protected $fillable = [
        'full_name',
        'type_candidat',
        'grade',
        'sexe',
        'email',
        'phone',
        'job',
        'country',
        'city',
        'affiliation',
        'type_com',
        'projet_file',
        'status',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($candidat) {
            $candidat->uuid = (string) Str::uuid();
        });
    }

}
