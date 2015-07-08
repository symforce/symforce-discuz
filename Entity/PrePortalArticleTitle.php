<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrePortalArticleTitle
 *
 * @ORM\Table(name="pre_portal_article_title", indexes={@ORM\Index(name="catid", columns={"catid", "dateline"})})
 * @ORM\Entity
 */
class PrePortalArticleTitle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="aid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $aid;

    /**
     * @var integer
     *
     * @ORM\Column(name="catid", type="integer", nullable=false)
     */
    private $catid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=false)
     */
    private $bid = '0';

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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="highlight", type="string", length=255, nullable=false)
     */
    private $highlight = '';

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255, nullable=false)
     */
    private $author = '';

    /**
     * @var string
     *
     * @ORM\Column(name="from", type="string", length=255, nullable=false)
     */
    private $from = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fromurl", type="string", length=255, nullable=false)
     */
    private $fromurl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url = '';

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="string", length=255, nullable=false)
     */
    private $summary = '';

    /**
     * @var string
     *
     * @ORM\Column(name="pic", type="string", length=255, nullable=false)
     */
    private $pic = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="thumb", type="boolean", nullable=false)
     */
    private $thumb = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="remote", type="boolean", nullable=false)
     */
    private $remote = '0';

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
     * @var integer
     *
     * @ORM\Column(name="contents", type="smallint", nullable=false)
     */
    private $contents = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowcomment", type="boolean", nullable=false)
     */
    private $allowcomment = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="owncomment", type="boolean", nullable=false)
     */
    private $owncomment = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click1", type="smallint", nullable=false)
     */
    private $click1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click2", type="smallint", nullable=false)
     */
    private $click2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click3", type="smallint", nullable=false)
     */
    private $click3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click4", type="smallint", nullable=false)
     */
    private $click4 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click5", type="smallint", nullable=false)
     */
    private $click5 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click6", type="smallint", nullable=false)
     */
    private $click6 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click7", type="smallint", nullable=false)
     */
    private $click7 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click8", type="smallint", nullable=false)
     */
    private $click8 = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="tag", type="boolean", nullable=false)
     */
    private $tag = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="showinnernav", type="boolean", nullable=false)
     */
    private $showinnernav = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="preaid", type="integer", nullable=false)
     */
    private $preaid;

    /**
     * @var integer
     *
     * @ORM\Column(name="nextaid", type="integer", nullable=false)
     */
    private $nextaid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="htmlmade", type="boolean", nullable=false)
     */
    private $htmlmade = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="htmlname", type="string", length=255, nullable=false)
     */
    private $htmlname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="htmldir", type="string", length=255, nullable=false)
     */
    private $htmldir = '';



    /**
     * Get aid
     *
     * @return integer 
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set catid
     *
     * @param integer $catid
     * @return PrePortalArticleTitle
     */
    public function setCatid($catid)
    {
        $this->catid = $catid;

        return $this;
    }

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
     * Set bid
     *
     * @param integer $bid
     * @return PrePortalArticleTitle
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
     * Set uid
     *
     * @param integer $uid
     * @return PrePortalArticleTitle
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
     * @return PrePortalArticleTitle
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
     * Set title
     *
     * @param string $title
     * @return PrePortalArticleTitle
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
     * Set highlight
     *
     * @param string $highlight
     * @return PrePortalArticleTitle
     */
    public function setHighlight($highlight)
    {
        $this->highlight = $highlight;

        return $this;
    }

    /**
     * Get highlight
     *
     * @return string 
     */
    public function getHighlight()
    {
        return $this->highlight;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return PrePortalArticleTitle
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set from
     *
     * @param string $from
     * @return PrePortalArticleTitle
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from
     *
     * @return string 
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set fromurl
     *
     * @param string $fromurl
     * @return PrePortalArticleTitle
     */
    public function setFromurl($fromurl)
    {
        $this->fromurl = $fromurl;

        return $this;
    }

    /**
     * Get fromurl
     *
     * @return string 
     */
    public function getFromurl()
    {
        return $this->fromurl;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return PrePortalArticleTitle
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
     * Set summary
     *
     * @param string $summary
     * @return PrePortalArticleTitle
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
     * Set pic
     *
     * @param string $pic
     * @return PrePortalArticleTitle
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
     * Set thumb
     *
     * @param boolean $thumb
     * @return PrePortalArticleTitle
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return boolean 
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set remote
     *
     * @param boolean $remote
     * @return PrePortalArticleTitle
     */
    public function setRemote($remote)
    {
        $this->remote = $remote;

        return $this;
    }

    /**
     * Get remote
     *
     * @return boolean 
     */
    public function getRemote()
    {
        return $this->remote;
    }

    /**
     * Set id
     *
     * @param integer $id
     * @return PrePortalArticleTitle
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
     * @return PrePortalArticleTitle
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
     * Set contents
     *
     * @param integer $contents
     * @return PrePortalArticleTitle
     */
    public function setContents($contents)
    {
        $this->contents = $contents;

        return $this;
    }

    /**
     * Get contents
     *
     * @return integer 
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Set allowcomment
     *
     * @param boolean $allowcomment
     * @return PrePortalArticleTitle
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
     * Set owncomment
     *
     * @param boolean $owncomment
     * @return PrePortalArticleTitle
     */
    public function setOwncomment($owncomment)
    {
        $this->owncomment = $owncomment;

        return $this;
    }

    /**
     * Get owncomment
     *
     * @return boolean 
     */
    public function getOwncomment()
    {
        return $this->owncomment;
    }

    /**
     * Set click1
     *
     * @param integer $click1
     * @return PrePortalArticleTitle
     */
    public function setClick1($click1)
    {
        $this->click1 = $click1;

        return $this;
    }

    /**
     * Get click1
     *
     * @return integer 
     */
    public function getClick1()
    {
        return $this->click1;
    }

    /**
     * Set click2
     *
     * @param integer $click2
     * @return PrePortalArticleTitle
     */
    public function setClick2($click2)
    {
        $this->click2 = $click2;

        return $this;
    }

    /**
     * Get click2
     *
     * @return integer 
     */
    public function getClick2()
    {
        return $this->click2;
    }

    /**
     * Set click3
     *
     * @param integer $click3
     * @return PrePortalArticleTitle
     */
    public function setClick3($click3)
    {
        $this->click3 = $click3;

        return $this;
    }

    /**
     * Get click3
     *
     * @return integer 
     */
    public function getClick3()
    {
        return $this->click3;
    }

    /**
     * Set click4
     *
     * @param integer $click4
     * @return PrePortalArticleTitle
     */
    public function setClick4($click4)
    {
        $this->click4 = $click4;

        return $this;
    }

    /**
     * Get click4
     *
     * @return integer 
     */
    public function getClick4()
    {
        return $this->click4;
    }

    /**
     * Set click5
     *
     * @param integer $click5
     * @return PrePortalArticleTitle
     */
    public function setClick5($click5)
    {
        $this->click5 = $click5;

        return $this;
    }

    /**
     * Get click5
     *
     * @return integer 
     */
    public function getClick5()
    {
        return $this->click5;
    }

    /**
     * Set click6
     *
     * @param integer $click6
     * @return PrePortalArticleTitle
     */
    public function setClick6($click6)
    {
        $this->click6 = $click6;

        return $this;
    }

    /**
     * Get click6
     *
     * @return integer 
     */
    public function getClick6()
    {
        return $this->click6;
    }

    /**
     * Set click7
     *
     * @param integer $click7
     * @return PrePortalArticleTitle
     */
    public function setClick7($click7)
    {
        $this->click7 = $click7;

        return $this;
    }

    /**
     * Get click7
     *
     * @return integer 
     */
    public function getClick7()
    {
        return $this->click7;
    }

    /**
     * Set click8
     *
     * @param integer $click8
     * @return PrePortalArticleTitle
     */
    public function setClick8($click8)
    {
        $this->click8 = $click8;

        return $this;
    }

    /**
     * Get click8
     *
     * @return integer 
     */
    public function getClick8()
    {
        return $this->click8;
    }

    /**
     * Set tag
     *
     * @param boolean $tag
     * @return PrePortalArticleTitle
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return boolean 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PrePortalArticleTitle
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
     * Set status
     *
     * @param boolean $status
     * @return PrePortalArticleTitle
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
     * Set showinnernav
     *
     * @param boolean $showinnernav
     * @return PrePortalArticleTitle
     */
    public function setShowinnernav($showinnernav)
    {
        $this->showinnernav = $showinnernav;

        return $this;
    }

    /**
     * Get showinnernav
     *
     * @return boolean 
     */
    public function getShowinnernav()
    {
        return $this->showinnernav;
    }

    /**
     * Set preaid
     *
     * @param integer $preaid
     * @return PrePortalArticleTitle
     */
    public function setPreaid($preaid)
    {
        $this->preaid = $preaid;

        return $this;
    }

    /**
     * Get preaid
     *
     * @return integer 
     */
    public function getPreaid()
    {
        return $this->preaid;
    }

    /**
     * Set nextaid
     *
     * @param integer $nextaid
     * @return PrePortalArticleTitle
     */
    public function setNextaid($nextaid)
    {
        $this->nextaid = $nextaid;

        return $this;
    }

    /**
     * Get nextaid
     *
     * @return integer 
     */
    public function getNextaid()
    {
        return $this->nextaid;
    }

    /**
     * Set htmlmade
     *
     * @param boolean $htmlmade
     * @return PrePortalArticleTitle
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
     * Set htmlname
     *
     * @param string $htmlname
     * @return PrePortalArticleTitle
     */
    public function setHtmlname($htmlname)
    {
        $this->htmlname = $htmlname;

        return $this;
    }

    /**
     * Get htmlname
     *
     * @return string 
     */
    public function getHtmlname()
    {
        return $this->htmlname;
    }

    /**
     * Set htmldir
     *
     * @param string $htmldir
     * @return PrePortalArticleTitle
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
