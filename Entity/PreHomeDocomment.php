<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeDocomment
 *
 * @ORM\Table(name="pre_home_docomment", indexes={@ORM\Index(name="doid", columns={"doid", "dateline"}), @ORM\Index(name="dateline", columns={"dateline"})})
 * @ORM\Entity
 */
class PreHomeDocomment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="upid", type="integer", nullable=false)
     */
    private $upid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="doid", type="integer", nullable=false)
     */
    private $doid = '0';

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
     * @ORM\Column(name="grade", type="smallint", nullable=false)
     */
    private $grade = '0';



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
     * Set upid
     *
     * @param integer $upid
     * @return PreHomeDocomment
     */
    public function setUpid($upid)
    {
        $this->upid = $upid;

        return $this;
    }

    /**
     * Get upid
     *
     * @return integer 
     */
    public function getUpid()
    {
        return $this->upid;
    }

    /**
     * Set doid
     *
     * @param integer $doid
     * @return PreHomeDocomment
     */
    public function setDoid($doid)
    {
        $this->doid = $doid;

        return $this;
    }

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
     * @return PreHomeDocomment
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
     * @return PreHomeDocomment
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
     * Set dateline
     *
     * @param integer $dateline
     * @return PreHomeDocomment
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
     * @return PreHomeDocomment
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
     * @return PreHomeDocomment
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
     * Set grade
     *
     * @param integer $grade
     * @return PreHomeDocomment
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return integer 
     */
    public function getGrade()
    {
        return $this->grade;
    }
}
