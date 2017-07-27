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
     * @ORM\ManyToOne(targetEntity="BlogBundle\Entity\User")
     * @ORM\JoinColumn(name = "userlogin", referencedColumnName="login")
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

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set thiscomment
     *
     * @param string $thiscomment
     *
     * @return Comment
     */
    public function setThiscomment($thiscomment)
    {
        $this->thiscomment = $thiscomment;

        return $this;
    }

    /**
     * Get thiscomment
     *
     * @return string
     */
    public function getThiscomment()
    {
        return $this->thiscomment;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Comment
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set user
     *
     * @param \UsersBundle\Entity\User $user
     *
     * @return Comment
     */
    public function setUser(\UsersBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UsersBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set post
     *
     * @param \BlogBundle\Entity\Blog $post
     *
     * @return Comment
     */
    public function setPost(\BlogBundle\Entity\Blog $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return \BlogBundle\Entity\Blog
     */
    public function getPost()
    {
        return $this->post;
    }
}
