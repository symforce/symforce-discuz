<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberStatField
 *
 * @ORM\Table(name="pre_common_member_stat_field", indexes={@ORM\Index(name="fieldid", columns={"fieldid"})})
 * @ORM\Entity
 */
class PreCommonMemberStatField
{
    /**
     * @var integer
     *
     * @ORM\Column(name="optionid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $optionid;

    /**
     * @var string
     *
     * @ORM\Column(name="fieldid", type="string", length=255, nullable=false)
     */
    private $fieldid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fieldvalue", type="string", length=255, nullable=false)
     */
    private $fieldvalue = '';

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=255, nullable=false)
     */
    private $hash = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="users", type="integer", nullable=false)
     */
    private $users = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="updatetime", type="integer", nullable=false)
     */
    private $updatetime = '0';



    /**
     * Get optionid
     *
     * @return integer 
     */
    public function getOptionid()
    {
        return $this->optionid;
    }

    /**
     * Set fieldid
     *
     * @param string $fieldid
     * @return PreCommonMemberStatField
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
     * Set fieldvalue
     *
     * @param string $fieldvalue
     * @return PreCommonMemberStatField
     */
    public function setFieldvalue($fieldvalue)
    {
        $this->fieldvalue = $fieldvalue;

        return $this;
    }

    /**
     * Get fieldvalue
     *
     * @return string 
     */
    public function getFieldvalue()
    {
        return $this->fieldvalue;
    }

    /**
     * Set hash
     *
     * @param string $hash
     * @return PreCommonMemberStatField
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string 
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set users
     *
     * @param integer $users
     * @return PreCommonMemberStatField
     */
    public function setUsers($users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return integer 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set updatetime
     *
     * @param integer $updatetime
     * @return PreCommonMemberStatField
     */
    public function setUpdatetime($updatetime)
    {
        $this->updatetime = $updatetime;

        return $this;
    }

    /**
     * Get updatetime
     *
     * @return integer 
     */
    public function getUpdatetime()
    {
        return $this->updatetime;
    }
}
