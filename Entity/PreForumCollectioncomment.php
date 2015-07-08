<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumCollectioncomment
 *
 * @ORM\Table(name="pre_forum_collectioncomment", indexes={@ORM\Index(name="ctid", columns={"ctid", "dateline"}), @ORM\Index(name="userrate", columns={"ctid", "uid", "rate"})})
 * @ORM\Entity
 */
class PreForumCollectioncomment
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
     * @ORM\Column(name="ctid", type="integer", nullable=false)
     */
    private $ctid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=15, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="useip", type="string", length=16, nullable=false)
     */
    private $useip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="smallint", nullable=false)
     */
    private $port = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $rate = '0';



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
     * Set ctid
     *
     * @param integer $ctid
     * @return PreForumCollectioncomment
     */
    public function setCtid($ctid)
    {
        $this->ctid = $ctid;

        return $this;
    }

    /**
     * Get ctid
     *
     * @return integer 
     */
    public function getCtid()
    {
        return $this->ctid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreForumCollectioncomment
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
     * Set username
     *
     * @param string $username
     * @return PreForumCollectioncomment
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return PreForumCollectioncomment
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
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumCollectioncomment
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
     * Set useip
     *
     * @param string $useip
     * @return PreForumCollectioncomment
     */
    public function setUseip($useip)
    {
        $this->useip = $useip;

        return $this;
    }

    /**
     * Get useip
     *
     * @return string 
     */
    public function getUseip()
    {
        return $this->useip;
    }

    /**
     * Set port
     *
     * @param integer $port
     * @return PreForumCollectioncomment
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
     * Set rate
     *
     * @param float $rate
     * @return PreForumCollectioncomment
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return float 
     */
    public function getRate()
    {
        return $this->rate;
    }
}
