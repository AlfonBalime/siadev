<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelModule extends Model
{
    protected $primaryKey = 'id_module';
    protected $table = 'modules';
    protected $keyType = 'string';
    public $incrementing = false;

    // Module.php
    protected $fillable = ['id_module', 'module_name', 'description', 'module_key'];


    // Relationship with users through student_modules_roles
    public function users()
    {
        return $this->belongsToMany(ModelUser::class, 'student_modules_roles', 'module_id', 'user_id')
            ->withPivot('role_id', 'expired_date')
            ->withTimestamps();
    }


    // Relationship with roles if needed
    public function roles()
    {
        return $this->belongsToMany(ModelRole::class, 'student_modules_roles', 'module_id', 'role_id')
            ->withPivot('expired_date');
    }
}
