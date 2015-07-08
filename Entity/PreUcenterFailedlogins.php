<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreUcenterFailedlogins
 *
 * @ORM\Table(name="pre_ucenter_failedlogins")
 * @ORM\Entity
 */
class PreUcenterFailedlogins
{
    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ip = '';

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
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set count
     *
     * @param boolean $count
     * @return PreUcenterFailedlogins
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
     * @return PreUcenterFailedlogins
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
