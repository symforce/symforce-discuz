<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberSecurity
 *
 * @ORM\Table(name="pre_common_member_security", indexes={@ORM\Index(name="uid", columns={"uid", "fieldid"}), @ORM\Index(name="dateline", columns={"dateline"})})
 * @ORM\Entity
 */
class PreCommonMemberSecurity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="securityid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $securityid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fieldid", type="string", length=255, nullable=false)
     */
    private $fieldid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="oldvalue", type="text", nullable=false)
     */
    private $oldvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="newvalue", type="text", nullable=false)
     */
    private $newvalue;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Get securityid
     *
     * @return integer 
     */
    public function getSecurityid()
    {
        return $this->securityid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonMemberSecurity
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
     * @return PreCommonMemberSecurity
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
     * Set fieldid
     *
     * @param string $fieldid
     * @return PreCommonMemberSecurity
     */
    public function setFieldid($fieldid)
    {
        $this->fieldid = $fieldid;

        return $this;
    }

    /**
     * Get fieldid
     *
     * @return string 
     */
    public function getFieldid()
    {
        return $this->fieldid;
    }

    /**
     * Set oldvalue
     *
     * @param string $oldvalue
     * @return PreCommonMemberSecurity
     */
    public function setOldvalue($oldvalue)
    {
        $this->oldvalue = $oldvalue;

        return $this;
    }

    /**
     * Get oldvalue
     *
     * @return string 
     */
    public function getOldvalue()
    {
        return $this->oldvalue;
    }

    /**
     * Set newvalue
     *
     * @param string $newvalue
     * @return PreCommonMemberSecurity
     */
    public function setNewvalue($newvalue)
    {
        $this->newvalue = $newvalue;

        return $this;
    }

    /**
     * Get newvalue
     *
     * @return string 
     */
    public function getNewvalue()
    {
        return $this->newvalue;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonMemberSecurity
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
