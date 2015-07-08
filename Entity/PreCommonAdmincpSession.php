<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonAdmincpSession
 *
 * @ORM\Table(name="pre_common_admincp_session")
 * @ORM\Entity
 */
class PreCommonAdmincpSession
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $uid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="panel", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $panel = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="adminid", type="smallint", nullable=false)
     */
    private $adminid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=false)
     */
    private $ip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="errorcount", type="boolean", nullable=false)
     */
    private $errorcount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="storage", type="text", nullable=false)
     */
    private $storage;



    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonAdmincpSession
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
     * Set panel
     *
     * @param boolean $panel
     * @return PreCommonAdmincpSession
     */
    public function setPanel($panel)
    {
        $this->panel = $panel;

        return $this;
    }

    /**
     * Get panel
     *
     * @return boolean 
     */
    public function getPanel()
    {
        return $this->panel;
    }

    /**
     * Set adminid
     *
     * @param integer $adminid
     * @return PreCommonAdmincpSession
     */
    public function setAdminid($adminid)
    {
        $this->adminid = $adminid;

        return $this;
    }

    /**
     * Get adminid
     *
     * @return integer 
     */
    public function getAdminid()
    {
        return $this->adminid;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return PreCommonAdmincpSession
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
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonAdmincpSession
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
     * Set errorcount
     *
     * @param boolean $errorcount
     * @return PreCommonAdmincpSession
     */
    public function setErrorcount($errorcount)
    {
        $this->errorcount = $errorcount;

        return $this;
    }

    /**
     * Get errorcount
     *
     * @return boolean 
     */
    public function getErrorcount()
    {
        return $this->errorcount;
    }

    /**
     * Set storage
     *
     * @param string $storage
     * @return PreCommonAdmincpSession
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Get storage
     *
     * @return string 
     */
    public function getStorage()
    {
        return $this->storage;
    }
}
