<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PrimerMayuscula implements Rule
{

    public function passes($attribute, $value)
    {
        return ucfirst($value)  === $value;
    }

    
    public function message()
    {
        return 'Este campo :attribute debe estar en mayuscula.';
    }
    
}
