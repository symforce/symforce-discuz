<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumThread
 *
 * @ORM\Table(name="pre_forum_thread", indexes={@ORM\Index(name="digest", columns={"digest"}), @ORM\Index(name="sortid", columns={"sortid"}), @ORM\Index(name="displayorder", columns={"fid", "displayorder", "lastpost"}), @ORM\Index(name="typeid", columns={"fid", "typeid", "displayorder", "lastpost"}), @ORM\Index(name="recommends", columns={"recommends"}), @ORM\Index(name="heats", columns={"heats"}), @ORM\Index(name="authorid", columns={"authorid"}), @ORM\Index(name="isgroup", columns={"isgroup", "lastpost"}), @ORM\Index(name="special", columns={"special"})})
 * @ORM\Entity
 */
class PreForumThread
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tid;

    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     */
    private $fid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="posttableid", type="smallint", nullable=false)
     */
    private $posttableid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="typeid", type="smallint", nullable=false)
     */
    private $typeid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sortid", type="smallint", nullable=false)
     */
    private $sortid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="readperm", type="boolean", nullable=false)
     */
    private $readperm = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="smallint", nullable=false)
     */
    private $price = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=15, nullable=false)
     */
    private $author = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="authorid", type="integer", nullable=false)
     */
    private $authorid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=80, nullable=false)
     */
    private $subject = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastpost", type="integer", nullable=false)
     */
    private $lastpost = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lastposter", type="string", length=15, nullable=false)
     */
    private $lastposter = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer", nullable=false)
     */
    private $views = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="replies", type="integer", nullable=false)
     */
    private $replies = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="displayorder", type="boolean", nullable=false)
     */
    private $displayorder = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="highlight", type="boolean", nullable=false)
     */
    private $highlight = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="digest", type="boolean", nullable=false)
     */
    private $digest = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="rate", type="boolean", nullable=false)
     */
    private $rate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="special", type="boolean", nullable=false)
     */
    private $special = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="attachment", type="boolean", nullable=false)
     */
    private $attachment = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="moderated", type="boolean", nullable=false)
     */
    private $moderated = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="closed", type="integer", nullable=false)
     */
    private $closed = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="stickreply", type="boolean", nullable=false)
     */
    private $stickreply = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="recommends", type="smallint", nullable=false)
     */
    private $recommends = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="recommend_add", type="smallint", nullable=false)
     */
    private $recommendAdd = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="recommend_sub", type="smallint", nullable=false)
     */
    private $recommendSub = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="heats", type="integer", nullable=false)
     */
    private $heats = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="isgroup", type="boolean", nullable=false)
     */
    private $isgroup = '0';

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
     * @ORM\Column(name="stamp", type="boolean", nullable=false)
     */
    private $stamp = '-1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="icon", type="boolean", nullable=false)
     */
    private $icon = '-1';

    /**
     * @var integer
     *
     * @ORM\Column(name="pushedaid", type="integer", nullable=false)
     */
    private $pushedaid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="cover", type="smallint", nullable=false)
     */
    private $cover = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="replycredit", type="smallint", nullable=false)
     */
    private $replycredit = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="relatebytag", type="string", length=255, nullable=false)
     */
    private $relatebytag = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxposition", type="integer", nullable=false)
     */
    private $maxposition = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bgcolor", type="string", length=8, nullable=false)
     */
    private $bgcolor = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="comments", type="integer", nullable=false)
     */
    private $comments = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hidden", type="smallint", nullable=false)
     */
    private $hidden = '0';



    /**
     * Get tid
     *
     * @return integer 
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set fid
     *
     * @param integer $fid
     * @return PreForumThread
     */
    public function setFid($fid)
    {
        $this->fid = $fid;

        return $this;
    }

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
     * Set posttableid
     *
     * @param integer $posttableid
     * @return PreForumThread
     */
    public function setPosttableid($posttableid)
    {
        $this->posttableid = $posttableid;

        return $this;
    }

    /**
     * Get posttableid
     *
     * @return integer 
     */
    public function getPosttableid()
    {
        return $this->posttableid;
    }

    /**
     * Set typeid
     *
     * @param integer $typeid
     * @return PreForumThread
     */
    public function setTypeid($typeid)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return integer 
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Set sortid
     *
     * @param integer $sortid
     * @return PreForumThread
     */
    public function setSortid($sortid)
    {
        $this->sortid = $sortid;

        return $this;
    }

    /**
     * Get sortid
     *
     * @return integer 
     */
    public function getSortid()
    {
        return $this->sortid;
    }

    /**
     * Set readperm
     *
     * @param boolean $readperm
     * @return PreForumThread
     */
    public function setReadperm($readperm)
    {
        $this->readperm = $readperm;

        return $this;
    }

    /**
     * Get readperm
     *
     * @return boolean 
     */
    public function getReadperm()
    {
        return $this->readperm;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return PreForumThread
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return PreForumThread
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
     * Set authorid
     *
     * @param integer $authorid
     * @return PreForumThread
     */
    public function setAuthorid($authorid)
    {
        $this->authorid = $authorid;

        return $this;
    }

    /**
     * Get authorid
     *
     * @return integer 
     */
    public function getAuthorid()
    {
        return $this->authorid;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return PreForumThread
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumThread
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
     * Set lastpost
     *
     * @param integer $lastpost
     * @return PreForumThread
     */
    public function setLastpost($lastpost)
    {
        $this->lastpost = $lastpost;

        return $this;
    }

    /**
     * Get lastpost
     *
     * @return integer 
     */
    public function getLastpost()
    {
        return $this->lastpost;
    }

    /**
     * Set lastposter
     *
     * @param string $lastposter
     * @return PreForumThread
     */
    public function setLastposter($lastposter)
    {
        $this->lastposter = $lastposter;

        return $this;
    }

    /**
     * Get lastposter
     *
     * @return string 
     */
    public function getLastposter()
    {
        return $this->lastposter;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return PreForumThread
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set replies
     *
     * @param integer $replies
     * @return PreForumThread
     */
    public function setReplies($replies)
    {
        $this->replies = $replies;

        return $this;
    }

    /**
     * Get replies
     *
     * @return integer 
     */
    public function getReplies()
    {
        return $this->replies;
    }

    /**
     * Set displayorder
     *
     * @param boolean $displayorder
     * @return PreForumThread
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
     * @return PreForumThread
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
     * Set digest
     *
     * @param boolean $digest
     * @return PreForumThread
     */
    public function setDigest($digest)
    {
        $this->digest = $digest;

        return $this;
    }

    /**
     * Get digest
     *
     * @return boolean 
     */
    public function getDigest()
    {
        return $this->digest;
    }

    /**
     * Set rate
     *
     * @param boolean $rate
     * @return PreForumThread
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return boolean 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set special
     *
     * @param boolean $special
     * @return PreForumThread
     */
    public function setSpecial($special)
    {
        $this->special = $special;

        return $this;
    }

    /**
     * Get special
     *
     * @return boolean 
     */
    public function getSpecial()
    {
        return $this->special;
    }

    /**
     * Set attachment
     *
     * @param boolean $attachment
     * @return PreForumThread
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return boolean 
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set moderated
     *
     * @param boolean $moderated
     * @return PreForumThread
     */
    public function setModerated($moderated)
    {
        $this->moderated = $moderated;

        return $this;
    }

    /**
     * Get moderated
     *
     * @return boolean 
     */
    public function getModerated()
    {
        return $this->moderated;
    }

    /**
     * Set closed
     *
     * @param integer $closed
     * @return PreForumThread
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;

        return $this;
    }

    /**
     * Get closed
     *
     * @return integer 
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * Set stickreply
     *
     * @param boolean $stickreply
     * @return PreForumThread
     */
    public function setStickreply($stickreply)
    {
        $this->stickreply = $stickreply;

        return $this;
    }

    /**
     * Get stickreply
     *
     * @return boolean 
     */
    public function getStickreply()
    {
        return $this->stickreply;
    }

    /**
     * Set recommends
     *
     * @param integer $recommends
     * @return PreForumThread
     */
    public function setRecommends($recommends)
    {
        $this->recommends = $recommends;

        return $this;
    }

    /**
     * Get recommends
     *
     * @return integer 
     */
    public function getRecommends()
    {
        return $this->recommends;
    }

    /**
     * Set recommendAdd
     *
     * @param integer $recommendAdd
     * @return PreForumThread
     */
    public function setRecommendAdd($recommendAdd)
    {
        $this->recommendAdd = $recommendAdd;

        return $this;
    }

    /**
     * Get recommendAdd
     *
     * @return integer 
     */
    public function getRecommendAdd()
    {
        return $this->recommendAdd;
    }

    /**
     * Set recommendSub
     *
     * @param integer $recommendSub
     * @return PreForumThread
     */
    public function setRecommendSub($recommendSub)
    {
        $this->recommendSub = $recommendSub;

        return $this;
    }

    /**
     * Get recommendSub
     *
     * @return integer 
     */
    public function getRecommendSub()
    {
        return $this->recommendSub;
    }

    /**
     * Set heats
     *
     * @param integer $heats
     * @return PreForumThread
     */
    public function setHeats($heats)
    {
        $this->heats = $heats;

        return $this;
    }

    /**
     * Get heats
     *
     * @return integer 
     */
    public function getHeats()
    {
        return $this->heats;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return PreForumThread
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set isgroup
     *
     * @param boolean $isgroup
     * @return PreForumThread
     */
    public function setIsgroup($isgroup)
    {
        $this->isgroup = $isgroup;

        return $this;
    }

    /**
     * Get isgroup
     *
     * @return boolean 
     */
    public function getIsgroup()
    {
        return $this->isgroup;
    }

    /**
     * Set favtimes
     *
     * @param integer $favtimes
     * @return PreForumThread
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
     * @return PreForumThread
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
     * Set stamp
     *
     * @param boolean $stamp
     * @return PreForumThread
     */
    public function setStamp($stamp)
    {
        $this->stamp = $stamp;

        return $this;
    }

    /**
     * Get stamp
     *
     * @return boolean 
     */
    public function getStamp()
    {
        return $this->stamp;
    }

    /**
     * Set icon
     *
     * @param boolean $icon
     * @return PreForumThread
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return boolean 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set pushedaid
     *
     * @param integer $pushedaid
     * @return PreForumThread
     */
    public function setPushedaid($pushedaid)
    {
        $this->pushedaid = $pushedaid;

        return $this;
    }

    /**
     * Get pushedaid
     *
     * @return integer 
     */
    public function getPushedaid()
    {
        return $this->pushedaid;
    }

    /**
     * Set cover
     *
     * @param integer $cover
     * @return PreForumThread
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return integer 
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set replycredit
     *
     * @param integer $replycredit
     * @return PreForumThread
     */
    public function setReplycredit($replycredit)
    {
        $this->replycredit = $replycredit;

        return $this;
    }

    /**
     * Get replycredit
     *
     * @return integer 
     */
    public function getReplycredit()
    {
        return $this->replycredit;
    }

    /**
     * Set relatebytag
     *
     * @param string $relatebytag
     * @return PreForumThread
     */
    public function setRelatebytag($relatebytag)
    {
        $this->relatebytag = $relatebytag;

        return $this;
    }

    /**
     * Get relatebytag
     *
     * @return string 
     */
    public function getRelatebytag()
    {
        return $this->relatebytag;
    }

    /**
     * Set maxposition
     *
     * @param integer $maxposition
     * @return PreForumThread
     */
    public function setMaxposition($maxposition)
    {
        $this->maxposition = $maxposition;

        return $this;
    }

    /**
     * Get maxposition
     *
     * @return integer 
     */
    public function getMaxposition()
    {
        return $this->maxposition;
    }

    /**
     * Set bgcolor
     *
     * @param string $bgcolor
     * @return PreForumThread
     */
    public function setBgcolor($bgcolor)
    {
        $this->bgcolor = $bgcolor;

        return $this;
    }

    /**
     * Get bgcolor
     *
     * @return string 
     */
    public function getBgcolor()
    {
        return $this->bgcolor;
    }

    /**
     * Set comments
     *
     * @param integer $comments
     * @return PreForumThread
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return integer 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set hidden
     *
     * @param integer $hidden
     * @return PreForumThread
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;

        return $this;
    }

    /**
     * Get hidden
     *
     * @return integer 
     */
    public function getHidden()
    {
        return $this->hidden;
    }
}
