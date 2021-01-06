<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function service_types(){
        return $this->belongsTo(ServiceType::class,'service_type_id');
    }

}
