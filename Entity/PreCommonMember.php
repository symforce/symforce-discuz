<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMember
 *
 * @ORM\Table(name="pre_common_member", uniqueConstraints={@ORM\UniqueConstraint(name="username", columns={"username"})}, indexes={@ORM\Index(name="email", columns={"email"}), @ORM\Index(name="groupid", columns={"groupid"}), @ORM\Index(name="conisbind", columns={"conisbind"}), @ORM\Index(name="regdate", columns={"regdate"})})
 * @ORM\Entity
 */
class PreCommonMember
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
     * @ORM\Column(name="email", type="string", length=40, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=15, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=false)
     */
    private $password = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="emailstatus", type="boolean", nullable=false)
     */
    private $emailstatus = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="avatarstatus", type="boolean", nullable=false)
     */
    private $avatarstatus = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="videophotostatus", type="boolean", nullable=false)
     */
    private $videophotostatus = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="adminid", type="boolean", nullable=false)
     */
    private $adminid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupid", type="smallint", nullable=false)
     */
    private $groupid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupexpiry", type="integer", nullable=false)
     */
    private $groupexpiry = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="extgroupids", type="string", length=20, nullable=false)
     */
    private $extgroupids = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="regdate", type="integer", nullable=false)
     */
    private $regdate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="credits", type="integer", nullable=false)
     */
    private $credits = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="notifysound", type="boolean", nullable=false)
     */
    private $notifysound = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="timeoffset", type="string", length=4, nullable=false)
     */
    private $timeoffset = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="newpm", type="smallint", nullable=false)
     */
    private $newpm = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="newprompt", type="smallint", nullable=false)
     */
    private $newprompt = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="accessmasks", type="boolean", nullable=false)
     */
    private $accessmasks = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowadmincp", type="boolean", nullable=false)
     */
    private $allowadmincp = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="onlyacceptfriendpm", type="boolean", nullable=false)
     */
    private $onlyacceptfriendpm = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="conisbind", type="boolean", nullable=false)
     */
    private $conisbind = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="freeze", type="boolean", nullable=false)
     */
    private $freeze = '0';

    /**
     * @var \Doctrine\ORM\PersistentCollection
     * ORM\OneToMany(targetEntity="Symforce\DiscuzBundle\Entity\MedalLog", mappedBy="common_member", fetch="EXTRA_LAZY")
     * ORM\JoinColumn(name="uid", referencedColumnName="uid")
     */
    public $medallogs ;

    /**
     * @var \Doctrine\ORM\PersistentCollection
     * @ORM\OneToMany(targetEntity="Symforce\DiscuzBundle\Entity\PreCommonMemberMedal", mappedBy="common_member", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="uid", referencedColumnName="uid")
     */
    public $membermedals ;

    /**
     * @var \Doctrine\ORM\PersistentCollection
     * ORM\OneToMany(targetEntity="Symforce\DiscuzBundle\Entity\ModeratorWage", mappedBy="common_member", fetch="EXTRA_LAZY")
     * ORM\JoinColumn(name="uid", referencedColumnName="uid")
     */
    public $memberModerators ;
    
    /**
     * @var \Symforce\DiscuzBundle\Entity\User
     * @ORM\OneToOne(targetEntity="Symforce\DiscuzBundle\Entity\User", mappedBy="common_member", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="uid", referencedColumnName="uid")
     */
    public $user ;

    /**
     * @var PreCommonMemberCount
     * @ORM\OneToOne(targetEntity="PreCommonMemberCount", mappedBy="common_member", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="uid", referencedColumnName="uid")
     */
    public $common_member_count ;

    /**
     * @var MemberFieldForum
     * @ORM\OneToOne(targetEntity="MemberFieldForum", inversedBy="common_member", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="uid", referencedColumnName="uid")
     */
    public $medals ;

    

    /**
     * @var PreCommonUsergroup
     * @ORM\OneToOne(targetEntity="PreCommonUsergroup", inversedBy="common_members")
     * @ORM\JoinColumn(name="groupid", referencedColumnName="groupid")
     */
    public $common_usergroup ;

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
     * Set email
     *
     * @param string $email
     * @return PreCommonMember
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return PreCommonMember
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
     * Set password
     *
     * @param string $password
     * @return PreCommonMember
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return PreCommonMember
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
     * Set emailstatus
     *
     * @param boolean $emailstatus
     * @return PreCommonMember
     */
    public function setEmailstatus($emailstatus)
    {
        $this->emailstatus = $emailstatus;

        return $this;
    }

    /**
     * Get emailstatus
     *
     * @return boolean 
     */
    public function getEmailstatus()
    {
        return $this->emailstatus;
    }

    /**
     * Set avatarstatus
     *
     * @param boolean $avatarstatus
     * @return PreCommonMember
     */
    public function setAvatarstatus($avatarstatus)
    {
        $this->avatarstatus = $avatarstatus;

        return $this;
    }

    /**
     * Get avatarstatus
     *
     * @return boolean 
     */
    public function getAvatarstatus()
    {
        return $this->avatarstatus;
    }

    /**
     * Set videophotostatus
     *
     * @param boolean $videophotostatus
     * @return PreCommonMember
     */
    public function setVideophotostatus($videophotostatus)
    {
        $this->videophotostatus = $videophotostatus;

        return $this;
    }

    /**
     * Get videophotostatus
     *
     * @return boolean 
     */
    public function getVideophotostatus()
    {
        return $this->videophotostatus;
    }

    /**
     * Set adminid
     *
     * @param boolean $adminid
     * @return PreCommonMember
     */
    public function setAdminid($adminid)
    {
        $this->adminid = $adminid;

        return $this;
    }

    /**
     * Get adminid
     *
     * @return boolean 
     */
    public function getAdminid()
    {
        return $this->adminid;
    }

    /**
     * Set groupid
     *
     * @param integer $groupid
     * @return PreCommonMember
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return integer 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set groupexpiry
     *
     * @param integer $groupexpiry
     * @return PreCommonMember
     */
    public function setGroupexpiry($groupexpiry)
    {
        $this->groupexpiry = $groupexpiry;

        return $this;
    }

    /**
     * Get groupexpiry
     *
     * @return integer 
     */
    public function getGroupexpiry()
    {
        return $this->groupexpiry;
    }

    /**
     * Set extgroupids
     *
     * @param string $extgroupids
     * @return PreCommonMember
     */
    public function setExtgroupids($extgroupids)
    {
        $this->extgroupids = $extgroupids;

        return $this;
    }

    /**
     * Get extgroupids
     *
     * @return string 
     */
    public function getExtgroupids()
    {
        return $this->extgroupids;
    }

    /**
     * Set regdate
     *
     * @param integer $regdate
     * @return PreCommonMember
     */
    public function setRegdate($regdate)
    {
        $this->regdate = $regdate;

        return $this;
    }

    /**
     * Get regdate
     *
     * @return integer 
     */
    public function getRegdate()
    {
        return $this->regdate;
    }

    /**
     * Set credits
     *
     * @param integer $credits
     * @return PreCommonMember
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;

        return $this;
    }

    /**
     * Get credits
     *
     * @return integer 
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Set notifysound
     *
     * @param boolean $notifysound
     * @return PreCommonMember
     */
    public function setNotifysound($notifysound)
    {
        $this->notifysound = $notifysound;

        return $this;
    }

    /**
     * Get notifysound
     *
     * @return boolean 
     */
    public function getNotifysound()
    {
        return $this->notifysound;
    }

    /**
     * Set timeoffset
     *
     * @param string $timeoffset
     * @return PreCommonMember
     */
    public function setTimeoffset($timeoffset)
    {
        $this->timeoffset = $timeoffset;

        return $this;
    }

    /**
     * Get timeoffset
     *
     * @return string 
     */
    public function getTimeoffset()
    {
        return $this->timeoffset;
    }

    /**
     * Set newpm
     *
     * @param integer $newpm
     * @return PreCommonMember
     */
    public function setNewpm($newpm)
    {
        $this->newpm = $newpm;

        return $this;
    }

    /**
     * Get newpm
     *
     * @return integer 
     */
    public function getNewpm()
    {
        return $this->newpm;
    }

    /**
     * Set newprompt
     *
     * @param integer $newprompt
     * @return PreCommonMember
     */
    public function setNewprompt($newprompt)
    {
        $this->newprompt = $newprompt;

        return $this;
    }

    /**
     * Get newprompt
     *
     * @return integer 
     */
    public function getNewprompt()
    {
        return $this->newprompt;
    }

    /**
     * Set accessmasks
     *
     * @param boolean $accessmasks
     * @return PreCommonMember
     */
    public function setAccessmasks($accessmasks)
    {
        $this->accessmasks = $accessmasks;

        return $this;
    }

    /**
     * Get accessmasks
     *
     * @return boolean 
     */
    public function getAccessmasks()
    {
        return $this->accessmasks;
    }

    /**
     * Set allowadmincp
     *
     * @param boolean $allowadmincp
     * @return PreCommonMember
     */
    public function setAllowadmincp($allowadmincp)
    {
        $this->allowadmincp = $allowadmincp;

        return $this;
    }

    /**
     * Get allowadmincp
     *
     * @return boolean 
     */
    public function getAllowadmincp()
    {
        return $this->allowadmincp;
    }

    /**
     * Set onlyacceptfriendpm
     *
     * @param boolean $onlyacceptfriendpm
     * @return PreCommonMember
     */
    public function setOnlyacceptfriendpm($onlyacceptfriendpm)
    {
        $this->onlyacceptfriendpm = $onlyacceptfriendpm;

        return $this;
    }

    /**
     * Get onlyacceptfriendpm
     *
     * @return boolean 
     */
    public function getOnlyacceptfriendpm()
    {
        return $this->onlyacceptfriendpm;
    }

    /**
     * Set conisbind
     *
     * @param boolean $conisbind
     * @return PreCommonMember
     */
    public function setConisbind($conisbind)
    {
        $this->conisbind = $conisbind;

        return $this;
    }

    /**
     * Get conisbind
     *
     * @return boolean 
     */
    public function getConisbind()
    {
        return $this->conisbind;
    }

    /**
     * Set freeze
     *
     * @param boolean $freeze
     * @return PreCommonMember
     */
    public function setFreeze($freeze)
    {
        $this->freeze = $freeze;

        return $this;
    }

    /**
     * Get freeze
     *
     * @return boolean 
     */
    public function getFreeze()
    {
        return $this->freeze;
    }
}
