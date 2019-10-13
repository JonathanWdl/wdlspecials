<?php
namespace JonathanWdl\Wdlspecials\Validation\Validator;

use TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator;
use JonathanWdl\Wdlspecials\Domain\Model\WdlSpecials;

class WdlSpecialsValidator extends AbstractValidator {
    protected function isValid( $special ) {
        if ( ! $special instanceof WdlSpecials ) {
            $this->addError( 'The given object is not a Special.', time());
            return;
        }
        if ( $special->getSpecialStart() > $special->getSpecialStop() ) {
            $this->addError( 'The special start must not be greater than the special stop', time());
        }
    }
}