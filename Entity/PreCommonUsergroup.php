<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonUsergroup
 *
 * @ORM\Table(name="pre_common_usergroup", indexes={@ORM\Index(name="creditsrange", columns={"creditshigher", "creditslower"})})
 * @ORM\Entity
 */
class PreCommonUsergroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="groupid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="radminid", type="boolean", nullable=false)
     */
    private $radminid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type = 'member';

    /**
     * @var string
     *
     * @ORM\Column(name="system", type="string", length=255, nullable=false)
     */
    private $system = 'private';

    /**
     * @var string
     *
     * @ORM\Column(name="grouptitle", type="string", length=255, nullable=false)
     */
    private $grouptitle = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="creditshigher", type="integer", nullable=false)
     */
    private $creditshigher = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="creditslower", type="integer", nullable=false)
     */
    private $creditslower = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stars", type="boolean", nullable=false)
     */
    private $stars = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255, nullable=false)
     */
    private $color = '';

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255, nullable=false)
     */
    private $icon = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowvisit", type="boolean", nullable=false)
     */
    private $allowvisit = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowsendpm", type="boolean", nullable=false)
     */
    private $allowsendpm = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowinvite", type="boolean", nullable=false)
     */
    private $allowinvite = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmailinvite", type="boolean", nullable=false)
     */
    private $allowmailinvite = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="maxinvitenum", type="boolean", nullable=false)
     */
    private $maxinvitenum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="inviteprice", type="smallint", nullable=false)
     */
    private $inviteprice = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxinviteday", type="smallint", nullable=false)
     */
    private $maxinviteday = '0';


    /**
     * @var \Doctrine\ORM\PersistentCollection
     * var Array<PreCommonMember>
     * @ORM\OneToMany(targetEntity="PreCommonMember", mappedBy="common_usergroup")
     */
    public $common_members ;

    /**
     * @var \Doctrine\ORM\PersistentCollection
     * @ORM\OneToMany(targetEntity="Symforce\DiscuzBundle\Entity\PreCommonUsergroupMedal", mappedBy="usergroup", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="groupid", referencedColumnName="groupid")
     */
    public $groupmedal ;

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
     * Set radminid
     *
     * @param boolean $radminid
     * @return PreCommonUsergroup
     */
    public function setRadminid($radminid)
    {
        $this->radminid = $radminid;

        return $this;
    }

    /**
     * Get radminid
     *
     * @return boolean 
     */
    public function getRadminid()
    {
        return $this->radminid;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return PreCommonUsergroup
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set system
     *
     * @param string $system
     * @return PreCommonUsergroup
     */
    public function setSystem($system)
    {
        $this->system = $system;

        return $this;
    }

    /**
     * Get system
     *
     * @return string 
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Set grouptitle
     *
     * @param string $grouptitle
     * @return PreCommonUsergroup
     */
    public function setGrouptitle($grouptitle)
    {
        $this->grouptitle = $grouptitle;

        return $this;
    }

    /**
     * Get grouptitle
     *
     * @return string 
     */
    public function getGrouptitle()
    {
        return $this->grouptitle;
    }

    /**
     * Set creditshigher
     *
     * @param integer $creditshigher
     * @return PreCommonUsergroup
     */
    public function setCreditshigher($creditshigher)
    {
        $this->creditshigher = $creditshigher;

        return $this;
    }

    /**
     * Get creditshigher
     *
     * @return integer 
     */
    public function getCreditshigher()
    {
        return $this->creditshigher;
    }

    /**
     * Set creditslower
     *
     * @param integer $creditslower
     * @return PreCommonUsergroup
     */
    public function setCreditslower($creditslower)
    {
        $this->creditslower = $creditslower;

        return $this;
    }

    /**
     * Get creditslower
     *
     * @return integer 
     */
    public function getCreditslower()
    {
        return $this->creditslower;
    }

    /**
     * Set stars
     *
     * @param boolean $stars
     * @return PreCommonUsergroup
     */
    public function setStars($stars)
    {
        $this->stars = $stars;

        return $this;
    }

    /**
     * Get stars
     *
     * @return boolean 
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return PreCommonUsergroup
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return PreCommonUsergroup
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set allowvisit
     *
     * @param boolean $allowvisit
     * @return PreCommonUsergroup
     */
    public function setAllowvisit($allowvisit)
    {
        $this->allowvisit = $allowvisit;

        return $this;
    }

    /**
     * Get allowvisit
     *
     * @return boolean 
     */
    public function getAllowvisit()
    {
        return $this->allowvisit;
    }

    /**
     * Set allowsendpm
     *
     * @param boolean $allowsendpm
     * @return PreCommonUsergroup
     */
    public function setAllowsendpm($allowsendpm)
    {
        $this->allowsendpm = $allowsendpm;

        return $this;
    }

    /**
     * Get allowsendpm
     *
     * @return boolean 
     */
    public function getAllowsendpm()
    {
        return $this->allowsendpm;
    }

    /**
     * Set allowinvite
     *
     * @param boolean $allowinvite
     * @return PreCommonUsergroup
     */
    public function setAllowinvite($allowinvite)
    {
        $this->allowinvite = $allowinvite;

        return $this;
    }

    /**
     * Get allowinvite
     *
     * @return boolean 
     */
    public function getAllowinvite()
    {
        return $this->allowinvite;
    }

    /**
     * Set allowmailinvite
     *
     * @param boolean $allowmailinvite
     * @return PreCommonUsergroup
     */
    public function setAllowmailinvite($allowmailinvite)
    {
        $this->allowmailinvite = $allowmailinvite;

        return $this;
    }

    /**
     * Get allowmailinvite
     *
     * @return boolean 
     */
    public function getAllowmailinvite()
    {
        return $this->allowmailinvite;
    }

    /**
     * Set maxinvitenum
     *
     * @param boolean $maxinvitenum
     * @return PreCommonUsergroup
     */
    public function setMaxinvitenum($maxinvitenum)
    {
        $this->maxinvitenum = $maxinvitenum;

        return $this;
    }

    /**
     * Get maxinvitenum
     *
     * @return boolean 
     */
    public function getMaxinvitenum()
    {
        return $this->maxinvitenum;
    }

    /**
     * Set inviteprice
     *
     * @param integer $inviteprice
     * @return PreCommonUsergroup
     */
    public function setInviteprice($inviteprice)
    {
        $this->inviteprice = $inviteprice;

        return $this;
    }

    /**
     * Get inviteprice
     *
     * @return integer 
     */
    public function getInviteprice()
    {
        return $this->inviteprice;
    }

    /**
     * Set maxinviteday
     *
     * @param integer $maxinviteday
     * @return PreCommonUsergroup
     */
    public function setMaxinviteday($maxinviteday)
    {
        $this->maxinviteday = $maxinviteday;

        return $this;
    }

    /**
     * Get maxinviteday
     *
     * @return integer 
     */
    public function getMaxinviteday()
    {
        return $this->maxinviteday;
    }
}
