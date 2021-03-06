<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package BlogBundle\Entity
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=8)
     */
    protected $login;

    /**
     * @ORM\Column(type="string", length=8, nullable=false)
     */
    protected $pswd;

    /**
     * @ORM\Column(type="string", length=16, nullable=false)
     */
    protected $nameUser;

    /**
     * @ORM\Column(type="boolean", nullable=false, options={"default": false})
     */
    protected $rangUser;

    function __construct($login, $pswd, $rang = "user")
    {
        $this->login = $login;
        $this->pswd = $pswd;
        $this->rangUser = $rang;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set pswd
     *
     * @param string $pswd
     *
     * @return User
     */
    public function setPswd($pswd)
    {
        $this->pswd = $pswd;

        return $this;
    }

    /**
     * Get pswd
     *
     * @return string
     */
    public function getPswd()
    {
        return $this->pswd;
    }

    /**
     * Set nameUser
     *
     * @param string $nameUser
     *
     * @return User
     */
    public function setNameUser($nameUser)
    {
        $this->nameUser = $nameUser;

        return $this;
    }

    /**
     * Get nameUser
     *
     * @return string
     */
    public function getNameUser()
    {
        return $this->nameUser;
    }

    /**
     * Set rangUser
     *
     * @param boolean $rangUser
     *
     * @return User
     */
    public function setRangUser($rangUser)
    {
        $this->rangUser = $rangUser;

        return $this;
    }

    /**
     * Get rangUser
     *
     * @return boolean
     */
    public function getRangUser()
    {
        return $this->rangUser;
    }
}
