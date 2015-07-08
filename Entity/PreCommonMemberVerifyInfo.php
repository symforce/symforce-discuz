<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberVerifyInfo
 *
 * @ORM\Table(name="pre_common_member_verify_info", indexes={@ORM\Index(name="verifytype", columns={"verifytype", "flag"}), @ORM\Index(name="uid", columns={"uid", "verifytype", "dateline"})})
 * @ORM\Entity
 */
class PreCommonMemberVerifyInfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="vid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=30, nullable=false)
     */
    private $username = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="verifytype", type="boolean", nullable=false)
     */
    private $verifytype = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="flag", type="boolean", nullable=false)
     */
    private $flag = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="text", nullable=false)
     */
    private $field;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Get vid
     *
     * @return integer 
     */
    public function getVid()
    {
        return $this->vid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonMemberVerifyInfo
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
     * Set username
     *
     * @param string $username
     * @return PreCommonMemberVerifyInfo
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
     * Set verifytype
     *
     * @param boolean $verifytype
     * @return PreCommonMemberVerifyInfo
     */
    public function setVerifytype($verifytype)
    {
        $this->verifytype = $verifytype;

        return $this;
    }

    /**
     * Get verifytype
     *
     * @return boolean 
     */
    public function getVerifytype()
    {
        return $this->verifytype;
    }

    /**
     * Set flag
     *
     * @param boolean $flag
     * @return PreCommonMemberVerifyInfo
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return boolean 
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set field
     *
     * @param string $field
     * @return PreCommonMemberVerifyInfo
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string 
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonMemberVerifyInfo
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
