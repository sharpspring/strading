<?php
namespace Gajus\Strading;

/**
 * @link https://github.com/gajus/strading for the canonical source repository
 * @license https://github.com/gajus/strading/blob/master/LICENSE BSD 3-Clause
 */
class Error {
    private
        $code,
        $message,
        $data;
    
    /**
     * @param int $code
     * @param string $message
     * @param string $data
     */
    public function __construct ($code, $message, $data) {
        $this->code = (int)$code;
        $this->message = $message;
        $this->data = $data;
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message} {$this->data}\n";
    }
    
    /**
     * @return int
     */
    public function getCode () {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getMessage () {
        return $this->message;
    }

    /**
     * This tag contains one or more child elements. If the error code is "30000" (Field Error)
     * then this field will contain the field (or fields) which caused the error.
     * 
     * @todo https://github.com/gajus/strading/issues/1
     * @return string
     */
    public function getData () {
        return $this->data;
    }
}