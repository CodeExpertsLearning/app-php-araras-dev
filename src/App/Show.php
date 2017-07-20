<?php 
namespace CodeExperts\App;

class Show
{
    private $msg;

    public function setMessage($msg)
    {
        $this->msg = $msg;
    }

    public function getMessage()
    {
        return $this->msg;
    }
}