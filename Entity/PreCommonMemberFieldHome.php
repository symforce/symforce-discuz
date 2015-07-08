<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberFieldHome
 *
 * @ORM\Table(name="pre_common_member_field_home", indexes={@ORM\Index(name="domain", columns={"domain"})})
 * @ORM\Entity
 */
class PreCommonMemberFieldHome
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
     * @ORM\Column(name="videophoto", type="string", length=255, nullable=false)
     */
    private $videophoto = '';

    /**
     * @var string
     *
     * @ORM\Column(name="spacename", type="string", length=255, nullable=false)
     */
    private $spacename = '';

    /**
     * @var string
     *
     * @ORM\Column(name="spacedescription", type="string", length=255, nullable=false)
     */
    private $spacedescription = '';

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=15, nullable=false)
     */
    private $domain = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="addsize", type="integer", nullable=false)
     */
    private $addsize = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="addfriend", type="smallint", nullable=false)
     */
    private $addfriend = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="menunum", type="smallint", nullable=false)
     */
    private $menunum = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=20, nullable=false)
     */
    private $theme = '';

    /**
     * @var string
     *
     * @ORM\Column(name="spacecss", type="text", nullable=false)
     */
    private $spacecss;

    /**
     * @var string
     *
     * @ORM\Column(name="blockposition", type="text", nullable=false)
     */
    private $blockposition;

    /**
     * @var string
     *
     * @ORM\Column(name="recentnote", type="text", nullable=false)
     */
    private $recentnote;

    /**
     * @var string
     *
     * @ORM\Column(name="spacenote", type="text", nullable=false)
     */
    private $spacenote;

    /**
     * @var string
     *
     * @ORM\Column(name="privacy", type="text", nullable=false)
     */
    private $privacy;

    /**
     * @var string
     *
     * @ORM\Column(name="feedfriend", type="text", nullable=false)
     */
    private $feedfriend;

    /**
     * @var string
     *
     * @ORM\Column(name="acceptemail", type="text", nullable=false)
     */
    private $acceptemail;

    /**
     * @var string
     *
     * @ORM\Column(name="magicgift", type="text", nullable=false)
     */
    private $magicgift;

    /**
     * @var string
     *
     * @ORM\Column(name="stickblogs", type="text", nullable=false)
     */
    private $stickblogs;



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
     * Set videophoto
     *
     * @param string $videophoto
     * @return PreCommonMemberFieldHome
     */
    public function setVideophoto($videophoto)
    {
        $this->videophoto = $videophoto;

        return $this;
    }

    /**
     * Get videophoto
     *
     * @return string 
     */
    public function getVideophoto()
    {
        return $this->videophoto;
    }

    /**
     * Set spacename
     *
     * @param string $spacename
     * @return PreCommonMemberFieldHome
     */
    public function setSpacename($spacename)
    {
        $this->spacename = $spacename;

        return $this;
    }

    /**
     * Get spacename
     *
     * @return string 
     */
    public function getSpacename()
    {
        return $this->spacename;
    }

    /**
     * Set spacedescription
     *
     * @param string $spacedescription
     * @return PreCommonMemberFieldHome
     */
    public function setSpacedescription($spacedescription)
    {
        $this->spacedescription = $spacedescription;

        return $this;
    }

    /**
     * Get spacedescription
     *
     * @return string 
     */
    public function getSpacedescription()
    {
        return $this->spacedescription;
    }

    /**
     * Set domain
     *
     * @param string $domain
     * @return PreCommonMemberFieldHome
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string 
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set addsize
     *
     * @param integer $addsize
     * @return PreCommonMemberFieldHome
     */
    public function setAddsize($addsize)
    {
        $this->addsize = $addsize;

        return $this;
    }

    /**
     * Get addsize
     *
     * @return integer 
     */
    public function getAddsize()
    {
        return $this->addsize;
    }

    /**
     * Set addfriend
     *
     * @param integer $addfriend
     * @return PreCommonMemberFieldHome
     */
    public function setAddfriend($addfriend)
    {
        $this->addfriend = $addfriend;

        return $this;
    }

    /**
     * Get addfriend
     *
     * @return integer 
     */
    public function getAddfriend()
    {
        return $this->addfriend;
    }

    /**
     * Set menunum
     *
     * @param integer $menunum
     * @return PreCommonMemberFieldHome
     */
    public function setMenunum($menunum)
    {
        $this->menunum = $menunum;

        return $this;
    }

    /**
     * Get menunum
     *
     * @return integer 
     */
    public function getMenunum()
    {
        return $this->menunum;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return PreCommonMemberFieldHome
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set spacecss
     *
     * @param string $spacecss
     * @return PreCommonMemberFieldHome
     */
    public function setSpacecss($spacecss)
    {
        $this->spacecss = $spacecss;

        return $this;
    }

    /**
     * Get spacecss
     *
     * @return string 
     */
    public function getSpacecss()
    {
        return $this->spacecss;
    }

    /**
     * Set blockposition
     *
     * @param string $blockposition
     * @return PreCommonMemberFieldHome
     */
    public function setBlockposition($blockposition)
    {
        $this->blockposition = $blockposition;

        return $this;
    }

    /**
     * Get blockposition
     *
     * @return string 
     */
    public function getBlockposition()
    {
        return $this->blockposition;
    }

    /**
     * Set recentnote
     *
     * @param string $recentnote
     * @return PreCommonMemberFieldHome
     */
    public function setRecentnote($recentnote)
    {
        $this->recentnote = $recentnote;

        return $this;
    }

    /**
     * Get recentnote
     *
     * @return string 
     */
    public function getRecentnote()
    {
        return $this->recentnote;
    }

    /**
     * Set spacenote
     *
     * @param string $spacenote
     * @return PreCommonMemberFieldHome
     */
    public function setSpacenote($spacenote)
    {
        $this->spacenote = $spacenote;

        return $this;
    }

    /**
     * Get spacenote
     *
     * @return string 
     */
    public function getSpacenote()
    {
        return $this->spacenote;
    }

    /**
     * Set privacy
     *
     * @param string $privacy
     * @return PreCommonMemberFieldHome
     */
    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;

        return $this;
    }

    /**
     * Get privacy
     *
     * @return string 
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }

    /**
     * Set feedfriend
     *
     * @param string $feedfriend
     * @return PreCommonMemberFieldHome
     */
    public function setFeedfriend($feedfriend)
    {
        $this->feedfriend = $feedfriend;

        return $this;
    }

    /**
     * Get feedfriend
     *
     * @return string 
     */
    public function getFeedfriend()
    {
        return $this->feedfriend;
    }

    /**
     * Set acceptemail
     *
     * @param string $acceptemail
     * @return PreCommonMemberFieldHome
     */
    public function setAcceptemail($acceptemail)
    {
        $this->acceptemail = $acceptemail;

        return $this;
    }

    /**
     * Get acceptemail
     *
     * @return string 
     */
    public function getAcceptemail()
    {
        return $this->acceptemail;
    }

    /**
     * Set magicgift
     *
     * @param string $magicgift
     * @return PreCommonMemberFieldHome
     */
    public function setMagicgift($magicgift)
    {
        $this->magicgift = $magicgift;

        return $this;
    }

    /**
     * Get magicgift
     *
     * @return string 
     */
    public function getMagicgift()
    {
        return $this->magicgift;
    }

    /**
     * Set stickblogs
     *
     * @param string $stickblogs
     * @return PreCommonMemberFieldHome
     */
    public function setStickblogs($stickblogs)
    {
        $this->stickblogs = $stickblogs;

        return $this;
    }

    /**
     * Get stickblogs
     *
     * @return string 
     */
    public function getStickblogs()
    {
        return $this->stickblogs;
    }
}
