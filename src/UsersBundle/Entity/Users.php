<?php

namespace UsersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Users
 * @package UsersBundle\Entity
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
{
    private $login;
}