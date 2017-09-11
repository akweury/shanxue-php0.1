<?php
/**
 * Created by PhpStorm.
 * User: Charlie
 * Date: 2017/9/7
 * Time: 19:18
 */

class user_info
{
 public $ID;
 public $password;
 public $nickname;
 public $portrait;
 public $sex;
 public $birthday;
 public $region;
 public $school;
 public $personalResume;
 public $updateTime;
 public $createDate;
 public $userLevel;
 public $uploadEntry;
 public $receiveLike;
 public $others;


    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param mixed $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @return mixed
     */
    public function getPortrait()
    {
        return $this->portrait;
    }

    /**
     * @param mixed $portrait
     */
    public function setPortrait($portrait)
    {
        $this->portrait = $portrait;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param mixed $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return mixed
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * @param mixed $school
     */
    public function setSchool($school)
    {
        $this->school = $school;
    }

    /**
     * @return mixed
     */
    public function getPersonalResume()
    {
        return $this->personalResume;
    }

    /**
     * @param mixed $personalResume
     */
    public function setPersonalResume($personalResume)
    {
        $this->personalResume = $personalResume;
    }

    /**
     * @return mixed
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * @param mixed $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return mixed
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @param mixed $createDate
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    }

    /**
     * @return mixed
     */
    public function getUserLevel()
    {
        return $this->userLevel;
    }

    /**
     * @param mixed $userLevel
     */
    public function setUserLevel($userLevel)
    {
        $this->userLevel = $userLevel;
    }

    /**
     * @return mixed
     */
    public function getUploadEntry()
    {
        return $this->uploadEntry;
    }

    /**
     * @param mixed $uploadEntry
     */
    public function setUploadEntry($uploadEntry)
    {
        $this->uploadEntry = $uploadEntry;
    }

    /**
     * @return mixed
     */
    public function getReceiveLike()
    {
        return $this->receiveLike;
    }

    /**
     * @param mixed $receiveLike
     */
    public function setReceiveLike($receiveLike)
    {
        $this->receiveLike = $receiveLike;
    }

    /**
     * @return mixed
     */
    public function getOthers()
    {
        return $this->others;
    }

    /**
     * @param mixed $others
     */
    public function setOthers($others)
    {
        $this->others = $others;
    }

}