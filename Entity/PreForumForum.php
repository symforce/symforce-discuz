<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumForum
 *
 * @ORM\Table(name="pre_forum_forum", indexes={@ORM\Index(name="forum", columns={"status", "type", "displayorder"}), @ORM\Index(name="fup_type", columns={"fup", "type", "displayorder"}), @ORM\Index(name="fup", columns={"fup"})})
 * @ORM\Entity
 */
class PreForumForum
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fid;

    /**
     * @var integer
     *
     * @ORM\Column(name="fup", type="integer", nullable=false)
     */
    private $fup = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type = 'forum';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="displayorder", type="smallint", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="styleid", type="smallint", nullable=false)
     */
    private $styleid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="threads", type="integer", nullable=false)
     */
    private $threads = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="posts", type="integer", nullable=false)
     */
    private $posts = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="todayposts", type="integer", nullable=false)
     */
    private $todayposts = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="yesterdayposts", type="integer", nullable=false)
     */
    private $yesterdayposts = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="rank", type="smallint", nullable=false)
     */
    private $rank = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="oldrank", type="smallint", nullable=false)
     */
    private $oldrank = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lastpost", type="string", length=110, nullable=false)
     */
    private $lastpost = '';

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=15, nullable=false)
     */
    private $domain = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowsmilies", type="boolean", nullable=false)
     */
    private $allowsmilies = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowhtml", type="boolean", nullable=false)
     */
    private $allowhtml = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowbbcode", type="boolean", nullable=false)
     */
    private $allowbbcode = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowimgcode", type="boolean", nullable=false)
     */
    private $allowimgcode = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmediacode", type="boolean", nullable=false)
     */
    private $allowmediacode = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowanonymous", type="boolean", nullable=false)
     */
    private $allowanonymous = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="allowpostspecial", type="smallint", nullable=false)
     */
    private $allowpostspecial = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowspecialonly", type="boolean", nullable=false)
     */
    private $allowspecialonly = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowappend", type="boolean", nullable=false)
     */
    private $allowappend = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="alloweditrules", type="boolean", nullable=false)
     */
    private $alloweditrules = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowfeed", type="boolean", nullable=false)
     */
    private $allowfeed = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowside", type="boolean", nullable=false)
     */
    private $allowside = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="recyclebin", type="boolean", nullable=false)
     */
    private $recyclebin = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="modnewposts", type="boolean", nullable=false)
     */
    private $modnewposts = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="jammer", type="boolean", nullable=false)
     */
    private $jammer = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="disablewatermark", type="boolean", nullable=false)
     */
    private $disablewatermark = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="inheritedmod", type="boolean", nullable=false)
     */
    private $inheritedmod = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="autoclose", type="smallint", nullable=false)
     */
    private $autoclose = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="forumcolumns", type="boolean", nullable=false)
     */
    private $forumcolumns = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="catforumcolumns", type="boolean", nullable=false)
     */
    private $catforumcolumns = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="threadcaches", type="boolean", nullable=false)
     */
    private $threadcaches = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="alloweditpost", type="boolean", nullable=false)
     */
    private $alloweditpost = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="simple", type="boolean", nullable=false)
     */
    private $simple = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="modworks", type="boolean", nullable=false)
     */
    private $modworks = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowglobalstick", type="boolean", nullable=false)
     */
    private $allowglobalstick = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="smallint", nullable=false)
     */
    private $level = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="commoncredits", type="integer", nullable=false)
     */
    private $commoncredits = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="archive", type="boolean", nullable=false)
     */
    private $archive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="recommend", type="smallint", nullable=false)
     */
    private $recommend = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="favtimes", type="integer", nullable=false)
     */
    private $favtimes = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sharetimes", type="integer", nullable=false)
     */
    private $sharetimes = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="disablethumb", type="boolean", nullable=false)
     */
    private $disablethumb = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="disablecollect", type="boolean", nullable=false)
     */
    private $disablecollect = '0';

    /**
     * @var \Doctrine\ORM\PersistentCollection
     * @ORM\OneToMany(targetEntity="Symforce\DiscuzBundle\Entity\PreForumForumMedal", mappedBy="forumforum", fetch="EXTRA_LAZY")
     * @ORM\JoinColumn(name="fid", referencedColumnName="fid")
     */
    public $forummedal ;



    /**
     * Get fid
     *
     * @return integer 
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * Set fup
     *
     * @param integer $fup
     * @return PreForumForum
     */
    public function setFup($fup)
    {
        $this->fup = $fup;

        return $this;
    }

    /**
     * Get fup
     *
     * @return integer 
     */
    public function getFup()
    {
        return $this->fup;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return PreForumForum
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
     * Set name
     *
     * @param string $name
     * @return PreForumForum
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
     * Set status
     *
     * @param boolean $status
     * @return PreForumForum
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
     * Set displayorder
     *
     * @param integer $displayorder
     * @return PreForumForum
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
     * Set styleid
     *
     * @param integer $styleid
     * @return PreForumForum
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
     * Set threads
     *
     * @param integer $threads
     * @return PreForumForum
     */
    public function setThreads($threads)
    {
        $this->threads = $threads;

        return $this;
    }

    /**
     * Get threads
     *
     * @return integer 
     */
    public function getThreads()
    {
        return $this->threads;
    }

    /**
     * Set posts
     *
     * @param integer $posts
     * @return PreForumForum
     */
    public function setPosts($posts)
    {
        $this->posts = $posts;

        return $this;
    }

    /**
     * Get posts
     *
     * @return integer 
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * Set todayposts
     *
     * @param integer $todayposts
     * @return PreForumForum
     */
    public function setTodayposts($todayposts)
    {
        $this->todayposts = $todayposts;

        return $this;
    }

    /**
     * Get todayposts
     *
     * @return integer 
     */
    public function getTodayposts()
    {
        return $this->todayposts;
    }

    /**
     * Set yesterdayposts
     *
     * @param integer $yesterdayposts
     * @return PreForumForum
     */
    public function setYesterdayposts($yesterdayposts)
    {
        $this->yesterdayposts = $yesterdayposts;

        return $this;
    }

    /**
     * Get yesterdayposts
     *
     * @return integer 
     */
    public function getYesterdayposts()
    {
        return $this->yesterdayposts;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     * @return PreForumForum
     */
    public function setRank($rank)
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set oldrank
     *
     * @param integer $oldrank
     * @return PreForumForum
     */
    public function setOldrank($oldrank)
    {
        $this->oldrank = $oldrank;

        return $this;
    }

    /**
     * Get oldrank
     *
     * @return integer 
     */
    public function getOldrank()
    {
        return $this->oldrank;
    }

    /**
     * Set lastpost
     *
     * @param string $lastpost
     * @return PreForumForum
     */
    public function setLastpost($lastpost)
    {
        $this->lastpost = $lastpost;

        return $this;
    }

    /**
     * Get lastpost
     *
     * @return string 
     */
    public function getLastpost()
    {
        return $this->lastpost;
    }

    /**
     * Set domain
     *
     * @param string $domain
     * @return PreForumForum
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
     * Set allowsmilies
     *
     * @param boolean $allowsmilies
     * @return PreForumForum
     */
    public function setAllowsmilies($allowsmilies)
    {
        $this->allowsmilies = $allowsmilies;

        return $this;
    }

    /**
     * Get allowsmilies
     *
     * @return boolean 
     */
    public function getAllowsmilies()
    {
        return $this->allowsmilies;
    }

    /**
     * Set allowhtml
     *
     * @param boolean $allowhtml
     * @return PreForumForum
     */
    public function setAllowhtml($allowhtml)
    {
        $this->allowhtml = $allowhtml;

        return $this;
    }

    /**
     * Get allowhtml
     *
     * @return boolean 
     */
    public function getAllowhtml()
    {
        return $this->allowhtml;
    }

    /**
     * Set allowbbcode
     *
     * @param boolean $allowbbcode
     * @return PreForumForum
     */
    public function setAllowbbcode($allowbbcode)
    {
        $this->allowbbcode = $allowbbcode;

        return $this;
    }

    /**
     * Get allowbbcode
     *
     * @return boolean 
     */
    public function getAllowbbcode()
    {
        return $this->allowbbcode;
    }

    /**
     * Set allowimgcode
     *
     * @param boolean $allowimgcode
     * @return PreForumForum
     */
    public function setAllowimgcode($allowimgcode)
    {
        $this->allowimgcode = $allowimgcode;

        return $this;
    }

    /**
     * Get allowimgcode
     *
     * @return boolean 
     */
    public function getAllowimgcode()
    {
        return $this->allowimgcode;
    }

    /**
     * Set allowmediacode
     *
     * @param boolean $allowmediacode
     * @return PreForumForum
     */
    public function setAllowmediacode($allowmediacode)
    {
        $this->allowmediacode = $allowmediacode;

        return $this;
    }

    /**
     * Get allowmediacode
     *
     * @return boolean 
     */
    public function getAllowmediacode()
    {
        return $this->allowmediacode;
    }

    /**
     * Set allowanonymous
     *
     * @param boolean $allowanonymous
     * @return PreForumForum
     */
    public function setAllowanonymous($allowanonymous)
    {
        $this->allowanonymous = $allowanonymous;

        return $this;
    }

    /**
     * Get allowanonymous
     *
     * @return boolean 
     */
    public function getAllowanonymous()
    {
        return $this->allowanonymous;
    }

    /**
     * Set allowpostspecial
     *
     * @param integer $allowpostspecial
     * @return PreForumForum
     */
    public function setAllowpostspecial($allowpostspecial)
    {
        $this->allowpostspecial = $allowpostspecial;

        return $this;
    }

    /**
     * Get allowpostspecial
     *
     * @return integer 
     */
    public function getAllowpostspecial()
    {
        return $this->allowpostspecial;
    }

    /**
     * Set allowspecialonly
     *
     * @param boolean $allowspecialonly
     * @return PreForumForum
     */
    public function setAllowspecialonly($allowspecialonly)
    {
        $this->allowspecialonly = $allowspecialonly;

        return $this;
    }

    /**
     * Get allowspecialonly
     *
     * @return boolean 
     */
    public function getAllowspecialonly()
    {
        return $this->allowspecialonly;
    }

    /**
     * Set allowappend
     *
     * @param boolean $allowappend
     * @return PreForumForum
     */
    public function setAllowappend($allowappend)
    {
        $this->allowappend = $allowappend;

        return $this;
    }

    /**
     * Get allowappend
     *
     * @return boolean 
     */
    public function getAllowappend()
    {
        return $this->allowappend;
    }

    /**
     * Set alloweditrules
     *
     * @param boolean $alloweditrules
     * @return PreForumForum
     */
    public function setAlloweditrules($alloweditrules)
    {
        $this->alloweditrules = $alloweditrules;

        return $this;
    }

    /**
     * Get alloweditrules
     *
     * @return boolean 
     */
    public function getAlloweditrules()
    {
        return $this->alloweditrules;
    }

    /**
     * Set allowfeed
     *
     * @param boolean $allowfeed
     * @return PreForumForum
     */
    public function setAllowfeed($allowfeed)
    {
        $this->allowfeed = $allowfeed;

        return $this;
    }

    /**
     * Get allowfeed
     *
     * @return boolean 
     */
    public function getAllowfeed()
    {
        return $this->allowfeed;
    }

    /**
     * Set allowside
     *
     * @param boolean $allowside
     * @return PreForumForum
     */
    public function setAllowside($allowside)
    {
        $this->allowside = $allowside;

        return $this;
    }

    /**
     * Get allowside
     *
     * @return boolean 
     */
    public function getAllowside()
    {
        return $this->allowside;
    }

    /**
     * Set recyclebin
     *
     * @param boolean $recyclebin
     * @return PreForumForum
     */
    public function setRecyclebin($recyclebin)
    {
        $this->recyclebin = $recyclebin;

        return $this;
    }

    /**
     * Get recyclebin
     *
     * @return boolean 
     */
    public function getRecyclebin()
    {
        return $this->recyclebin;
    }

    /**
     * Set modnewposts
     *
     * @param boolean $modnewposts
     * @return PreForumForum
     */
    public function setModnewposts($modnewposts)
    {
        $this->modnewposts = $modnewposts;

        return $this;
    }

    /**
     * Get modnewposts
     *
     * @return boolean 
     */
    public function getModnewposts()
    {
        return $this->modnewposts;
    }

    /**
     * Set jammer
     *
     * @param boolean $jammer
     * @return PreForumForum
     */
    public function setJammer($jammer)
    {
        $this->jammer = $jammer;

        return $this;
    }

    /**
     * Get jammer
     *
     * @return boolean 
     */
    public function getJammer()
    {
        return $this->jammer;
    }

    /**
     * Set disablewatermark
     *
     * @param boolean $disablewatermark
     * @return PreForumForum
     */
    public function setDisablewatermark($disablewatermark)
    {
        $this->disablewatermark = $disablewatermark;

        return $this;
    }

    /**
     * Get disablewatermark
     *
     * @return boolean 
     */
    public function getDisablewatermark()
    {
        return $this->disablewatermark;
    }

    /**
     * Set inheritedmod
     *
     * @param boolean $inheritedmod
     * @return PreForumForum
     */
    public function setInheritedmod($inheritedmod)
    {
        $this->inheritedmod = $inheritedmod;

        return $this;
    }

    /**
     * Get inheritedmod
     *
     * @return boolean 
     */
    public function getInheritedmod()
    {
        return $this->inheritedmod;
    }

    /**
     * Set autoclose
     *
     * @param integer $autoclose
     * @return PreForumForum
     */
    public function setAutoclose($autoclose)
    {
        $this->autoclose = $autoclose;

        return $this;
    }

    /**
     * Get autoclose
     *
     * @return integer 
     */
    public function getAutoclose()
    {
        return $this->autoclose;
    }

    /**
     * Set forumcolumns
     *
     * @param boolean $forumcolumns
     * @return PreForumForum
     */
    public function setForumcolumns($forumcolumns)
    {
        $this->forumcolumns = $forumcolumns;

        return $this;
    }

    /**
     * Get forumcolumns
     *
     * @return boolean 
     */
    public function getForumcolumns()
    {
        return $this->forumcolumns;
    }

    /**
     * Set catforumcolumns
     *
     * @param boolean $catforumcolumns
     * @return PreForumForum
     */
    public function setCatforumcolumns($catforumcolumns)
    {
        $this->catforumcolumns = $catforumcolumns;

        return $this;
    }

    /**
     * Get catforumcolumns
     *
     * @return boolean 
     */
    public function getCatforumcolumns()
    {
        return $this->catforumcolumns;
    }

    /**
     * Set threadcaches
     *
     * @param boolean $threadcaches
     * @return PreForumForum
     */
    public function setThreadcaches($threadcaches)
    {
        $this->threadcaches = $threadcaches;

        return $this;
    }

    /**
     * Get threadcaches
     *
     * @return boolean 
     */
    public function getThreadcaches()
    {
        return $this->threadcaches;
    }

    /**
     * Set alloweditpost
     *
     * @param boolean $alloweditpost
     * @return PreForumForum
     */
    public function setAlloweditpost($alloweditpost)
    {
        $this->alloweditpost = $alloweditpost;

        return $this;
    }

    /**
     * Get alloweditpost
     *
     * @return boolean 
     */
    public function getAlloweditpost()
    {
        return $this->alloweditpost;
    }

    /**
     * Set simple
     *
     * @param boolean $simple
     * @return PreForumForum
     */
    public function setSimple($simple)
    {
        $this->simple = $simple;

        return $this;
    }

    /**
     * Get simple
     *
     * @return boolean 
     */
    public function getSimple()
    {
        return $this->simple;
    }

    /**
     * Set modworks
     *
     * @param boolean $modworks
     * @return PreForumForum
     */
    public function setModworks($modworks)
    {
        $this->modworks = $modworks;

        return $this;
    }

    /**
     * Get modworks
     *
     * @return boolean 
     */
    public function getModworks()
    {
        return $this->modworks;
    }

    /**
     * Set allowglobalstick
     *
     * @param boolean $allowglobalstick
     * @return PreForumForum
     */
    public function setAllowglobalstick($allowglobalstick)
    {
        $this->allowglobalstick = $allowglobalstick;

        return $this;
    }

    /**
     * Get allowglobalstick
     *
     * @return boolean 
     */
    public function getAllowglobalstick()
    {
        return $this->allowglobalstick;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return PreForumForum
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set commoncredits
     *
     * @param integer $commoncredits
     * @return PreForumForum
     */
    public function setCommoncredits($commoncredits)
    {
        $this->commoncredits = $commoncredits;

        return $this;
    }

    /**
     * Get commoncredits
     *
     * @return integer 
     */
    public function getCommoncredits()
    {
        return $this->commoncredits;
    }

    /**
     * Set archive
     *
     * @param boolean $archive
     * @return PreForumForum
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;

        return $this;
    }

    /**
     * Get archive
     *
     * @return boolean 
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * Set recommend
     *
     * @param integer $recommend
     * @return PreForumForum
     */
    public function setRecommend($recommend)
    {
        $this->recommend = $recommend;

        return $this;
    }

    /**
     * Get recommend
     *
     * @return integer 
     */
    public function getRecommend()
    {
        return $this->recommend;
    }

    /**
     * Set favtimes
     *
     * @param integer $favtimes
     * @return PreForumForum
     */
    public function setFavtimes($favtimes)
    {
        $this->favtimes = $favtimes;

        return $this;
    }

    /**
     * Get favtimes
     *
     * @return integer 
     */
    public function getFavtimes()
    {
        return $this->favtimes;
    }

    /**
     * Set sharetimes
     *
     * @param integer $sharetimes
     * @return PreForumForum
     */
    public function setSharetimes($sharetimes)
    {
        $this->sharetimes = $sharetimes;

        return $this;
    }

    /**
     * Get sharetimes
     *
     * @return integer 
     */
    public function getSharetimes()
    {
        return $this->sharetimes;
    }

    /**
     * Set disablethumb
     *
     * @param boolean $disablethumb
     * @return PreForumForum
     */
    public function setDisablethumb($disablethumb)
    {
        $this->disablethumb = $disablethumb;

        return $this;
    }

    /**
     * Get disablethumb
     *
     * @return boolean 
     */
    public function getDisablethumb()
    {
        return $this->disablethumb;
    }

    /**
     * Set disablecollect
     *
     * @param boolean $disablecollect
     * @return PreForumForum
     */
    public function setDisablecollect($disablecollect)
    {
        $this->disablecollect = $disablecollect;

        return $this;
    }

    /**
     * Get disablecollect
     *
     * @return boolean 
     */
    public function getDisablecollect()
    {
        return $this->disablecollect;
    }
}
