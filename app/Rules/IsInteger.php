<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IsInteger implements Rule
{

    public $esEntero = false;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (is_int($value) || is_numeric($value)) {
            $this->esEntero = true;
        }
        return  $this->esEntero;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        if (!$this->esEntero) {
            return 'El :attribute debe es ser un numero entero.';
        }
    }
}
