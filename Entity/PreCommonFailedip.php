<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonFailedip
 *
 * @ORM\Table(name="pre_common_failedip", indexes={@ORM\Index(name="lastupdate", columns={"lastupdate"})})
 * @ORM\Entity
 */
class PreCommonFailedip
{
    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=7, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastupdate", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $lastupdate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="count", type="boolean", nullable=false)
     */
    private $count = '0';



    /**
     * Set ip
     *
     * @param string $ip
     * @return PreCommonFailedip
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
     * Set lastupdate
     *
     * @param integer $lastupdate
     * @return PreCommonFailedip
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

    /**
     * Set count
     *
     * @param boolean $count
     * @return PreCommonFailedip
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
}
