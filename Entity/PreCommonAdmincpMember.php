<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonAdmincpMember
 *
 * @ORM\Table(name="pre_common_admincp_member")
 * @ORM\Entity
 */
class PreCommonAdmincpMember
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
     * @var integer
     *
     * @ORM\Column(name="cpgroupid", type="integer", nullable=false)
     */
    private $cpgroupid;

    /**
     * @var string
     *
     * @ORM\Column(name="customperm", type="text", nullable=false)
     */
    private $customperm;

    /**
     * @var \Symforce\DiscuzBundle\Entity\User
     * @ORM\OneToOne(targetEntity="Symforce\DiscuzBundle\Entity\User", mappedBy="common_member", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="uid", referencedColumnName="uid")
     */
    public $user ;

    /**
     * @var PreCommonAdmincpGroup
     * @ORM\ManyToOne(targetEntity="PreCommonAdmincpGroup", inversedBy="admincp_members")
     * @ORM\JoinColumn(name="cpgroupid", referencedColumnName="cpgroupid")
     */
    public $admincp_group ;

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
     * Set cpgroupid
     *
     * @param integer $cpgroupid
     * @return PreCommonAdmincpMember
     */
    public function setCpgroupid($cpgroupid)
    {
        $this->cpgroupid = $cpgroupid;

        return $this;
    }

    /**
     * Get cpgroupid
     *
     * @return integer 
     */
    public function getCpgroupid()
    {
        return $this->cpgroupid;
    }

    /**
     * Set customperm
     *
     * @param string $customperm
     * @return PreCommonAdmincpMember
     */
    public function setCustomperm($customperm)
    {
        $this->customperm = $customperm;

        return $this;
    }

    /**
     * Get customperm
     *
     * @return string 
     */
    public function getCustomperm()
    {
        return $this->customperm;
    }
}
