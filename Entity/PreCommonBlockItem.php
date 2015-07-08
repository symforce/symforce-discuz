<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonBlockItem
 *
 * @ORM\Table(name="pre_common_block_item", indexes={@ORM\Index(name="bid", columns={"bid"})})
 * @ORM\Entity
 */
class PreCommonBlockItem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="itemid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemid;

    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=false)
     */
    private $bid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="idtype", type="string", length=255, nullable=false)
     */
    private $idtype = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="itemtype", type="boolean", nullable=false)
     */
    private $itemtype = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pic", type="string", length=255, nullable=false)
     */
    private $pic = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="picflag", type="boolean", nullable=false)
     */
    private $picflag = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="makethumb", type="boolean", nullable=false)
     */
    private $makethumb = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="thumbpath", type="string", length=255, nullable=false)
     */
    private $thumbpath = '';

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", nullable=false)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="showstyle", type="text", nullable=false)
     */
    private $showstyle;

    /**
     * @var string
     *
     * @ORM\Column(name="related", type="text", nullable=false)
     */
    private $related;

    /**
     * @var string
     *
     * @ORM\Column(name="fields", type="text", nullable=false)
     */
    private $fields;

    /**
     * @var integer
     *
     * @ORM\Column(name="displayorder", type="smallint", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="startdate", type="integer", nullable=false)
     */
    private $startdate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="enddate", type="integer", nullable=false)
     */
    private $enddate = '0';



    /**
     * Get itemid
     *
     * @return integer 
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set bid
     *
     * @param integer $bid
     * @return PreCommonBlockItem
     */
    public function setBid($bid)
    {
        $this->bid = $bid;

        return $this;
    }

    /**
     * Get bid
     *
     * @return integer 
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return PreCommonBlockItem
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set idtype
     *
     * @param string $idtype
     * @return PreCommonBlockItem
     */
    public function setIdtype($idtype)
    {
        $this->idtype = $idtype;

        return $this;
    }

    /**
     * Get idtype
     *
     * @return string 
     */
    public function getIdtype()
    {
        return $this->idtype;
    }

    /**
     * Set itemtype
     *
     * @param boolean $itemtype
     * @return PreCommonBlockItem
     */
    public function setItemtype($itemtype)
    {
        $this->itemtype = $itemtype;

        return $this;
    }

    /**
     * Get itemtype
     *
     * @return boolean 
     */
    public function getItemtype()
    {
        return $this->itemtype;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return PreCommonBlockItem
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
     * @return PreCommonBlockItem
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
     * Set pic
     *
     * @param string $pic
     * @return PreCommonBlockItem
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get pic
     *
     * @return string 
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Set picflag
     *
     * @param boolean $picflag
     * @return PreCommonBlockItem
     */
    public function setPicflag($picflag)
    {
        $this->picflag = $picflag;

        return $this;
    }

    /**
     * Get picflag
     *
     * @return boolean 
     */
    public function getPicflag()
    {
        return $this->picflag;
    }

    /**
     * Set makethumb
     *
     * @param boolean $makethumb
     * @return PreCommonBlockItem
     */
    public function setMakethumb($makethumb)
    {
        $this->makethumb = $makethumb;

        return $this;
    }

    /**
     * Get makethumb
     *
     * @return boolean 
     */
    public function getMakethumb()
    {
        return $this->makethumb;
    }

    /**
     * Set thumbpath
     *
     * @param string $thumbpath
     * @return PreCommonBlockItem
     */
    public function setThumbpath($thumbpath)
    {
        $this->thumbpath = $thumbpath;

        return $this;
    }

    /**
     * Get thumbpath
     *
     * @return string 
     */
    public function getThumbpath()
    {
        return $this->thumbpath;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return PreCommonBlockItem
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get summary
     *
     * @return string 
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Set showstyle
     *
     * @param string $showstyle
     * @return PreCommonBlockItem
     */
    public function setShowstyle($showstyle)
    {
        $this->showstyle = $showstyle;

        return $this;
    }

    /**
     * Get showstyle
     *
     * @return string 
     */
    public function getShowstyle()
    {
        return $this->showstyle;
    }

    /**
     * Set related
     *
     * @param string $related
     * @return PreCommonBlockItem
     */
    public function setRelated($related)
    {
        $this->related = $related;

        return $this;
    }

    /**
     * Get related
     *
     * @return string 
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * Set fields
     *
     * @param string $fields
     * @return PreCommonBlockItem
     */
    public function setFields($fields)
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Get fields
     *
     * @return string 
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Set displayorder
     *
     * @param integer $displayorder
     * @return PreCommonBlockItem
     */
    public function setDisplayorder($displayorder)
    {
        $this->displayorder = $displayorder;

        return $this;
    }

    /**
     * Get displayorder
     *
     * @return integer 
     */
    public function getDisplayorder()
    {
        return $this->displayorder;
    }

    /**
     * Set startdate
     *
     * @param integer $startdate
     * @return PreCommonBlockItem
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return integer 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param integer $enddate
     * @return PreCommonBlockItem
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return integer 
     */
    public function getEnddate()
    {
        return $this->enddate;
    }
}
