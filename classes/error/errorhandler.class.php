<?php

namespace error {

    class errorhandler
    {
        private $code;
        private $message='';

        /**
         * @param int
         */
        function passError($code)
        {
            $result = array();
            http_response_code($code);
            switch ($code) {
                case 400:

                    $result['error'] = empty($this->message)? 'Invalid request parameter' : $this->message;
                    break;
                case 404:

                    $result['error'] = empty($this->message)? 'opps! seems you\'re in the wrong place. Please use the correct documentation to access this api' : $this->message;
                    break;
                case '406':

                    $result['error'] = empty($this->message)? 'opps! seems you\'re in the wrong place. Please use the correct documentation to access this api' : $this->message;
                    break;

                case '500':

                    $result['error'] = empty($this->message)? 'Ops! Something went wrong! Please contact us for help!' : $this->message;
                    break;
            }

            print_r(json_encode($result));
            die;
        }
        /**
         * @param mixed $code 
         * @return errorhandler
         */
        function setCode($code): self
        {
            $this->code = $code;
            return $this;
        }
    }
}
