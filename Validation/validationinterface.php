<?php

namespace Lily\Core\Validation;

interface validationinterface
{
    /**
     * Prepare the regular expression to validate data.
     */
    public function prepareRegexPattern();

    /**
     * @param $data mixed
     * Validates a given data against a regular expression
     */
    public function isValid($data);
}
