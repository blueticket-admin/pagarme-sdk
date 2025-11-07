<?php

namespace PagarMe\Exceptions;

final class PagarMeException extends \Exception
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $parameterName;

    /**
     * @var string
     */
    private $errorMessage;

    /**
     * @var string
     */
    private $errors;

    /**
     * @param string $type
     * @param string $parameterName
     * @param string $errorMessage
     */
    public function __construct($errors)
    {
        $this->errors = $errors;

        $exceptionMessage = $this->buildExceptionMessage();

        parent::__construct($exceptionMessage);
    }

    /**
     * @return string
     */
    private function buildExceptionMessage()
    {
        return json_encode($this->errors);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getParameterName()
    {
        return $this->parameterName;
    }

    /**
     * @return string
     */
    public function getErrors()
    {
        return $this->errors;
    }
}
