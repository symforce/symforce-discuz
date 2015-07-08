<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberWechat
 *
 * @ORM\Table(name="pre_common_member_wechat", uniqueConstraints={@ORM\UniqueConstraint(name="openid", columns={"openid"})})
 * @ORM\Entity
 */
class PreCommonMemberWechat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="openid", type="string", length=32, nullable=false)
     */
    private $openid = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="isregister", type="boolean", nullable=false)
     */
    private $isregister = '0';



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
     * Set openid
     *
     * @param string $openid
     * @return PreCommonMemberWechat
     */
    public function setOpenid($openid)
    {
        $this->openid = $openid;

        return $this;
    }

    /**
     * Get openid
     *
     * @return string 
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return PreCommonMemberWechat
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
     * Set isregister
     *
     * @param boolean $isregister
     * @return PreCommonMemberWechat
     */
    public function setIsregister($isregister)
    {
        $this->isregister = $isregister;

        return $this;
    }

    /**
     * Get isregister
     *
     * @return boolean 
     */
    public function getIsregister()
    {
        return $this->isregister;
    }
}
