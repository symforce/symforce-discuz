<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeDoing
 *
 * @ORM\Table(name="pre_home_doing", indexes={@ORM\Index(name="uid", columns={"uid", "dateline"}), @ORM\Index(name="dateline", columns={"dateline"})})
 * @ORM\Entity
 */
class PreHomeDoing
{
    /**
     * @var integer
     *
     * @ORM\Column(name="doid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $doid;

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
     * @ORM\Column(name="from", type="string", length=20, nullable=false)
     */
    private $from = '';

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
     * @ORM\Column(name="replynum", type="integer", nullable=false)
     */
    private $replynum = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';



    /**
     * Get doid
     *
     * @return integer 
     */
    public function getDoid()
    {
        return $this->doid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreHomeDoing
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
     * @return PreHomeDoing
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
     * Set from
     *
     * @param string $from
     * @return PreHomeDoing
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return string 
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreHomeDoing
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
     * @return PreHomeDoing
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
     * Set ip
     *
     * @param string $ip
     * @return PreHomeDoing
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
     * @return PreHomeDoing
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
     * Set replynum
     *
     * @param integer $replynum
     * @return PreHomeDoing
     */
    public function setReplynum($replynum)
    {
        $this->replynum = $replynum;

        return $this;
    }

    /**
     * Get replynum
     *
     * @return integer 
     */
    public function getReplynum()
    {
        return $this->replynum;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return PreHomeDoing
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
