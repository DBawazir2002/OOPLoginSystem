<?php

class SignupContr extends Singup {
    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;

    public function __construct($uid ,$pwd ,$pwdRepeat ,$email) {
            $this->uid = $uid;
            $this->pwd = $pwd;
            $this->pwdRepeat = $pwdRepeat;
            $this->email = $email;
    }

    public function singupUser() {
        if($this->emptyInput() == false) 
        {
            // "echo Empty input!";
            header("location: ../index.php?error:emptyinput");
            exit();
        }
        if($this->invalidUid() == false) 
        {
            // "echo invalid username!";
            header("location: ../index.php?error:username");
            exit();
        }
        if($this->invalidEmail() == false) 
        {
            // "echo invalid email!";
            header("location: ../index.php?error:email");
            exit();
        }
        if($this->invalidUid() == false) 
        {
            // "echo password don't match!";
            header("location: ../index.php?error:passwordmatch");
            exit();
        }
        if($this->uidTakenCheck() == false) 
        {
            // "echo UserName or email taken!";
            header("location: ../index.php?error:useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput() {
        $result = true;
        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email))
        {
            $result = false;
        }
        else 
        {
            $result = true;
        }
        return $result;
    }

    private function invalidUid() {
        $result=true;
        if (!preg_match("/^[a-zA-Z0-9]*$/" ,$this->uid))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result=true;
        if (!filter_var($this->email ,FILTER_VALIDATE_EMAIL))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        $result=true;
        if ($this->pwd !== $this->pwdRepeat)
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function uidTakenCheck() {
        $result=true;
        if (!$this->checkUser($this->uid, $this->email))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
}