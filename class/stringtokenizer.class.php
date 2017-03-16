<?php

class StringTokenizer implements Iterator{ 

    protected $_string;
    protected $_delims; 
    protected $_token; 
    protected $_counter = 0;

    public function __construct($string, $delims){
        $this->_string = $string;
        $this->_delims = $delims;
        $this->_token = strtok($string, $delims);
    }

    public function current(){ return $this->_token; }

    public function key(){ return $this->_counter; }

    public function next(){
        $this->_token = strtok($this->_delims);
        if ($this->valid()) ++$this->_counter;
    }

    public function rewind(){
        $this->_counter = 0;
        $this->_token   = strtok($this->_string, $this->_delims);
    }

    public function valid(){ return $this->_token !== FALSE; }
}