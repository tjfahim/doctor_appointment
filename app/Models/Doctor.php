<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table='doctors';

    protected $fillable = ['department_id', 'name', 'phone','fee'];

    public function departments()
    {
        return $this->belongsTo(Department::class);
    }

}
