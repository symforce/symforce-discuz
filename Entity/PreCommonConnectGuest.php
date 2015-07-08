<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonConnectGuest
 *
 * @ORM\Table(name="pre_common_connect_guest")
 * @ORM\Entity
 */
class PreCommonConnectGuest
{
    /**
     * @var string
     *
     * @ORM\Column(name="conopenid", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $conopenid = '';

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
     * @ORM\Column(name="conqqnick", type="string", length=100, nullable=false)
     */
    private $conqqnick = '';



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
     * Set conuin
     *
     * @param string $conuin
     * @return PreCommonConnectGuest
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
     * @return PreCommonConnectGuest
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
     * Set conqqnick
     *
     * @param string $conqqnick
     * @return PreCommonConnectGuest
     */
    public function setConqqnick($conqqnick)
    {
        $this->conqqnick = $conqqnick;

        return $this;
    }

    /**
     * Get conqqnick
     *
     * @return string 
     */
    public function getConqqnick()
    {
        return $this->conqqnick;
    }
}
