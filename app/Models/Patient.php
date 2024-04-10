<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'last_name', 'email', 'age', 'note'];

    public function consultations()
    {
        return $this->belongsTo(Consultation::class);
    }

    protected function name(): Attribute {

        return new Attribute(
            get: fn($value) => ucwords($value),
            set: function($value) {
                return strtolower($value);
            }
        );
    }

    protected function last_name(): Attribute {
        return new Attribute(
            set: function($value){
                return strtolower($value);
            }
        );
    }
}
