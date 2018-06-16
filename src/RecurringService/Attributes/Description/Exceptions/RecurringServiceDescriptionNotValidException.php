<?php

namespace Railken\LaraOre\RecurringService\Attributes\Description\Exceptions;

use Railken\LaraOre\RecurringService\Exceptions\RecurringServiceAttributeException;

class RecurringServiceDescriptionNotValidException extends RecurringServiceAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'description';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'RECURRINGSERVICE_DESCRIPTION_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
