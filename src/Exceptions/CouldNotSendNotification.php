<?php

namespace Procionegobbo\L9SmsApi\Exceptions;

class CouldNotSendNotification extends \Exception
{
    public static function serviceRespondedWithAnError($message)
    {
        return new static($message);
    }
}
