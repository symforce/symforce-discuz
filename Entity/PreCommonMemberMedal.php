<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberMedal
 *
 * @ORM\Table(name="pre_common_member_medal")
 * @ORM\Entity
 */
class PreCommonMemberMedal
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=8, options={"unsigned":true})
     * 
     */
    protected $uid;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=8, options={"unsigned":true})
     * 
     */
    protected $medalid;

    /**
     * @var \Symforce\DiscuzBundle\Entity\PreCommonMember
     * @ORM\ManyToOne(targetEntity="Symforce\DiscuzBundle\Entity\PreCommonMember", inversedBy="membermedals", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="uid", referencedColumnName="uid")
     */
    public $common_member ;
    
    /**
     * @var \Symforce\DiscuzBundle\Entity\PreForumForumMedal
     * @ORM\ManyToOne(targetEntity="Symforce\DiscuzBundle\Entity\PreForumForumMedal", inversedBy="membermedals", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="medalid", referencedColumnName="medalid")
     */
    public $medal ;

    /**
     * set id
     *
     */
    public function setCommonMember(\Symforce\DiscuzBundle\Entity\PreCommonMember $member){
        $this->uid = $member->getUid() ;
        $this->common_member = $member ;
    }

    /**
     * Set medalid
     *
     * @param integer medalid
     * @return MedalLog
     */
    public function setMedalid($medalid)
    {
        $this->medalid = $medalid;
        return $this;
    }

    /**
     * set medal
     *
     */
    public function setMedal(\Symforce\DiscuzBundle\Entity\PreForumForumMedal $medal){
        $this->medal = $medal ;
    }
}
