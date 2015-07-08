<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonFailedlogin
 *
 * @ORM\Table(name="pre_common_failedlogin")
 * @ORM\Entity
 */
class PreCommonFailedlogin
{
    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $username = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="count", type="boolean", nullable=false)
     */
    private $count = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastupdate", type="integer", nullable=false)
     */
    private $lastupdate = '0';



    /**
     * Set ip
     *
     * @param string $ip
     * @return PreCommonFailedlogin
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
     * Set username
     *
     * @param string $username
     * @return PreCommonFailedlogin
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
     * Set count
     *
     * @param boolean $count
     * @return PreCommonFailedlogin
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return boolean 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set lastupdate
     *
     * @param integer $lastupdate
     * @return PreCommonFailedlogin
     */
    public function setLastupdate($lastupdate)
    {
        $this->lastupdate = $lastupdate;

        return $this;
    }

    /**
     * Get lastupdate
     *
     * @return integer 
     */
    public function getLastupdate()
    {
        return $this->lastupdate;
    }
}
