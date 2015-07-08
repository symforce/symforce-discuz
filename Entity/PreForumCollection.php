<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumCollection
 *
 * @ORM\Table(name="pre_forum_collection", indexes={@ORM\Index(name="dateline", columns={"dateline"}), @ORM\Index(name="hotcollection", columns={"threadnum", "lastupdate"}), @ORM\Index(name="follownum", columns={"follownum"}), @ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class PreForumCollection
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ctid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ctid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=15, nullable=false)
     */
    private $username = '';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="follownum", type="integer", nullable=false)
     */
    private $follownum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="threadnum", type="integer", nullable=false)
     */
    private $threadnum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="commentnum", type="integer", nullable=false)
     */
    private $commentnum = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="string", length=255, nullable=false)
     */
    private $desc = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastupdate", type="integer", nullable=false)
     */
    private $lastupdate = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $rate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ratenum", type="integer", nullable=false)
     */
    private $ratenum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastpost", type="integer", nullable=false)
     */
    private $lastpost = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lastsubject", type="string", length=80, nullable=false)
     */
    private $lastsubject = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastposttime", type="integer", nullable=false)
     */
    private $lastposttime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="lastposter", type="string", length=15, nullable=false)
     */
    private $lastposter = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastvisit", type="integer", nullable=false)
     */
    private $lastvisit = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=255, nullable=false)
     */
    private $keyword = '';



    /**
     * Get ctid
     *
     * @return integer 
     */
    public function getCtid()
    {
        return $this->ctid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreForumCollection
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
     * @return PreForumCollection
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
     * Set name
     *
     * @param string $name
     * @return PreForumCollection
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
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumCollection
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
     * Set follownum
     *
     * @param integer $follownum
     * @return PreForumCollection
     */
    public function setFollownum($follownum)
    {
        $this->follownum = $follownum;

        return $this;
    }

    /**
     * Get follownum
     *
     * @return integer 
     */
    public function getFollownum()
    {
        return $this->follownum;
    }

    /**
     * Set threadnum
     *
     * @param integer $threadnum
     * @return PreForumCollection
     */
    public function setThreadnum($threadnum)
    {
        $this->threadnum = $threadnum;

        return $this;
    }

    /**
     * Get threadnum
     *
     * @return integer 
     */
    public function getThreadnum()
    {
        return $this->threadnum;
    }

    /**
     * Set commentnum
     *
     * @param integer $commentnum
     * @return PreForumCollection
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
     * Set desc
     *
     * @param string $desc
     * @return PreForumCollection
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set lastupdate
     *
     * @param integer $lastupdate
     * @return PreForumCollection
     */
    public function setLastupdate($lastupdate)
    {
        $this->lastupdate = $lastupdate;

        return $this;
    }

    /**
     * Get lastupdate
     *
     * @return integer 
     */
    public function getLastupdate()
    {
        return $this->lastupdate;
    }

    /**
     * Set rate
     *
     * @param float $rate
     * @return PreForumCollection
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return float 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set ratenum
     *
     * @param integer $ratenum
     * @return PreForumCollection
     */
    public function setRatenum($ratenum)
    {
        $this->ratenum = $ratenum;

        return $this;
    }

    /**
     * Get ratenum
     *
     * @return integer 
     */
    public function getRatenum()
    {
        return $this->ratenum;
    }

    /**
     * Set lastpost
     *
     * @param integer $lastpost
     * @return PreForumCollection
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
     * Set lastsubject
     *
     * @param string $lastsubject
     * @return PreForumCollection
     */
    public function setLastsubject($lastsubject)
    {
        $this->lastsubject = $lastsubject;

        return $this;
    }

    /**
     * Get lastsubject
     *
     * @return string 
     */
    public function getLastsubject()
    {
        return $this->lastsubject;
    }

    /**
     * Set lastposttime
     *
     * @param integer $lastposttime
     * @return PreForumCollection
     */
    public function setLastposttime($lastposttime)
    {
        $this->lastposttime = $lastposttime;

        return $this;
    }

    /**
     * Get lastposttime
     *
     * @return integer 
     */
    public function getLastposttime()
    {
        return $this->lastposttime;
    }

    /**
     * Set lastposter
     *
     * @param string $lastposter
     * @return PreForumCollection
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
     * Set lastvisit
     *
     * @param integer $lastvisit
     * @return PreForumCollection
     */
    public function setLastvisit($lastvisit)
    {
        $this->lastvisit = $lastvisit;

        return $this;
    }

    /**
     * Get lastvisit
     *
     * @return integer 
     */
    public function getLastvisit()
    {
        return $this->lastvisit;
    }

    /**
     * Set keyword
     *
     * @param string $keyword
     * @return PreForumCollection
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
}
