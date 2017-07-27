<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Blog
 * @package BlogBundle\Entity
 * @ORM\Table(name="blog")
 * @ORM\Entity
 */
class Blog
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned": true})
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=64, nullable=false)
     */
    protected $title;


    /**
     * @ORM\Column(type="text", nullable=false)
     */
    protected $body;

    /**
     * @ORM\Column(nullable=false)
     * @ORM\ManyToOne(targetEntity="user")
     * @ORM\JoinColumn(name = "user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    protected $created;
    public function __construct()
    {
        $this->created = new \DateTime();
    }
}



































