<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeComment
 *
 * @ORM\Table(name="pre_home_comment", indexes={@ORM\Index(name="authorid", columns={"authorid", "idtype"}), @ORM\Index(name="id", columns={"id", "idtype", "dateline"})})
 * @ORM\Entity
 */
class PreHomeComment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="idtype", type="string", length=20, nullable=false)
     */
    private $idtype = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="authorid", type="integer", nullable=false)
     */
    private $authorid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=15, nullable=false)
     */
    private $author = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=20, nullable=false)
     */
    private $ip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="smallint", nullable=false)
     */
    private $port = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var boolean
     *
     * @ORM\Column(name="magicflicker", type="boolean", nullable=false)
     */
    private $magicflicker = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';



    /**
     * Get cid
     *
     * @return integer 
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreHomeComment
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return PreHomeComment
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set idtype
     *
     * @param string $idtype
     * @return PreHomeComment
     */
    public function setIdtype($idtype)
    {
        $this->idtype = $idtype;

        return $this;
    }

    /**
     * Get idtype
     *
     * @return string 
     */
    public function getIdtype()
    {
        return $this->idtype;
    }

    /**
     * Set authorid
     *
     * @param integer $authorid
     * @return PreHomeComment
     */
    public function setAuthorid($authorid)
    {
        $this->authorid = $authorid;

        return $this;
    }

    /**
     * Get authorid
     *
     * @return integer 
     */
    public function getAuthorid()
    {
        return $this->authorid;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return PreHomeComment
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return PreHomeComment
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set port
     *
     * @param integer $port
     * @return PreHomeComment
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return integer 
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreHomeComment
     */
    public function setDateline($dateline)
    {
        $this->dateline = $dateline;

        return $this;
    }

    /**
     * Get dateline
     *
     * @return integer 
     */
    public function getDateline()
    {
        return $this->dateline;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return PreHomeComment
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

    /**
     * Set magicflicker
     *
     * @param boolean $magicflicker
     * @return PreHomeComment
     */
    public function setMagicflicker($magicflicker)
    {
        $this->magicflicker = $magicflicker;

        return $this;
    }

    /**
     * Get magicflicker
     *
     * @return boolean 
     */
    public function getMagicflicker()
    {
        return $this->magicflicker;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return PreHomeComment
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
