<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Comment
 * @package BlogBundle\Entity
 * @ORM\Table(name="comment")
 * @ORM\Entity
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned": true}, nullable=false)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=256, nullable=false)
     */
    protected $thiscomment;

    /**
     * @ORM\ManyToOne(targetEntity="UsersBundle\Entity\User")
     * @ORM\JoinColumn(name = "userid", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    protected $created;

    /**
     * @ORM\ManyToOne(targetEntity="BlogBundle\Entity\Blog")
     * @ORM\JoinColumn(name="blogid", referencedColumnName="id")
     */
    protected $post;

    public function __construct()
    {
        $this->created = new \DateTime();
    }
}






































