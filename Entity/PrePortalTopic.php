<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrePortalTopic
 *
 * @ORM\Table(name="pre_portal_topic", indexes={@ORM\Index(name="name", columns={"name"})})
 * @ORM\Entity
 */
class PrePortalTopic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="topicid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $topicid;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=255, nullable=false)
     */
    private $domain = '';

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", nullable=false)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="text", nullable=false)
     */
    private $keyword;

    /**
     * @var string
     *
     * @ORM\Column(name="cover", type="string", length=255, nullable=false)
     */
    private $cover = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="picflag", type="boolean", nullable=false)
     */
    private $picflag = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="primaltplname", type="string", length=255, nullable=false)
     */
    private $primaltplname = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="useheader", type="boolean", nullable=false)
     */
    private $useheader = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="usefooter", type="boolean", nullable=false)
     */
    private $usefooter = '0';

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
     * @ORM\Column(name="viewnum", type="integer", nullable=false)
     */
    private $viewnum = '0';

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
     * @ORM\Column(name="allowcomment", type="boolean", nullable=false)
     */
    private $allowcomment = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="commentnum", type="integer", nullable=false)
     */
    private $commentnum = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="htmlmade", type="boolean", nullable=false)
     */
    private $htmlmade = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="htmldir", type="string", length=255, nullable=false)
     */
    private $htmldir = '';



    /**
     * Get topicid
     *
     * @return integer 
     */
    public function getTopicid()
    {
        return $this->topicid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return PrePortalTopic
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
     * Set name
     *
     * @param string $name
     * @return PrePortalTopic
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
     * Set domain
     *
     * @param string $domain
     * @return PrePortalTopic
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
     * Set summary
     *
     * @param string $summary
     * @return PrePortalTopic
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
     * Set keyword
     *
     * @param string $keyword
     * @return PrePortalTopic
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
     * Set cover
     *
     * @param string $cover
     * @return PrePortalTopic
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return string 
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set picflag
     *
     * @param boolean $picflag
     * @return PrePortalTopic
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
     * Set primaltplname
     *
     * @param string $primaltplname
     * @return PrePortalTopic
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
     * Set useheader
     *
     * @param boolean $useheader
     * @return PrePortalTopic
     */
    public function setUseheader($useheader)
    {
        $this->useheader = $useheader;

        return $this;
    }

    /**
     * Get useheader
     *
     * @return boolean 
     */
    public function getUseheader()
    {
        return $this->useheader;
    }

    /**
     * Set usefooter
     *
     * @param boolean $usefooter
     * @return PrePortalTopic
     */
    public function setUsefooter($usefooter)
    {
        $this->usefooter = $usefooter;

        return $this;
    }

    /**
     * Get usefooter
     *
     * @return boolean 
     */
    public function getUsefooter()
    {
        return $this->usefooter;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PrePortalTopic
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
     * @return PrePortalTopic
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
     * Set viewnum
     *
     * @param integer $viewnum
     * @return PrePortalTopic
     */
    public function setViewnum($viewnum)
    {
        $this->viewnum = $viewnum;

        return $this;
    }

    /**
     * Get viewnum
     *
     * @return integer 
     */
    public function getViewnum()
    {
        return $this->viewnum;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PrePortalTopic
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
     * @return PrePortalTopic
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
     * Set allowcomment
     *
     * @param boolean $allowcomment
     * @return PrePortalTopic
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
     * Set commentnum
     *
     * @param integer $commentnum
     * @return PrePortalTopic
     */
    public function setCommentnum($commentnum)
    {
        $this->commentnum = $commentnum;

        return $this;
    }

    /**
     * Get commentnum
     *
     * @return integer 
     */
    public function getCommentnum()
    {
        return $this->commentnum;
    }

    /**
     * Set htmlmade
     *
     * @param boolean $htmlmade
     * @return PrePortalTopic
     */
    public function setHtmlmade($htmlmade)
    {
        $this->htmlmade = $htmlmade;

        return $this;
    }

    /**
     * Get htmlmade
     *
     * @return boolean 
     */
    public function getHtmlmade()
    {
        return $this->htmlmade;
    }

    /**
     * Set htmldir
     *
     * @param string $htmldir
     * @return PrePortalTopic
     */
    public function setHtmldir($htmldir)
    {
        $this->htmldir = $htmldir;

        return $this;
    }

    /**
     * Get htmldir
     *
     * @return string 
     */
    public function getHtmldir()
    {
        return $this->htmldir;
    }
}
