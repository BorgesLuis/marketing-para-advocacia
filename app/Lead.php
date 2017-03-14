<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'leads';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'categoria',
        'ip',
    ];

    protected $carbonDateFormat = 'd-m-y H:i:s';

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format($this->carbonDateFormat);
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format($this->carbonDateFormat);
    }
}
