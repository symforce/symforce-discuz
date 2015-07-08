<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrePortalCategory
 *
 * @ORM\Table(name="pre_portal_category")
 * @ORM\Entity
 */
class PrePortalCategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="catid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $catid;

    /**
     * @var integer
     *
     * @ORM\Column(name="upid", type="integer", nullable=false)
     */
    private $upid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="catname", type="string", length=255, nullable=false)
     */
    private $catname = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="articles", type="integer", nullable=false)
     */
    private $articles = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowcomment", type="boolean", nullable=false)
     */
    private $allowcomment = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="displayorder", type="smallint", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="notinheritedarticle", type="boolean", nullable=false)
     */
    private $notinheritedarticle = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="notinheritedblock", type="boolean", nullable=false)
     */
    private $notinheritedblock = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=255, nullable=false)
     */
    private $domain = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url = '';

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
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="closed", type="boolean", nullable=false)
     */
    private $closed = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="shownav", type="boolean", nullable=false)
     */
    private $shownav = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="seotitle", type="text", nullable=false)
     */
    private $seotitle;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="text", nullable=false)
     */
    private $keyword;

    /**
     * @var string
     *
     * @ORM\Column(name="primaltplname", type="string", length=255, nullable=false)
     */
    private $primaltplname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="articleprimaltplname", type="string", length=255, nullable=false)
     */
    private $articleprimaltplname = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="disallowpublish", type="boolean", nullable=false)
     */
    private $disallowpublish = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="foldername", type="string", length=255, nullable=false)
     */
    private $foldername = '';

    /**
     * @var string
     *
     * @ORM\Column(name="notshowarticlesummay", type="string", length=255, nullable=false)
     */
    private $notshowarticlesummay = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="perpage", type="smallint", nullable=false)
     */
    private $perpage = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxpages", type="smallint", nullable=false)
     */
    private $maxpages = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="noantitheft", type="boolean", nullable=false)
     */
    private $noantitheft = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastpublish", type="integer", nullable=false)
     */
    private $lastpublish = '0';



    /**
     * Get catid
     *
     * @return integer 
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * Set upid
     *
     * @param integer $upid
     * @return PrePortalCategory
     */
    public function setUpid($upid)
    {
        $this->upid = $upid;

        return $this;
    }

    /**
     * Get upid
     *
     * @return integer 
     */
    public function getUpid()
    {
        return $this->upid;
    }

    /**
     * Set catname
     *
     * @param string $catname
     * @return PrePortalCategory
     */
    public function setCatname($catname)
    {
        $this->catname = $catname;

        return $this;
    }

    /**
     * Get catname
     *
     * @return string 
     */
    public function getCatname()
    {
        return $this->catname;
    }

    /**
     * Set articles
     *
     * @param integer $articles
     * @return PrePortalCategory
     */
    public function setArticles($articles)
    {
        $this->articles = $articles;

        return $this;
    }

    /**
     * Get articles
     *
     * @return integer 
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set allowcomment
     *
     * @param boolean $allowcomment
     * @return PrePortalCategory
     */
    public function setAllowcomment($allowcomment)
    {
        $this->allowcomment = $allowcomment;

        return $this;
    }

    /**
     * Get allowcomment
     *
     * @return boolean 
     */
    public function getAllowcomment()
    {
        return $this->allowcomment;
    }

    /**
     * Set displayorder
     *
     * @param integer $displayorder
     * @return PrePortalCategory
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
     * Set notinheritedarticle
     *
     * @param boolean $notinheritedarticle
     * @return PrePortalCategory
     */
    public function setNotinheritedarticle($notinheritedarticle)
    {
        $this->notinheritedarticle = $notinheritedarticle;

        return $this;
    }

    /**
     * Get notinheritedarticle
     *
     * @return boolean 
     */
    public function getNotinheritedarticle()
    {
        return $this->notinheritedarticle;
    }

    /**
     * Set notinheritedblock
     *
     * @param boolean $notinheritedblock
     * @return PrePortalCategory
     */
    public function setNotinheritedblock($notinheritedblock)
    {
        $this->notinheritedblock = $notinheritedblock;

        return $this;
    }

    /**
     * Get notinheritedblock
     *
     * @return boolean 
     */
    public function getNotinheritedblock()
    {
        return $this->notinheritedblock;
    }

    /**
     * Set domain
     *
     * @param string $domain
     * @return PrePortalCategory
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
     * Set url
     *
     * @param string $url
     * @return PrePortalCategory
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
     * Set uid
     *
     * @param integer $uid
     * @return PrePortalCategory
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
     * @return PrePortalCategory
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
     * Set dateline
     *
     * @param integer $dateline
     * @return PrePortalCategory
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
     * Set closed
     *
     * @param boolean $closed
     * @return PrePortalCategory
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;

        return $this;
    }

    /**
     * Get closed
     *
     * @return boolean 
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * Set shownav
     *
     * @param boolean $shownav
     * @return PrePortalCategory
     */
    public function setShownav($shownav)
    {
        $this->shownav = $shownav;

        return $this;
    }

    /**
     * Get shownav
     *
     * @return boolean 
     */
    public function getShownav()
    {
        return $this->shownav;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return PrePortalCategory
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set seotitle
     *
     * @param string $seotitle
     * @return PrePortalCategory
     */
    public function setSeotitle($seotitle)
    {
        $this->seotitle = $seotitle;

        return $this;
    }

    /**
     * Get seotitle
     *
     * @return string 
     */
    public function getSeotitle()
    {
        return $this->seotitle;
    }

    /**
     * Set keyword
     *
     * @param string $keyword
     * @return PrePortalCategory
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string 
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set primaltplname
     *
     * @param string $primaltplname
     * @return PrePortalCategory
     */
    public function setPrimaltplname($primaltplname)
    {
        $this->primaltplname = $primaltplname;

        return $this;
    }

    /**
     * Get primaltplname
     *
     * @return string 
     */
    public function getPrimaltplname()
    {
        return $this->primaltplname;
    }

    /**
     * Set articleprimaltplname
     *
     * @param string $articleprimaltplname
     * @return PrePortalCategory
     */
    public function setArticleprimaltplname($articleprimaltplname)
    {
        $this->articleprimaltplname = $articleprimaltplname;

        return $this;
    }

    /**
     * Get articleprimaltplname
     *
     * @return string 
     */
    public function getArticleprimaltplname()
    {
        return $this->articleprimaltplname;
    }

    /**
     * Set disallowpublish
     *
     * @param boolean $disallowpublish
     * @return PrePortalCategory
     */
    public function setDisallowpublish($disallowpublish)
    {
        $this->disallowpublish = $disallowpublish;

        return $this;
    }

    /**
     * Get disallowpublish
     *
     * @return boolean 
     */
    public function getDisallowpublish()
    {
        return $this->disallowpublish;
    }

    /**
     * Set foldername
     *
     * @param string $foldername
     * @return PrePortalCategory
     */
    public function setFoldername($foldername)
    {
        $this->foldername = $foldername;

        return $this;
    }

    /**
     * Get foldername
     *
     * @return string 
     */
    public function getFoldername()
    {
        return $this->foldername;
    }

    /**
     * Set notshowarticlesummay
     *
     * @param string $notshowarticlesummay
     * @return PrePortalCategory
     */
    public function setNotshowarticlesummay($notshowarticlesummay)
    {
        $this->notshowarticlesummay = $notshowarticlesummay;

        return $this;
    }

    /**
     * Get notshowarticlesummay
     *
     * @return string 
     */
    public function getNotshowarticlesummay()
    {
        return $this->notshowarticlesummay;
    }

    /**
     * Set perpage
     *
     * @param integer $perpage
     * @return PrePortalCategory
     */
    public function setPerpage($perpage)
    {
        $this->perpage = $perpage;

        return $this;
    }

    /**
     * Get perpage
     *
     * @return integer 
     */
    public function getPerpage()
    {
        return $this->perpage;
    }

    /**
     * Set maxpages
     *
     * @param integer $maxpages
     * @return PrePortalCategory
     */
    public function setMaxpages($maxpages)
    {
        $this->maxpages = $maxpages;

        return $this;
    }

    /**
     * Get maxpages
     *
     * @return integer 
     */
    public function getMaxpages()
    {
        return $this->maxpages;
    }

    /**
     * Set noantitheft
     *
     * @param boolean $noantitheft
     * @return PrePortalCategory
     */
    public function setNoantitheft($noantitheft)
    {
        $this->noantitheft = $noantitheft;

        return $this;
    }

    /**
     * Get noantitheft
     *
     * @return boolean 
     */
    public function getNoantitheft()
    {
        return $this->noantitheft;
    }

    /**
     * Set lastpublish
     *
     * @param integer $lastpublish
     * @return PrePortalCategory
     */
    public function setLastpublish($lastpublish)
    {
        $this->lastpublish = $lastpublish;

        return $this;
    }

    /**
     * Get lastpublish
     *
     * @return integer 
     */
    public function getLastpublish()
    {
        return $this->lastpublish;
    }
}
