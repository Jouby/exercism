<?php

class Bob
{
    public function respondTo($ask)
    {
        $ask = trim($ask);
        if (substr($ask, -1) === '?') {
            if ($this->checkUppercase($ask)) {
                return 'Calm down, I know what I\'m doing!';
            }
            return 'Sure.';
        } else if($this->checkUppercase($ask)) {
            return 'Whoa, chill out!';
        } else if ($ask === '') {
            return 'Fine. Be that way!';
        } else {
            return 'Whatever.';
        }
    }

    protected function checkUppercase($string)
    {
        $string = preg_replace('/[^a-z]+/i', '', $string);
        return ctype_upper($string);
    }
}
