<?php

namespace Constraints;

use Symfony\Component\Validator\ConstraintValidator;
use Constraints\UniqueEntity;
use \symfony\Component\Validator\Constraint;
/**
 * Description of UniqueEntityValidator
 *
 * @author Etudiant
 */
class UniqueEntityValidator extends ConstraintValidator
{
    //put your code here
    public function validate($value, Constraint $constraint)
    {
        $field = $constraint->getField();
        $dao = $constraint->getDao();
        
        $entity = $dao->findOne(["$field = ?" => $value]);
        
        if($entity){
            $this->context->buildViolation($constraint->message)
                    ->setParameter('{{column}}', $field)
                    ->addViolation();
        }
    }

}
