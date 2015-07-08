<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\Common\Collections\ArrayCollection ;

/**
 * @ORM\Entity
 * @ORM\Table(name="s8_common_usergroup_medal")
 * Author  Morgan
 */
class PreCommonUsergroupMedal
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=8, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", length=8, options={"default":0})
     */
    public $medalid = 0;

    /**
     * @ORM\Column(type="integer", length=8, options={"default":0})
     */
    public $groupid = 0;

    /**
     * @var \Symforce\DiscuzBundle\Entity\PreForumForumMedal
     * @ORM\ManyToOne(targetEntity="Symforce\DiscuzBundle\Entity\PreForumForumMedal", inversedBy="group", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="medalid", referencedColumnName="medalid")
     */
    public $medal;

    /**
     * @var \Symforce\DiscuzBundle\Entity\PreCommonUsergroup
     * @ORM\ManyToOne(targetEntity="Symforce\DiscuzBundle\Entity\PreCommonUsergroup", inversedBy="groupmedal", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="groupid", referencedColumnName="groupid")
     */
    public $usergroup;

    public function getId() {
        return $this->id ;
    }


    public  function  setMedal(\Symforce\DiscuzBundle\Entity\PreForumForumMedal $medal){
        $this->medalid = $medal->getId();
        $this->medal = $medal;
    }

    public  function  setUsergroup(\Symforce\DiscuzBundle\Entity\PreCommonUsergroup $group){
        $this->groupid = $group->getGroupid();
        $this->usergroup = $group;
    }
}