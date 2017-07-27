<?php

namespace UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Users
 * @package UsersBundle\Entity
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=8, nullable=false)
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
}






























