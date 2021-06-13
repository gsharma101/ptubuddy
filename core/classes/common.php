<?php
class Common
{
    protected $conn;

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function InputValidate($data)
    {

        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = strip_tags($data);
        $data = htmlentities($data);
        $data = strtolower($data);
        return $data;
    }
    public function InputValidateEmail($data)
    {

        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = strip_tags($data);
        $data = htmlentities($data);
        return $data;
    }
    public function InputPassword($data)
    {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = strip_tags($data);
        return $data;
    }
}
