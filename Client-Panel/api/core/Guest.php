<?php
/**
 * Created by IntelliJ IDEA.
 * User: dinit
 * Date: 12/2/2018
 * Time: 6:15 PM
 */

class Guest
{
    private $userId;
    private $userName;
    private $userNIC;
    private $telephoneNo;

    /**
     * Guest constructor.
     * @param $userId
     * @param $userName
     * @param $userNIC
     * @param $telephoneNo
     */
    public function __construct($userId, $userName, $userNIC, $telephoneNo)
    {
        $this->userId = $userId;
        $this->userName = $userName;
        $this->userNIC = $userNIC;
        $this->telephoneNo = $telephoneNo;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserNIC()
    {
        return $this->userNIC;
    }

    /**
     * @param mixed $userNIC
     */
    public function setUserNIC($userNIC): void
    {
        $this->userNIC = $userNIC;
    }

    /**
     * @return mixed
     */
    public function getTelephoneNo()
    {
        return $this->telephoneNo;
    }

    /**
     * @param mixed $telephoneNo
     */
    public function setTelephoneNo($telephoneNo): void
    {
        $this->telephoneNo = $telephoneNo;
    }


}