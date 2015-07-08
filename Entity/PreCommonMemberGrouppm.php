<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberGrouppm
 *
 * @ORM\Table(name="pre_common_member_grouppm")
 * @ORM\Entity
 */
class PreCommonMemberGrouppm
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
     * @var integer
     *
     * @ORM\Column(name="gpmid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $gpmid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonMemberGrouppm
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
     * Set gpmid
     *
     * @param integer $gpmid
     * @return PreCommonMemberGrouppm
     */
    public function setGpmid($gpmid)
    {
        $this->gpmid = $gpmid;

        return $this;
    }

    /**
     * Get gpmid
     *
     * @return integer 
     */
    public function getGpmid()
    {
        return $this->gpmid;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return PreCommonMemberGrouppm
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

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonMemberGrouppm
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
