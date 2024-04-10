<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Consultation
 *
 * @property $id
 * @property $note
 * @property $date
 * @property $patient_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Patient $patient
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Consultation extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['note', 'date', 'patient_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient()
    {
        return $this->belongsTo(\App\Models\Patient::class, 'patient_id', 'id');
    }
    

}
