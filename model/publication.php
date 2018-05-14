<?php

class Publication
{
    private $content;
    private $user_mail;
    private $date;

    function __construct($user_mail,$date,$content)
	{
		
		$this->user_mail=$user_mail;
		$this->date=$date;
		$this->content=$content;
    }
    function getUserMail(){
        return $this->user_mail;
    }
    function getDate(){
        return $this->date;
    }
    function getContent(){
        return $this->content;
    }

}