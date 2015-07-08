<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreUcenterMergemembers
 *
 * @ORM\Table(name="pre_ucenter_mergemembers")
 * @ORM\Entity
 */
class PreUcenterMergemembers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="appid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $appid;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $username;



    /**
     * Set appid
     *
     * @param integer $appid
     * @return PreUcenterMergemembers
     */
    public function setAppid($appid)
    {
        $this->appid = $appid;

        return $this;
    }

    /**
     * Get appid
     *
     * @return integer 
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return PreUcenterMergemembers
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
}
