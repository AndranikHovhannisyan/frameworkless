<?php
/**
 * Created by PhpStorm.
 * User: andranik
 * Date: 1/8/21
 * Time: 2:23 AM
 */

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

class CountryCode extends Constraint
{
    public $message = ' "{{ string }}" is invalid country code.';
}
