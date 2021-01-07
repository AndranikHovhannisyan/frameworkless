<?php
/**
 * Created by PhpStorm.
 * User: andranik
 * Date: 1/8/21
 * Time: 2:22 AM
 */

namespace App\Validator;

use App\Entity\PhoneBook;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

class CountryCodeValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof CountryCode) {
            throw new UnexpectedTypeException($constraint, CountryCode::class);
        }

        // custom constraints should ignore null and empty values to allow
        // other constraints (NotBlank, NotNull, etc.) to take care of that
        if (null === $value || '' === $value) {
            return;
        }

        if (!$value instanceof PhoneBook) {
            // throw this exception if your validator cannot handle the passed type so that it can be marked as invalid
            throw new UnexpectedValueException($value, 'PhoneBook');

            // separate multiple types using pipes
            // throw new UnexpectedValueException($value, 'string|int');
        }

        //TODO:: add corresponding checks for $value->getCountryCode()

//        if (!preg_match('/^[a-zA-Z0-9]+$/', $value, $matches)) {
            // the argument must be a string or an object implementing __toString()
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value->getCountryCode())
                ->addViolation();
//        }
    }
}
