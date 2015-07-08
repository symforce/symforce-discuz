<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

use Doctrine\Common\Collections\ArrayCollection ;

/**
 * @ORM\Entity
 * @ORM\Table(name="pre_common_member_field_forum")
 *
 */
class MemberFieldForum
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $uid;

    /**
     * @ORM\Column(columnDefinition="TINYINT(3)  NOT NULL DEFAULT '0'")
     */
    public $publishfeed = 0 ;

    /**
     * @ORM\Column(columnDefinition="TINYINT(1) UNSIGNED NOT NULL DEFAULT '26'")
     */
    public $customshow = 0 ;

    /**
     * @ORM\Column(type="string", length=30, options={"default":""})
     */
    public $customstatus = '' ;

    /**
     * @ORM\Column(columnDefinition="TEXT NOT NULL")
     */
    public $medals = '' ;

    /**
     * @ORM\Column(columnDefinition="TEXT NOT NULL")
     */
    public $sightml= '' ;

    /**
     * @ORM\Column(columnDefinition="TEXT NOT NULL")
     */
    public $groupterms= '' ;

    /**
     * @ORM\Column(type="string", length=20, options={"default":""})
     */
    public $authstr = '' ;

    /**
     *  @ORM\Column(columnDefinition="MEDIUMTEXT NOT NULL")
     */
    public $groups = '' ;

    /**
     * @ORM\Column(type="string", length=255, options={"default":""})
     */
    public $attentiongroup = '' ;

    /**
     * @var \Doctrine\ORM\PersistentCollection
     * @ORM\OneToOne(targetEntity="PreCommonMember", mappedBy="medals")
     * @ORM\JoinColumn(name="uid", referencedColumnName="uid")
     */
    public $common_member ;


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
     * Set publishfeed
     *
     * @param string $publishfeed
     * @return MemberFieldForum
     */
    public function setPublishfeed($publishfeed)
    {
        $this->publishfeed = $publishfeed;

        return $this;
    }

    /**
     * Get publishfeed
     *
     * @return string 
     */
    public function getPublishfeed()
    {
        return $this->publishfeed;
    }

    /**
     * Set customshow
     *
     * @param string $customshow
     * @return MemberFieldForum
     */
    public function setCustomshow($customshow)
    {
        $this->customshow = $customshow;

        return $this;
    }

    /**
     * Get customshow
     *
     * @return string 
     */
    public function getCustomshow()
    {
        return $this->customshow;
    }

    /**
     * Set customstatus
     *
     * @param string $customstatus
     * @return MemberFieldForum
     */
    public function setCustomstatus($customstatus)
    {
        $this->customstatus = $customstatus;

        return $this;
    }

    /**
     * Get customstatus
     *
     * @return string 
     */
    public function getCustomstatus()
    {
        return $this->customstatus;
    }

    /**
     * Set medals
     *
     * @param string $medals
     * @return MemberFieldForum
     */
    public function setMedals($medals)
    {
        $this->medals = $medals;

        return $this;
    }

    /**
     * Get medals
     *
     * @return string 
     */
    public function getMedals()
    {
        return $this->medals;
    }

    /**
     * Set sightml
     *
     * @param string $sightml
     * @return MemberFieldForum
     */
    public function setSightml($sightml)
    {
        $this->sightml = $sightml;

        return $this;
    }

    /**
     * Get sightml
     *
     * @return string 
     */
    public function getSightml()
    {
        return $this->sightml;
    }

    /**
     * Set groupterms
     *
     * @param string $groupterms
     * @return MemberFieldForum
     */
    public function setGroupterms($groupterms)
    {
        $this->groupterms = $groupterms;

        return $this;
    }

    /**
     * Get groupterms
     *
     * @return string 
     */
    public function getGroupterms()
    {
        return $this->groupterms;
    }

    /**
     * Set authstr
     *
     * @param string $authstr
     * @return MemberFieldForum
     */
    public function setAuthstr($authstr)
    {
        $this->authstr = $authstr;

        return $this;
    }

    /**
     * Get authstr
     *
     * @return string 
     */
    public function getAuthstr()
    {
        return $this->authstr;
    }

    /**
     * Set groups
     *
     * @param string $groups
     * @return MemberFieldForum
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * Get groups
     *
     * @return string 
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Set attentiongroup
     *
     * @param string $attentiongroup
     * @return MemberFieldForum
     */
    public function setAttentiongroup($attentiongroup)
    {
        $this->attentiongroup = $attentiongroup;

        return $this;
    }

    /**
     * Get attentiongroup
     *
     * @return string 
     */
    public function getAttentiongroup()
    {
        return $this->attentiongroup;
    }
}
