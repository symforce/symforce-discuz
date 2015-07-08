<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberConnect
 *
 * @ORM\Table(name="pre_common_member_connect", indexes={@ORM\Index(name="conuin", columns={"conuin"}), @ORM\Index(name="conopenid", columns={"conopenid"})})
 * @ORM\Entity
 */
class PreCommonMemberConnect
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="conuin", type="string", length=40, nullable=false)
     */
    private $conuin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="conuinsecret", type="string", length=16, nullable=false)
     */
    private $conuinsecret = '';

    /**
     * @var string
     *
     * @ORM\Column(name="conopenid", type="string", length=32, nullable=false)
     */
    private $conopenid = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="conisfeed", type="boolean", nullable=false)
     */
    private $conisfeed = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="conispublishfeed", type="boolean", nullable=false)
     */
    private $conispublishfeed = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="conispublisht", type="boolean", nullable=false)
     */
    private $conispublisht = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="conisregister", type="boolean", nullable=false)
     */
    private $conisregister = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="conisqzoneavatar", type="boolean", nullable=false)
     */
    private $conisqzoneavatar = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="conisqqshow", type="boolean", nullable=false)
     */
    private $conisqqshow = '0';



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
     * Set conuin
     *
     * @param string $conuin
     * @return PreCommonMemberConnect
     */
    public function setConuin($conuin)
    {
        $this->conuin = $conuin;

        return $this;
    }

    /**
     * Get conuin
     *
     * @return string 
     */
    public function getConuin()
    {
        return $this->conuin;
    }

    /**
     * Set conuinsecret
     *
     * @param string $conuinsecret
     * @return PreCommonMemberConnect
     */
    public function setConuinsecret($conuinsecret)
    {
        $this->conuinsecret = $conuinsecret;

        return $this;
    }

    /**
     * Get conuinsecret
     *
     * @return string 
     */
    public function getConuinsecret()
    {
        return $this->conuinsecret;
    }

    /**
     * Set conopenid
     *
     * @param string $conopenid
     * @return PreCommonMemberConnect
     */
    public function setConopenid($conopenid)
    {
        $this->conopenid = $conopenid;

        return $this;
    }

    /**
     * Get conopenid
     *
     * @return string 
     */
    public function getConopenid()
    {
        return $this->conopenid;
    }

    /**
     * Set conisfeed
     *
     * @param boolean $conisfeed
     * @return PreCommonMemberConnect
     */
    public function setConisfeed($conisfeed)
    {
        $this->conisfeed = $conisfeed;

        return $this;
    }

    /**
     * Get conisfeed
     *
     * @return boolean 
     */
    public function getConisfeed()
    {
        return $this->conisfeed;
    }

    /**
     * Set conispublishfeed
     *
     * @param boolean $conispublishfeed
     * @return PreCommonMemberConnect
     */
    public function setConispublishfeed($conispublishfeed)
    {
        $this->conispublishfeed = $conispublishfeed;

        return $this;
    }

    /**
     * Get conispublishfeed
     *
     * @return boolean 
     */
    public function getConispublishfeed()
    {
        return $this->conispublishfeed;
    }

    /**
     * Set conispublisht
     *
     * @param boolean $conispublisht
     * @return PreCommonMemberConnect
     */
    public function setConispublisht($conispublisht)
    {
        $this->conispublisht = $conispublisht;

        return $this;
    }

    /**
     * Get conispublisht
     *
     * @return boolean 
     */
    public function getConispublisht()
    {
        return $this->conispublisht;
    }

    /**
     * Set conisregister
     *
     * @param boolean $conisregister
     * @return PreCommonMemberConnect
     */
    public function setConisregister($conisregister)
    {
        $this->conisregister = $conisregister;

        return $this;
    }

    /**
     * Get conisregister
     *
     * @return boolean 
     */
    public function getConisregister()
    {
        return $this->conisregister;
    }

    /**
     * Set conisqzoneavatar
     *
     * @param boolean $conisqzoneavatar
     * @return PreCommonMemberConnect
     */
    public function setConisqzoneavatar($conisqzoneavatar)
    {
        $this->conisqzoneavatar = $conisqzoneavatar;

        return $this;
    }

    /**
     * Get conisqzoneavatar
     *
     * @return boolean 
     */
    public function getConisqzoneavatar()
    {
        return $this->conisqzoneavatar;
    }

    /**
     * Set conisqqshow
     *
     * @param boolean $conisqqshow
     * @return PreCommonMemberConnect
     */
    public function setConisqqshow($conisqqshow)
    {
        $this->conisqqshow = $conisqqshow;

        return $this;
    }

    /**
     * Get conisqqshow
     *
     * @return boolean 
     */
    public function getConisqqshow()
    {
        return $this->conisqqshow;
    }
}
