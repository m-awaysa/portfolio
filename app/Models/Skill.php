<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;


    protected $fillable = [
    
        'skill_name',
        'skill_level',
        'visibility',
       
       
    ];
    public function projects()
    {
              return $this->BelongsToMany(Project::class);
    
    }
     
    
}
