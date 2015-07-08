<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonNav
 *
 * @ORM\Table(name="pre_common_nav", indexes={@ORM\Index(name="navtype", columns={"navtype"})})
 * @ORM\Entity
 */
class PreCommonNav
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="parentid", type="smallint", nullable=false)
     */
    private $parentid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="identifier", type="string", length=255, nullable=false)
     */
    private $identifier;

    /**
     * @var boolean
     *
     * @ORM\Column(name="target", type="boolean", nullable=false)
     */
    private $target = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="available", type="boolean", nullable=false)
     */
    private $available = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="displayorder", type="boolean", nullable=false)
     */
    private $displayorder;

    /**
     * @var boolean
     *
     * @ORM\Column(name="highlight", type="boolean", nullable=false)
     */
    private $highlight = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="level", type="boolean", nullable=false)
     */
    private $level = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="subtype", type="boolean", nullable=false)
     */
    private $subtype = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="subcols", type="boolean", nullable=false)
     */
    private $subcols = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255, nullable=false)
     */
    private $icon;

    /**
     * @var string
     *
     * @ORM\Column(name="subname", type="string", length=255, nullable=false)
     */
    private $subname;

    /**
     * @var string
     *
     * @ORM\Column(name="suburl", type="string", length=255, nullable=false)
     */
    private $suburl;

    /**
     * @var boolean
     *
     * @ORM\Column(name="navtype", type="boolean", nullable=false)
     */
    private $navtype = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=false)
     */
    private $logo;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set parentid
     *
     * @param integer $parentid
     * @return PreCommonNav
     */
    public function setParentid($parentid)
    {
        $this->parentid = $parentid;

        return $this;
    }

    /**
     * Get parentid
     *
     * @return integer 
     */
    public function getParentid()
    {
        return $this->parentid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return PreCommonNav
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return PreCommonNav
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return PreCommonNav
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set identifier
     *
     * @param string $identifier
     * @return PreCommonNav
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Get identifier
     *
     * @return string 
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set target
     *
     * @param boolean $target
     * @return PreCommonNav
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return boolean 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return PreCommonNav
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set available
     *
     * @param boolean $available
     * @return PreCommonNav
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return boolean 
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * Set displayorder
     *
     * @param boolean $displayorder
     * @return PreCommonNav
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;

        return $this;
    }

    /**
     * Get displayorder
     *
     * @return boolean 
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * Set highlight
     *
     * @param boolean $highlight
     * @return PreCommonNav
     */
    public function setHighlight($highlight)
    {
        $this->highlight = $highlight;

        return $this;
    }

    /**
     * Get highlight
     *
     * @return boolean 
     */
    public function getHighlight()
    {
        return $this->highlight;
    }

    /**
     * Set level
     *
     * @param boolean $level
     * @return PreCommonNav
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return boolean 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set subtype
     *
     * @param boolean $subtype
     * @return PreCommonNav
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;

        return $this;
    }

    /**
     * Get subtype
     *
     * @return boolean 
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Set subcols
     *
     * @param boolean $subcols
     * @return PreCommonNav
     */
    public function setSubcols($subcols)
    {
        $this->subcols = $subcols;

        return $this;
    }

    /**
     * Get subcols
     *
     * @return boolean 
     */
    public function getSubcols()
    {
        return $this->subcols;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return PreCommonNav
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
     * Set subname
     *
     * @param string $subname
     * @return PreCommonNav
     */
    public function setSubname($subname)
    {
        $this->subname = $subname;

        return $this;
    }

    /**
     * Get subname
     *
     * @return string 
     */
    public function getSubname()
    {
        return $this->subname;
    }

    /**
     * Set suburl
     *
     * @param string $suburl
     * @return PreCommonNav
     */
    public function setSuburl($suburl)
    {
        $this->suburl = $suburl;

        return $this;
    }

    /**
     * Get suburl
     *
     * @return string 
     */
    public function getSuburl()
    {
        return $this->suburl;
    }

    /**
     * Set navtype
     *
     * @param boolean $navtype
     * @return PreCommonNav
     */
    public function setNavtype($navtype)
    {
        $this->navtype = $navtype;

        return $this;
    }

    /**
     * Get navtype
     *
     * @return boolean 
     */
    public function getNavtype()
    {
        return $this->navtype;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return PreCommonNav
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }
}
