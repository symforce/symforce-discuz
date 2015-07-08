<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumFaq
 *
 * @ORM\Table(name="pre_forum_faq", indexes={@ORM\Index(name="displayplay", columns={"displayorder"})})
 * @ORM\Entity
 */
class PreForumFaq
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="fpid", type="smallint", nullable=false)
     */
    private $fpid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="displayorder", type="boolean", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=20, nullable=false)
     */
    private $identifier;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=50, nullable=false)
     */
    private $keyword;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;



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
     * Set fpid
     *
     * @param integer $fpid
     * @return PreForumFaq
     */
    public function setFpid($fpid)
    {
        $this->fpid = $fpid;

        return $this;
    }

    /**
     * Get fpid
     *
     * @return integer 
     */
    public function getFpid()
    {
        return $this->fpid;
    }

    /**
     * Set displayorder
     *
     * @param boolean $displayorder
     * @return PreForumFaq
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;

        return $this;
    }

    /**
     * Get displayorder
     *
     * @return boolean 
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * Set identifier
     *
     * @param string $identifier
     * @return PreForumFaq
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Get identifier
     *
     * @return string 
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set keyword
     *
     * @param string $keyword
     * @return PreForumFaq
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string 
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return PreForumFaq
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return PreForumFaq
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }
}
