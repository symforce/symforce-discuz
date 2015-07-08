<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreConnectMemberbindlog
 *
 * @ORM\Table(name="pre_connect_memberbindlog", indexes={@ORM\Index(name="uid", columns={"uid"}), @ORM\Index(name="uin", columns={"uin"}), @ORM\Index(name="dateline", columns={"dateline"})})
 * @ORM\Entity
 */
class PreConnectMemberbindlog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="mblid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mblid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="uin", type="string", length=40, nullable=false)
     */
    private $uin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Get mblid
     *
     * @return integer 
     */
    public function getMblid()
    {
        return $this->mblid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreConnectMemberbindlog
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
     * Set uin
     *
     * @param string $uin
     * @return PreConnectMemberbindlog
     */
    public function setUin($uin)
    {
        $this->uin = $uin;

        return $this;
    }

    /**
     * Get uin
     *
     * @return string 
     */
    public function getUin()
    {
        return $this->uin;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return PreConnectMemberbindlog
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreConnectMemberbindlog
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
}
