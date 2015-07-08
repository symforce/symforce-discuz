<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonBlock
 *
 * @ORM\Table(name="pre_common_block")
 * @ORM\Entity
 */
class PreCommonBlock
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bid;

    /**
     * @var string
     *
     * @ORM\Column(name="blockclass", type="string", length=255, nullable=false)
     */
    private $blockclass = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="blocktype", type="boolean", nullable=false)
     */
    private $blocktype = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="classname", type="string", length=255, nullable=false)
     */
    private $classname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", nullable=false)
     */
    private $summary;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="styleid", type="smallint", nullable=false)
     */
    private $styleid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="blockstyle", type="text", nullable=false)
     */
    private $blockstyle;

    /**
     * @var integer
     *
     * @ORM\Column(name="picwidth", type="smallint", nullable=false)
     */
    private $picwidth = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="picheight", type="smallint", nullable=false)
     */
    private $picheight = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="target", type="string", length=255, nullable=false)
     */
    private $target = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dateformat", type="string", length=255, nullable=false)
     */
    private $dateformat = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="dateuformat", type="boolean", nullable=false)
     */
    private $dateuformat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="script", type="string", length=255, nullable=false)
     */
    private $script = '';

    /**
     * @var string
     *
     * @ORM\Column(name="param", type="text", nullable=false)
     */
    private $param;

    /**
     * @var integer
     *
     * @ORM\Column(name="shownum", type="smallint", nullable=false)
     */
    private $shownum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cachetime", type="integer", nullable=false)
     */
    private $cachetime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cachetimerange", type="string", length=5, nullable=false)
     */
    private $cachetimerange = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="punctualupdate", type="boolean", nullable=false)
     */
    private $punctualupdate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="hidedisplay", type="boolean", nullable=false)
     */
    private $hidedisplay = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="notinherited", type="boolean", nullable=false)
     */
    private $notinherited = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="isblank", type="boolean", nullable=false)
     */
    private $isblank = '0';



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
     * Set blockclass
     *
     * @param string $blockclass
     * @return PreCommonBlock
     */
    public function setBlockclass($blockclass)
    {
        $this->blockclass = $blockclass;

        return $this;
    }

    /**
     * Get blockclass
     *
     * @return string 
     */
    public function getBlockclass()
    {
        return $this->blockclass;
    }

    /**
     * Set blocktype
     *
     * @param boolean $blocktype
     * @return PreCommonBlock
     */
    public function setBlocktype($blocktype)
    {
        $this->blocktype = $blocktype;

        return $this;
    }

    /**
     * Get blocktype
     *
     * @return boolean 
     */
    public function getBlocktype()
    {
        return $this->blocktype;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return PreCommonBlock
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
     * @return PreCommonBlock
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
     * Set classname
     *
     * @param string $classname
     * @return PreCommonBlock
     */
    public function setClassname($classname)
    {
        $this->classname = $classname;

        return $this;
    }

    /**
     * Get classname
     *
     * @return string 
     */
    public function getClassname()
    {
        return $this->classname;
    }

    /**
     * Set summary
     *
     * @param string $summary
     * @return PreCommonBlock
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
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonBlock
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

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
     * Set username
     *
     * @param string $username
     * @return PreCommonBlock
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
     * Set styleid
     *
     * @param integer $styleid
     * @return PreCommonBlock
     */
    public function setStyleid($styleid)
    {
        $this->styleid = $styleid;

        return $this;
    }

    /**
     * Get styleid
     *
     * @return integer 
     */
    public function getStyleid()
    {
        return $this->styleid;
    }

    /**
     * Set blockstyle
     *
     * @param string $blockstyle
     * @return PreCommonBlock
     */
    public function setBlockstyle($blockstyle)
    {
        $this->blockstyle = $blockstyle;

        return $this;
    }

    /**
     * Get blockstyle
     *
     * @return string 
     */
    public function getBlockstyle()
    {
        return $this->blockstyle;
    }

    /**
     * Set picwidth
     *
     * @param integer $picwidth
     * @return PreCommonBlock
     */
    public function setPicwidth($picwidth)
    {
        $this->picwidth = $picwidth;

        return $this;
    }

    /**
     * Get picwidth
     *
     * @return integer 
     */
    public function getPicwidth()
    {
        return $this->picwidth;
    }

    /**
     * Set picheight
     *
     * @param integer $picheight
     * @return PreCommonBlock
     */
    public function setPicheight($picheight)
    {
        $this->picheight = $picheight;

        return $this;
    }

    /**
     * Get picheight
     *
     * @return integer 
     */
    public function getPicheight()
    {
        return $this->picheight;
    }

    /**
     * Set target
     *
     * @param string $target
     * @return PreCommonBlock
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set dateformat
     *
     * @param string $dateformat
     * @return PreCommonBlock
     */
    public function setDateformat($dateformat)
    {
        $this->dateformat = $dateformat;

        return $this;
    }

    /**
     * Get dateformat
     *
     * @return string 
     */
    public function getDateformat()
    {
        return $this->dateformat;
    }

    /**
     * Set dateuformat
     *
     * @param boolean $dateuformat
     * @return PreCommonBlock
     */
    public function setDateuformat($dateuformat)
    {
        $this->dateuformat = $dateuformat;

        return $this;
    }

    /**
     * Get dateuformat
     *
     * @return boolean 
     */
    public function getDateuformat()
    {
        return $this->dateuformat;
    }

    /**
     * Set script
     *
     * @param string $script
     * @return PreCommonBlock
     */
    public function setScript($script)
    {
        $this->script = $script;

        return $this;
    }

    /**
     * Get script
     *
     * @return string 
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Set param
     *
     * @param string $param
     * @return PreCommonBlock
     */
    public function setParam($param)
    {
        $this->param = $param;

        return $this;
    }

    /**
     * Get param
     *
     * @return string 
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * Set shownum
     *
     * @param integer $shownum
     * @return PreCommonBlock
     */
    public function setShownum($shownum)
    {
        $this->shownum = $shownum;

        return $this;
    }

    /**
     * Get shownum
     *
     * @return integer 
     */
    public function getShownum()
    {
        return $this->shownum;
    }

    /**
     * Set cachetime
     *
     * @param integer $cachetime
     * @return PreCommonBlock
     */
    public function setCachetime($cachetime)
    {
        $this->cachetime = $cachetime;

        return $this;
    }

    /**
     * Get cachetime
     *
     * @return integer 
     */
    public function getCachetime()
    {
        return $this->cachetime;
    }

    /**
     * Set cachetimerange
     *
     * @param string $cachetimerange
     * @return PreCommonBlock
     */
    public function setCachetimerange($cachetimerange)
    {
        $this->cachetimerange = $cachetimerange;

        return $this;
    }

    /**
     * Get cachetimerange
     *
     * @return string 
     */
    public function getCachetimerange()
    {
        return $this->cachetimerange;
    }

    /**
     * Set punctualupdate
     *
     * @param boolean $punctualupdate
     * @return PreCommonBlock
     */
    public function setPunctualupdate($punctualupdate)
    {
        $this->punctualupdate = $punctualupdate;

        return $this;
    }

    /**
     * Get punctualupdate
     *
     * @return boolean 
     */
    public function getPunctualupdate()
    {
        return $this->punctualupdate;
    }

    /**
     * Set hidedisplay
     *
     * @param boolean $hidedisplay
     * @return PreCommonBlock
     */
    public function setHidedisplay($hidedisplay)
    {
        $this->hidedisplay = $hidedisplay;

        return $this;
    }

    /**
     * Get hidedisplay
     *
     * @return boolean 
     */
    public function getHidedisplay()
    {
        return $this->hidedisplay;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonBlock
     */
    public function setDateline($dateline)
    {
        $this->dateline = $dateline;

        return $this;
    }

    /**
     * Get dateline
     *
     * @return integer 
     */
    public function getDateline()
    {
        return $this->dateline;
    }

    /**
     * Set notinherited
     *
     * @param boolean $notinherited
     * @return PreCommonBlock
     */
    public function setNotinherited($notinherited)
    {
        $this->notinherited = $notinherited;

        return $this;
    }

    /**
     * Get notinherited
     *
     * @return boolean 
     */
    public function getNotinherited()
    {
        return $this->notinherited;
    }

    /**
     * Set isblank
     *
     * @param boolean $isblank
     * @return PreCommonBlock
     */
    public function setIsblank($isblank)
    {
        $this->isblank = $isblank;

        return $this;
    }

    /**
     * Get isblank
     *
     * @return boolean 
     */
    public function getIsblank()
    {
        return $this->isblank;
    }
}
