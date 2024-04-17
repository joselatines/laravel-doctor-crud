<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Patient
 *
 * @property $id
 * @property $name
 * @property $last_name
 * @property $email
 * @property $note
 * @property $age
 * @property $created_at
 * @property $updated_at
 *
 * @property Consultation[] $consultations
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Patient extends Model
{
    
    use HasFactory;
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'last_name', 'email', 'note', 'age'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultations()
    {
        return $this->hasMany(Consultation::class, 'id', 'patient_id');
    }
    

}
