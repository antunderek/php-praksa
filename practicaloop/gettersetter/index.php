<?php

class Validator
{
    protected $errors = [];
    public function validate($data, $rules) 
    {
        $this->errors[] = 'The email is required.';
    }

    public function fails()
    {
        return !empty($this->errors);
    }

    public function getErrors() {
        return $this->errors;
    }
}

$validator = new Validator;
$validator->validate([''], ['required']);

if ($validator->fails()) {
    die('Fails');
}
