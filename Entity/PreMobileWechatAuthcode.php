<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreMobileWechatAuthcode
 *
 * @ORM\Table(name="pre_mobile_wechat_authcode", uniqueConstraints={@ORM\UniqueConstraint(name="code", columns={"code"})}, indexes={@ORM\Index(name="createtime", columns={"createtime"})})
 * @ORM\Entity
 */
class PreMobileWechatAuthcode
{
    /**
     * @var string
     *
     * @ORM\Column(name="sid", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sid;

    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="integer", nullable=false)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="createtime", type="integer", nullable=false)
     */
    private $createtime;



    /**
     * Get sid
     *
     * @return string 
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set code
     *
     * @param integer $code
     * @return PreMobileWechatAuthcode
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreMobileWechatAuthcode
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
     * Set status
     *
     * @param boolean $status
     * @return PreMobileWechatAuthcode
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
     * Set createtime
     *
     * @param integer $createtime
     * @return PreMobileWechatAuthcode
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Get createtime
     *
     * @return integer 
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }
}
