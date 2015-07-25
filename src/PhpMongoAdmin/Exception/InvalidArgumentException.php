<?php
namespace PhpMongoAdmin\Exception;

use PhpMongoAdmin\Base\HttpException;

class InvalidArgumentException extends HttpException {
    public function __construct($message = "") {
        return parent::__construct($message, 440);
    }
}