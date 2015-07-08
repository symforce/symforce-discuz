<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeBlog
 *
 * @ORM\Table(name="pre_home_blog", indexes={@ORM\Index(name="uid", columns={"uid", "dateline"}), @ORM\Index(name="hot", columns={"hot"}), @ORM\Index(name="dateline", columns={"dateline"})})
 * @ORM\Entity
 */
class PreHomeBlog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="blogid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $blogid;

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
     * @ORM\Column(name="subject", type="string", length=80, nullable=false)
     */
    private $subject = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="classid", type="smallint", nullable=false)
     */
    private $classid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="catid", type="smallint", nullable=false)
     */
    private $catid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="viewnum", type="integer", nullable=false)
     */
    private $viewnum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="replynum", type="integer", nullable=false)
     */
    private $replynum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="hot", type="integer", nullable=false)
     */
    private $hot = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="picflag", type="boolean", nullable=false)
     */
    private $picflag = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="noreply", type="boolean", nullable=false)
     */
    private $noreply = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="friend", type="boolean", nullable=false)
     */
    private $friend = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=10, nullable=false)
     */
    private $password = '';

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
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

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
     * Get blogid
     *
     * @return integer 
     */
    public function getBlogid()
    {
        return $this->blogid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreHomeBlog
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
     * @return PreHomeBlog
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
     * Set subject
     *
     * @param string $subject
     * @return PreHomeBlog
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
     * Set classid
     *
     * @param integer $classid
     * @return PreHomeBlog
     */
    public function setClassid($classid)
    {
        $this->classid = $classid;

        return $this;
    }

    /**
     * Get classid
     *
     * @return integer 
     */
    public function getClassid()
    {
        return $this->classid;
    }

    /**
     * Set catid
     *
     * @param integer $catid
     * @return PreHomeBlog
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
     * Set viewnum
     *
     * @param integer $viewnum
     * @return PreHomeBlog
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
     * Set replynum
     *
     * @param integer $replynum
     * @return PreHomeBlog
     */
    public function setReplynum($replynum)
    {
        $this->replynum = $replynum;

        return $this;
    }

    /**
     * Get replynum
     *
     * @return integer 
     */
    public function getReplynum()
    {
        return $this->replynum;
    }

    /**
     * Set hot
     *
     * @param integer $hot
     * @return PreHomeBlog
     */
    public function setHot($hot)
    {
        $this->hot = $hot;

        return $this;
    }

    /**
     * Get hot
     *
     * @return integer 
     */
    public function getHot()
    {
        return $this->hot;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreHomeBlog
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
     * Set picflag
     *
     * @param boolean $picflag
     * @return PreHomeBlog
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
     * Set noreply
     *
     * @param boolean $noreply
     * @return PreHomeBlog
     */
    public function setNoreply($noreply)
    {
        $this->noreply = $noreply;

        return $this;
    }

    /**
     * Get noreply
     *
     * @return boolean 
     */
    public function getNoreply()
    {
        return $this->noreply;
    }

    /**
     * Set friend
     *
     * @param boolean $friend
     * @return PreHomeBlog
     */
    public function setFriend($friend)
    {
        $this->friend = $friend;

        return $this;
    }

    /**
     * Get friend
     *
     * @return boolean 
     */
    public function getFriend()
    {
        return $this->friend;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return PreHomeBlog
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set favtimes
     *
     * @param integer $favtimes
     * @return PreHomeBlog
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
     * @return PreHomeBlog
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
     * Set status
     *
     * @param boolean $status
     * @return PreHomeBlog
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
     * Set click1
     *
     * @param integer $click1
     * @return PreHomeBlog
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
     * @return PreHomeBlog
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
     * @return PreHomeBlog
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
     * @return PreHomeBlog
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
     * @return PreHomeBlog
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
     * @return PreHomeBlog
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
     * @return PreHomeBlog
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
     * @return PreHomeBlog
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
}
