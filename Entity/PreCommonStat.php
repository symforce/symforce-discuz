<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonStat
 *
 * @ORM\Table(name="pre_common_stat")
 * @ORM\Entity
 */
class PreCommonStat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="daytime", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $daytime = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="login", type="integer", nullable=false)
     */
    private $login = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="mobilelogin", type="integer", nullable=false)
     */
    private $mobilelogin = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="connectlogin", type="integer", nullable=false)
     */
    private $connectlogin = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="register", type="integer", nullable=false)
     */
    private $register = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="invite", type="integer", nullable=false)
     */
    private $invite = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="appinvite", type="integer", nullable=false)
     */
    private $appinvite = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="doing", type="integer", nullable=false)
     */
    private $doing = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="blog", type="integer", nullable=false)
     */
    private $blog = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pic", type="integer", nullable=false)
     */
    private $pic = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="poll", type="integer", nullable=false)
     */
    private $poll = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="activity", type="integer", nullable=false)
     */
    private $activity = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="share", type="integer", nullable=false)
     */
    private $share = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="thread", type="integer", nullable=false)
     */
    private $thread = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="docomment", type="integer", nullable=false)
     */
    private $docomment = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="blogcomment", type="integer", nullable=false)
     */
    private $blogcomment = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="piccomment", type="integer", nullable=false)
     */
    private $piccomment = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sharecomment", type="integer", nullable=false)
     */
    private $sharecomment = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="reward", type="integer", nullable=false)
     */
    private $reward = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="debate", type="integer", nullable=false)
     */
    private $debate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="trade", type="integer", nullable=false)
     */
    private $trade = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="group", type="integer", nullable=false)
     */
    private $group = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupjoin", type="integer", nullable=false)
     */
    private $groupjoin = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupthread", type="integer", nullable=false)
     */
    private $groupthread = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="grouppost", type="integer", nullable=false)
     */
    private $grouppost = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="post", type="integer", nullable=false)
     */
    private $post = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="wall", type="integer", nullable=false)
     */
    private $wall = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="poke", type="integer", nullable=false)
     */
    private $poke = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="click", type="integer", nullable=false)
     */
    private $click = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="sendpm", type="integer", nullable=false)
     */
    private $sendpm = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="friend", type="integer", nullable=false)
     */
    private $friend = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="addfriend", type="integer", nullable=false)
     */
    private $addfriend = '0';



    /**
     * Get daytime
     *
     * @return integer 
     */
    public function getDaytime()
    {
        return $this->daytime;
    }

    /**
     * Set login
     *
     * @param integer $login
     * @return PreCommonStat
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return integer 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set mobilelogin
     *
     * @param integer $mobilelogin
     * @return PreCommonStat
     */
    public function setMobilelogin($mobilelogin)
    {
        $this->mobilelogin = $mobilelogin;

        return $this;
    }

    /**
     * Get mobilelogin
     *
     * @return integer 
     */
    public function getMobilelogin()
    {
        return $this->mobilelogin;
    }

    /**
     * Set connectlogin
     *
     * @param integer $connectlogin
     * @return PreCommonStat
     */
    public function setConnectlogin($connectlogin)
    {
        $this->connectlogin = $connectlogin;

        return $this;
    }

    /**
     * Get connectlogin
     *
     * @return integer 
     */
    public function getConnectlogin()
    {
        return $this->connectlogin;
    }

    /**
     * Set register
     *
     * @param integer $register
     * @return PreCommonStat
     */
    public function setRegister($register)
    {
        $this->register = $register;

        return $this;
    }

    /**
     * Get register
     *
     * @return integer 
     */
    public function getRegister()
    {
        return $this->register;
    }

    /**
     * Set invite
     *
     * @param integer $invite
     * @return PreCommonStat
     */
    public function setInvite($invite)
    {
        $this->invite = $invite;

        return $this;
    }

    /**
     * Get invite
     *
     * @return integer 
     */
    public function getInvite()
    {
        return $this->invite;
    }

    /**
     * Set appinvite
     *
     * @param integer $appinvite
     * @return PreCommonStat
     */
    public function setAppinvite($appinvite)
    {
        $this->appinvite = $appinvite;

        return $this;
    }

    /**
     * Get appinvite
     *
     * @return integer 
     */
    public function getAppinvite()
    {
        return $this->appinvite;
    }

    /**
     * Set doing
     *
     * @param integer $doing
     * @return PreCommonStat
     */
    public function setDoing($doing)
    {
        $this->doing = $doing;

        return $this;
    }

    /**
     * Get doing
     *
     * @return integer 
     */
    public function getDoing()
    {
        return $this->doing;
    }

    /**
     * Set blog
     *
     * @param integer $blog
     * @return PreCommonStat
     */
    public function setBlog($blog)
    {
        $this->blog = $blog;

        return $this;
    }

    /**
     * Get blog
     *
     * @return integer 
     */
    public function getBlog()
    {
        return $this->blog;
    }

    /**
     * Set pic
     *
     * @param integer $pic
     * @return PreCommonStat
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get pic
     *
     * @return integer 
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Set poll
     *
     * @param integer $poll
     * @return PreCommonStat
     */
    public function setPoll($poll)
    {
        $this->poll = $poll;

        return $this;
    }

    /**
     * Get poll
     *
     * @return integer 
     */
    public function getPoll()
    {
        return $this->poll;
    }

    /**
     * Set activity
     *
     * @param integer $activity
     * @return PreCommonStat
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return integer 
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set share
     *
     * @param integer $share
     * @return PreCommonStat
     */
    public function setShare($share)
    {
        $this->share = $share;

        return $this;
    }

    /**
     * Get share
     *
     * @return integer 
     */
    public function getShare()
    {
        return $this->share;
    }

    /**
     * Set thread
     *
     * @param integer $thread
     * @return PreCommonStat
     */
    public function setThread($thread)
    {
        $this->thread = $thread;

        return $this;
    }

    /**
     * Get thread
     *
     * @return integer 
     */
    public function getThread()
    {
        return $this->thread;
    }

    /**
     * Set docomment
     *
     * @param integer $docomment
     * @return PreCommonStat
     */
    public function setDocomment($docomment)
    {
        $this->docomment = $docomment;

        return $this;
    }

    /**
     * Get docomment
     *
     * @return integer 
     */
    public function getDocomment()
    {
        return $this->docomment;
    }

    /**
     * Set blogcomment
     *
     * @param integer $blogcomment
     * @return PreCommonStat
     */
    public function setBlogcomment($blogcomment)
    {
        $this->blogcomment = $blogcomment;

        return $this;
    }

    /**
     * Get blogcomment
     *
     * @return integer 
     */
    public function getBlogcomment()
    {
        return $this->blogcomment;
    }

    /**
     * Set piccomment
     *
     * @param integer $piccomment
     * @return PreCommonStat
     */
    public function setPiccomment($piccomment)
    {
        $this->piccomment = $piccomment;

        return $this;
    }

    /**
     * Get piccomment
     *
     * @return integer 
     */
    public function getPiccomment()
    {
        return $this->piccomment;
    }

    /**
     * Set sharecomment
     *
     * @param integer $sharecomment
     * @return PreCommonStat
     */
    public function setSharecomment($sharecomment)
    {
        $this->sharecomment = $sharecomment;

        return $this;
    }

    /**
     * Get sharecomment
     *
     * @return integer 
     */
    public function getSharecomment()
    {
        return $this->sharecomment;
    }

    /**
     * Set reward
     *
     * @param integer $reward
     * @return PreCommonStat
     */
    public function setReward($reward)
    {
        $this->reward = $reward;

        return $this;
    }

    /**
     * Get reward
     *
     * @return integer 
     */
    public function getReward()
    {
        return $this->reward;
    }

    /**
     * Set debate
     *
     * @param integer $debate
     * @return PreCommonStat
     */
    public function setDebate($debate)
    {
        $this->debate = $debate;

        return $this;
    }

    /**
     * Get debate
     *
     * @return integer 
     */
    public function getDebate()
    {
        return $this->debate;
    }

    /**
     * Set trade
     *
     * @param integer $trade
     * @return PreCommonStat
     */
    public function setTrade($trade)
    {
        $this->trade = $trade;

        return $this;
    }

    /**
     * Get trade
     *
     * @return integer 
     */
    public function getTrade()
    {
        return $this->trade;
    }

    /**
     * Set group
     *
     * @param integer $group
     * @return PreCommonStat
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return integer 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set groupjoin
     *
     * @param integer $groupjoin
     * @return PreCommonStat
     */
    public function setGroupjoin($groupjoin)
    {
        $this->groupjoin = $groupjoin;

        return $this;
    }

    /**
     * Get groupjoin
     *
     * @return integer 
     */
    public function getGroupjoin()
    {
        return $this->groupjoin;
    }

    /**
     * Set groupthread
     *
     * @param integer $groupthread
     * @return PreCommonStat
     */
    public function setGroupthread($groupthread)
    {
        $this->groupthread = $groupthread;

        return $this;
    }

    /**
     * Get groupthread
     *
     * @return integer 
     */
    public function getGroupthread()
    {
        return $this->groupthread;
    }

    /**
     * Set grouppost
     *
     * @param integer $grouppost
     * @return PreCommonStat
     */
    public function setGrouppost($grouppost)
    {
        $this->grouppost = $grouppost;

        return $this;
    }

    /**
     * Get grouppost
     *
     * @return integer 
     */
    public function getGrouppost()
    {
        return $this->grouppost;
    }

    /**
     * Set post
     *
     * @param integer $post
     * @return PreCommonStat
     */
    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post
     *
     * @return integer 
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Set wall
     *
     * @param integer $wall
     * @return PreCommonStat
     */
    public function setWall($wall)
    {
        $this->wall = $wall;

        return $this;
    }

    /**
     * Get wall
     *
     * @return integer 
     */
    public function getWall()
    {
        return $this->wall;
    }

    /**
     * Set poke
     *
     * @param integer $poke
     * @return PreCommonStat
     */
    public function setPoke($poke)
    {
        $this->poke = $poke;

        return $this;
    }

    /**
     * Get poke
     *
     * @return integer 
     */
    public function getPoke()
    {
        return $this->poke;
    }

    /**
     * Set click
     *
     * @param integer $click
     * @return PreCommonStat
     */
    public function setClick($click)
    {
        $this->click = $click;

        return $this;
    }

    /**
     * Get click
     *
     * @return integer 
     */
    public function getClick()
    {
        return $this->click;
    }

    /**
     * Set sendpm
     *
     * @param integer $sendpm
     * @return PreCommonStat
     */
    public function setSendpm($sendpm)
    {
        $this->sendpm = $sendpm;

        return $this;
    }

    /**
     * Get sendpm
     *
     * @return integer 
     */
    public function getSendpm()
    {
        return $this->sendpm;
    }

    /**
     * Set friend
     *
     * @param integer $friend
     * @return PreCommonStat
     */
    public function setFriend($friend)
    {
        $this->friend = $friend;

        return $this;
    }

    /**
     * Get friend
     *
     * @return integer 
     */
    public function getFriend()
    {
        return $this->friend;
    }

    /**
     * Set addfriend
     *
     * @param integer $addfriend
     * @return PreCommonStat
     */
    public function setAddfriend($addfriend)
    {
        $this->addfriend = $addfriend;

        return $this;
    }

    /**
     * Get addfriend
     *
     * @return integer 
     */
    public function getAddfriend()
    {
        return $this->addfriend;
    }
}
