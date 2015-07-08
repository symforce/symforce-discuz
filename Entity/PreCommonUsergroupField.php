<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonUsergroupField
 *
 * @ORM\Table(name="pre_common_usergroup_field")
 * @ORM\Entity
 */
class PreCommonUsergroupField
{
    /**
     * @var integer
     *
     * @ORM\Column(name="groupid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="readaccess", type="boolean", nullable=false)
     */
    private $readaccess = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpost", type="boolean", nullable=false)
     */
    private $allowpost = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowreply", type="boolean", nullable=false)
     */
    private $allowreply = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpostpoll", type="boolean", nullable=false)
     */
    private $allowpostpoll = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpostreward", type="boolean", nullable=false)
     */
    private $allowpostreward = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowposttrade", type="boolean", nullable=false)
     */
    private $allowposttrade = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpostactivity", type="boolean", nullable=false)
     */
    private $allowpostactivity = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowdirectpost", type="boolean", nullable=false)
     */
    private $allowdirectpost = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowgetattach", type="boolean", nullable=false)
     */
    private $allowgetattach = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowgetimage", type="boolean", nullable=false)
     */
    private $allowgetimage = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpostattach", type="boolean", nullable=false)
     */
    private $allowpostattach = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpostimage", type="boolean", nullable=false)
     */
    private $allowpostimage = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowvote", type="boolean", nullable=false)
     */
    private $allowvote = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowsearch", type="boolean", nullable=false)
     */
    private $allowsearch = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowcstatus", type="boolean", nullable=false)
     */
    private $allowcstatus = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowinvisible", type="boolean", nullable=false)
     */
    private $allowinvisible = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowtransfer", type="boolean", nullable=false)
     */
    private $allowtransfer = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowsetreadperm", type="boolean", nullable=false)
     */
    private $allowsetreadperm = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowsetattachperm", type="boolean", nullable=false)
     */
    private $allowsetattachperm = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowposttag", type="boolean", nullable=false)
     */
    private $allowposttag = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowhidecode", type="boolean", nullable=false)
     */
    private $allowhidecode = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowhtml", type="boolean", nullable=false)
     */
    private $allowhtml = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowanonymous", type="boolean", nullable=false)
     */
    private $allowanonymous = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowsigbbcode", type="boolean", nullable=false)
     */
    private $allowsigbbcode = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowsigimgcode", type="boolean", nullable=false)
     */
    private $allowsigimgcode = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmagics", type="boolean", nullable=false)
     */
    private $allowmagics;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disableperiodctrl", type="boolean", nullable=false)
     */
    private $disableperiodctrl = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="reasonpm", type="boolean", nullable=false)
     */
    private $reasonpm = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxprice", type="smallint", nullable=false)
     */
    private $maxprice = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxsigsize", type="smallint", nullable=false)
     */
    private $maxsigsize = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxattachsize", type="integer", nullable=false)
     */
    private $maxattachsize = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxsizeperday", type="integer", nullable=false)
     */
    private $maxsizeperday = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="maxthreadsperhour", type="boolean", nullable=false)
     */
    private $maxthreadsperhour = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="maxpostsperhour", type="boolean", nullable=false)
     */
    private $maxpostsperhour = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="attachextensions", type="string", length=100, nullable=false)
     */
    private $attachextensions = '';

    /**
     * @var string
     *
     * @ORM\Column(name="raterange", type="string", length=150, nullable=false)
     */
    private $raterange = '';

    /**
     * @var string
     *
     * @ORM\Column(name="loginreward", type="string", length=150, nullable=false)
     */
    private $loginreward = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="mintradeprice", type="smallint", nullable=false)
     */
    private $mintradeprice = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxtradeprice", type="smallint", nullable=false)
     */
    private $maxtradeprice = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="minrewardprice", type="smallint", nullable=false)
     */
    private $minrewardprice = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxrewardprice", type="smallint", nullable=false)
     */
    private $maxrewardprice = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="magicsdiscount", type="boolean", nullable=false)
     */
    private $magicsdiscount;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxmagicsweight", type="smallint", nullable=false)
     */
    private $maxmagicsweight;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpostdebate", type="boolean", nullable=false)
     */
    private $allowpostdebate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="tradestick", type="boolean", nullable=false)
     */
    private $tradestick;

    /**
     * @var boolean
     *
     * @ORM\Column(name="exempt", type="boolean", nullable=false)
     */
    private $exempt;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxattachnum", type="smallint", nullable=false)
     */
    private $maxattachnum = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowposturl", type="boolean", nullable=false)
     */
    private $allowposturl = '3';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowrecommend", type="boolean", nullable=false)
     */
    private $allowrecommend = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpostrushreply", type="boolean", nullable=false)
     */
    private $allowpostrushreply = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxfriendnum", type="smallint", nullable=false)
     */
    private $maxfriendnum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maxspacesize", type="integer", nullable=false)
     */
    private $maxspacesize = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowcomment", type="boolean", nullable=false)
     */
    private $allowcomment = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="allowcommentarticle", type="smallint", nullable=false)
     */
    private $allowcommentarticle = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="searchinterval", type="smallint", nullable=false)
     */
    private $searchinterval = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="searchignore", type="boolean", nullable=false)
     */
    private $searchignore = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowblog", type="boolean", nullable=false)
     */
    private $allowblog = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowdoing", type="boolean", nullable=false)
     */
    private $allowdoing = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowupload", type="boolean", nullable=false)
     */
    private $allowupload = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowshare", type="boolean", nullable=false)
     */
    private $allowshare = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowblogmod", type="boolean", nullable=false)
     */
    private $allowblogmod = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowdoingmod", type="boolean", nullable=false)
     */
    private $allowdoingmod = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowuploadmod", type="boolean", nullable=false)
     */
    private $allowuploadmod = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowsharemod", type="boolean", nullable=false)
     */
    private $allowsharemod = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowcss", type="boolean", nullable=false)
     */
    private $allowcss = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpoke", type="boolean", nullable=false)
     */
    private $allowpoke = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowfriend", type="boolean", nullable=false)
     */
    private $allowfriend = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowclick", type="boolean", nullable=false)
     */
    private $allowclick = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmagic", type="boolean", nullable=false)
     */
    private $allowmagic = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowstat", type="boolean", nullable=false)
     */
    private $allowstat = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowstatdata", type="boolean", nullable=false)
     */
    private $allowstatdata = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="videophotoignore", type="boolean", nullable=false)
     */
    private $videophotoignore = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowviewvideophoto", type="boolean", nullable=false)
     */
    private $allowviewvideophoto = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmyop", type="boolean", nullable=false)
     */
    private $allowmyop = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="magicdiscount", type="boolean", nullable=false)
     */
    private $magicdiscount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="domainlength", type="smallint", nullable=false)
     */
    private $domainlength = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="seccode", type="boolean", nullable=false)
     */
    private $seccode = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="disablepostctrl", type="boolean", nullable=false)
     */
    private $disablepostctrl = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowbuildgroup", type="boolean", nullable=false)
     */
    private $allowbuildgroup = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowgroupdirectpost", type="boolean", nullable=false)
     */
    private $allowgroupdirectpost = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowgroupposturl", type="boolean", nullable=false)
     */
    private $allowgroupposturl = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="edittimelimit", type="smallint", nullable=false)
     */
    private $edittimelimit = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpostarticle", type="boolean", nullable=false)
     */
    private $allowpostarticle = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowdownlocalimg", type="boolean", nullable=false)
     */
    private $allowdownlocalimg = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowdownremoteimg", type="boolean", nullable=false)
     */
    private $allowdownremoteimg = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpostarticlemod", type="boolean", nullable=false)
     */
    private $allowpostarticlemod = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowspacediyhtml", type="boolean", nullable=false)
     */
    private $allowspacediyhtml = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowspacediybbcode", type="boolean", nullable=false)
     */
    private $allowspacediybbcode = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowspacediyimgcode", type="boolean", nullable=false)
     */
    private $allowspacediyimgcode = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowcommentpost", type="boolean", nullable=false)
     */
    private $allowcommentpost = '2';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowcommentitem", type="boolean", nullable=false)
     */
    private $allowcommentitem = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowcommentreply", type="boolean", nullable=false)
     */
    private $allowcommentreply = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowreplycredit", type="boolean", nullable=false)
     */
    private $allowreplycredit = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ignorecensor", type="boolean", nullable=false)
     */
    private $ignorecensor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowsendallpm", type="boolean", nullable=false)
     */
    private $allowsendallpm = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="allowsendpmmaxnum", type="smallint", nullable=false)
     */
    private $allowsendpmmaxnum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="maximagesize", type="integer", nullable=false)
     */
    private $maximagesize = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmediacode", type="boolean", nullable=false)
     */
    private $allowmediacode = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowbegincode", type="boolean", nullable=false)
     */
    private $allowbegincode = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="allowat", type="smallint", nullable=false)
     */
    private $allowat = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowsetpublishdate", type="boolean", nullable=false)
     */
    private $allowsetpublishdate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowfollowcollection", type="boolean", nullable=false)
     */
    private $allowfollowcollection = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowcommentcollection", type="boolean", nullable=false)
     */
    private $allowcommentcollection = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="allowcreatecollection", type="smallint", nullable=false)
     */
    private $allowcreatecollection = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="forcesecques", type="boolean", nullable=false)
     */
    private $forcesecques = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="forcelogin", type="boolean", nullable=false)
     */
    private $forcelogin = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="closead", type="boolean", nullable=false)
     */
    private $closead = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="buildgroupcredits", type="smallint", nullable=false)
     */
    private $buildgroupcredits = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowimgcontent", type="boolean", nullable=false)
     */
    private $allowimgcontent = '0';



    /**
     * Get groupid
     *
     * @return integer 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set readaccess
     *
     * @param boolean $readaccess
     * @return PreCommonUsergroupField
     */
    public function setReadaccess($readaccess)
    {
        $this->readaccess = $readaccess;

        return $this;
    }

    /**
     * Get readaccess
     *
     * @return boolean 
     */
    public function getReadaccess()
    {
        return $this->readaccess;
    }

    /**
     * Set allowpost
     *
     * @param boolean $allowpost
     * @return PreCommonUsergroupField
     */
    public function setAllowpost($allowpost)
    {
        $this->allowpost = $allowpost;

        return $this;
    }

    /**
     * Get allowpost
     *
     * @return boolean 
     */
    public function getAllowpost()
    {
        return $this->allowpost;
    }

    /**
     * Set allowreply
     *
     * @param boolean $allowreply
     * @return PreCommonUsergroupField
     */
    public function setAllowreply($allowreply)
    {
        $this->allowreply = $allowreply;

        return $this;
    }

    /**
     * Get allowreply
     *
     * @return boolean 
     */
    public function getAllowreply()
    {
        return $this->allowreply;
    }

    /**
     * Set allowpostpoll
     *
     * @param boolean $allowpostpoll
     * @return PreCommonUsergroupField
     */
    public function setAllowpostpoll($allowpostpoll)
    {
        $this->allowpostpoll = $allowpostpoll;

        return $this;
    }

    /**
     * Get allowpostpoll
     *
     * @return boolean 
     */
    public function getAllowpostpoll()
    {
        return $this->allowpostpoll;
    }

    /**
     * Set allowpostreward
     *
     * @param boolean $allowpostreward
     * @return PreCommonUsergroupField
     */
    public function setAllowpostreward($allowpostreward)
    {
        $this->allowpostreward = $allowpostreward;

        return $this;
    }

    /**
     * Get allowpostreward
     *
     * @return boolean 
     */
    public function getAllowpostreward()
    {
        return $this->allowpostreward;
    }

    /**
     * Set allowposttrade
     *
     * @param boolean $allowposttrade
     * @return PreCommonUsergroupField
     */
    public function setAllowposttrade($allowposttrade)
    {
        $this->allowposttrade = $allowposttrade;

        return $this;
    }

    /**
     * Get allowposttrade
     *
     * @return boolean 
     */
    public function getAllowposttrade()
    {
        return $this->allowposttrade;
    }

    /**
     * Set allowpostactivity
     *
     * @param boolean $allowpostactivity
     * @return PreCommonUsergroupField
     */
    public function setAllowpostactivity($allowpostactivity)
    {
        $this->allowpostactivity = $allowpostactivity;

        return $this;
    }

    /**
     * Get allowpostactivity
     *
     * @return boolean 
     */
    public function getAllowpostactivity()
    {
        return $this->allowpostactivity;
    }

    /**
     * Set allowdirectpost
     *
     * @param boolean $allowdirectpost
     * @return PreCommonUsergroupField
     */
    public function setAllowdirectpost($allowdirectpost)
    {
        $this->allowdirectpost = $allowdirectpost;

        return $this;
    }

    /**
     * Get allowdirectpost
     *
     * @return boolean 
     */
    public function getAllowdirectpost()
    {
        return $this->allowdirectpost;
    }

    /**
     * Set allowgetattach
     *
     * @param boolean $allowgetattach
     * @return PreCommonUsergroupField
     */
    public function setAllowgetattach($allowgetattach)
    {
        $this->allowgetattach = $allowgetattach;

        return $this;
    }

    /**
     * Get allowgetattach
     *
     * @return boolean 
     */
    public function getAllowgetattach()
    {
        return $this->allowgetattach;
    }

    /**
     * Set allowgetimage
     *
     * @param boolean $allowgetimage
     * @return PreCommonUsergroupField
     */
    public function setAllowgetimage($allowgetimage)
    {
        $this->allowgetimage = $allowgetimage;

        return $this;
    }

    /**
     * Get allowgetimage
     *
     * @return boolean 
     */
    public function getAllowgetimage()
    {
        return $this->allowgetimage;
    }

    /**
     * Set allowpostattach
     *
     * @param boolean $allowpostattach
     * @return PreCommonUsergroupField
     */
    public function setAllowpostattach($allowpostattach)
    {
        $this->allowpostattach = $allowpostattach;

        return $this;
    }

    /**
     * Get allowpostattach
     *
     * @return boolean 
     */
    public function getAllowpostattach()
    {
        return $this->allowpostattach;
    }

    /**
     * Set allowpostimage
     *
     * @param boolean $allowpostimage
     * @return PreCommonUsergroupField
     */
    public function setAllowpostimage($allowpostimage)
    {
        $this->allowpostimage = $allowpostimage;

        return $this;
    }

    /**
     * Get allowpostimage
     *
     * @return boolean 
     */
    public function getAllowpostimage()
    {
        return $this->allowpostimage;
    }

    /**
     * Set allowvote
     *
     * @param boolean $allowvote
     * @return PreCommonUsergroupField
     */
    public function setAllowvote($allowvote)
    {
        $this->allowvote = $allowvote;

        return $this;
    }

    /**
     * Get allowvote
     *
     * @return boolean 
     */
    public function getAllowvote()
    {
        return $this->allowvote;
    }

    /**
     * Set allowsearch
     *
     * @param boolean $allowsearch
     * @return PreCommonUsergroupField
     */
    public function setAllowsearch($allowsearch)
    {
        $this->allowsearch = $allowsearch;

        return $this;
    }

    /**
     * Get allowsearch
     *
     * @return boolean 
     */
    public function getAllowsearch()
    {
        return $this->allowsearch;
    }

    /**
     * Set allowcstatus
     *
     * @param boolean $allowcstatus
     * @return PreCommonUsergroupField
     */
    public function setAllowcstatus($allowcstatus)
    {
        $this->allowcstatus = $allowcstatus;

        return $this;
    }

    /**
     * Get allowcstatus
     *
     * @return boolean 
     */
    public function getAllowcstatus()
    {
        return $this->allowcstatus;
    }

    /**
     * Set allowinvisible
     *
     * @param boolean $allowinvisible
     * @return PreCommonUsergroupField
     */
    public function setAllowinvisible($allowinvisible)
    {
        $this->allowinvisible = $allowinvisible;

        return $this;
    }

    /**
     * Get allowinvisible
     *
     * @return boolean 
     */
    public function getAllowinvisible()
    {
        return $this->allowinvisible;
    }

    /**
     * Set allowtransfer
     *
     * @param boolean $allowtransfer
     * @return PreCommonUsergroupField
     */
    public function setAllowtransfer($allowtransfer)
    {
        $this->allowtransfer = $allowtransfer;

        return $this;
    }

    /**
     * Get allowtransfer
     *
     * @return boolean 
     */
    public function getAllowtransfer()
    {
        return $this->allowtransfer;
    }

    /**
     * Set allowsetreadperm
     *
     * @param boolean $allowsetreadperm
     * @return PreCommonUsergroupField
     */
    public function setAllowsetreadperm($allowsetreadperm)
    {
        $this->allowsetreadperm = $allowsetreadperm;

        return $this;
    }

    /**
     * Get allowsetreadperm
     *
     * @return boolean 
     */
    public function getAllowsetreadperm()
    {
        return $this->allowsetreadperm;
    }

    /**
     * Set allowsetattachperm
     *
     * @param boolean $allowsetattachperm
     * @return PreCommonUsergroupField
     */
    public function setAllowsetattachperm($allowsetattachperm)
    {
        $this->allowsetattachperm = $allowsetattachperm;

        return $this;
    }

    /**
     * Get allowsetattachperm
     *
     * @return boolean 
     */
    public function getAllowsetattachperm()
    {
        return $this->allowsetattachperm;
    }

    /**
     * Set allowposttag
     *
     * @param boolean $allowposttag
     * @return PreCommonUsergroupField
     */
    public function setAllowposttag($allowposttag)
    {
        $this->allowposttag = $allowposttag;

        return $this;
    }

    /**
     * Get allowposttag
     *
     * @return boolean 
     */
    public function getAllowposttag()
    {
        return $this->allowposttag;
    }

    /**
     * Set allowhidecode
     *
     * @param boolean $allowhidecode
     * @return PreCommonUsergroupField
     */
    public function setAllowhidecode($allowhidecode)
    {
        $this->allowhidecode = $allowhidecode;

        return $this;
    }

    /**
     * Get allowhidecode
     *
     * @return boolean 
     */
    public function getAllowhidecode()
    {
        return $this->allowhidecode;
    }

    /**
     * Set allowhtml
     *
     * @param boolean $allowhtml
     * @return PreCommonUsergroupField
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
     * Set allowanonymous
     *
     * @param boolean $allowanonymous
     * @return PreCommonUsergroupField
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
     * Set allowsigbbcode
     *
     * @param boolean $allowsigbbcode
     * @return PreCommonUsergroupField
     */
    public function setAllowsigbbcode($allowsigbbcode)
    {
        $this->allowsigbbcode = $allowsigbbcode;

        return $this;
    }

    /**
     * Get allowsigbbcode
     *
     * @return boolean 
     */
    public function getAllowsigbbcode()
    {
        return $this->allowsigbbcode;
    }

    /**
     * Set allowsigimgcode
     *
     * @param boolean $allowsigimgcode
     * @return PreCommonUsergroupField
     */
    public function setAllowsigimgcode($allowsigimgcode)
    {
        $this->allowsigimgcode = $allowsigimgcode;

        return $this;
    }

    /**
     * Get allowsigimgcode
     *
     * @return boolean 
     */
    public function getAllowsigimgcode()
    {
        return $this->allowsigimgcode;
    }

    /**
     * Set allowmagics
     *
     * @param boolean $allowmagics
     * @return PreCommonUsergroupField
     */
    public function setAllowmagics($allowmagics)
    {
        $this->allowmagics = $allowmagics;

        return $this;
    }

    /**
     * Get allowmagics
     *
     * @return boolean 
     */
    public function getAllowmagics()
    {
        return $this->allowmagics;
    }

    /**
     * Set disableperiodctrl
     *
     * @param boolean $disableperiodctrl
     * @return PreCommonUsergroupField
     */
    public function setDisableperiodctrl($disableperiodctrl)
    {
        $this->disableperiodctrl = $disableperiodctrl;

        return $this;
    }

    /**
     * Get disableperiodctrl
     *
     * @return boolean 
     */
    public function getDisableperiodctrl()
    {
        return $this->disableperiodctrl;
    }

    /**
     * Set reasonpm
     *
     * @param boolean $reasonpm
     * @return PreCommonUsergroupField
     */
    public function setReasonpm($reasonpm)
    {
        $this->reasonpm = $reasonpm;

        return $this;
    }

    /**
     * Get reasonpm
     *
     * @return boolean 
     */
    public function getReasonpm()
    {
        return $this->reasonpm;
    }

    /**
     * Set maxprice
     *
     * @param integer $maxprice
     * @return PreCommonUsergroupField
     */
    public function setMaxprice($maxprice)
    {
        $this->maxprice = $maxprice;

        return $this;
    }

    /**
     * Get maxprice
     *
     * @return integer 
     */
    public function getMaxprice()
    {
        return $this->maxprice;
    }

    /**
     * Set maxsigsize
     *
     * @param integer $maxsigsize
     * @return PreCommonUsergroupField
     */
    public function setMaxsigsize($maxsigsize)
    {
        $this->maxsigsize = $maxsigsize;

        return $this;
    }

    /**
     * Get maxsigsize
     *
     * @return integer 
     */
    public function getMaxsigsize()
    {
        return $this->maxsigsize;
    }

    /**
     * Set maxattachsize
     *
     * @param integer $maxattachsize
     * @return PreCommonUsergroupField
     */
    public function setMaxattachsize($maxattachsize)
    {
        $this->maxattachsize = $maxattachsize;

        return $this;
    }

    /**
     * Get maxattachsize
     *
     * @return integer 
     */
    public function getMaxattachsize()
    {
        return $this->maxattachsize;
    }

    /**
     * Set maxsizeperday
     *
     * @param integer $maxsizeperday
     * @return PreCommonUsergroupField
     */
    public function setMaxsizeperday($maxsizeperday)
    {
        $this->maxsizeperday = $maxsizeperday;

        return $this;
    }

    /**
     * Get maxsizeperday
     *
     * @return integer 
     */
    public function getMaxsizeperday()
    {
        return $this->maxsizeperday;
    }

    /**
     * Set maxthreadsperhour
     *
     * @param boolean $maxthreadsperhour
     * @return PreCommonUsergroupField
     */
    public function setMaxthreadsperhour($maxthreadsperhour)
    {
        $this->maxthreadsperhour = $maxthreadsperhour;

        return $this;
    }

    /**
     * Get maxthreadsperhour
     *
     * @return boolean 
     */
    public function getMaxthreadsperhour()
    {
        return $this->maxthreadsperhour;
    }

    /**
     * Set maxpostsperhour
     *
     * @param boolean $maxpostsperhour
     * @return PreCommonUsergroupField
     */
    public function setMaxpostsperhour($maxpostsperhour)
    {
        $this->maxpostsperhour = $maxpostsperhour;

        return $this;
    }

    /**
     * Get maxpostsperhour
     *
     * @return boolean 
     */
    public function getMaxpostsperhour()
    {
        return $this->maxpostsperhour;
    }

    /**
     * Set attachextensions
     *
     * @param string $attachextensions
     * @return PreCommonUsergroupField
     */
    public function setAttachextensions($attachextensions)
    {
        $this->attachextensions = $attachextensions;

        return $this;
    }

    /**
     * Get attachextensions
     *
     * @return string 
     */
    public function getAttachextensions()
    {
        return $this->attachextensions;
    }

    /**
     * Set raterange
     *
     * @param string $raterange
     * @return PreCommonUsergroupField
     */
    public function setRaterange($raterange)
    {
        $this->raterange = $raterange;

        return $this;
    }

    /**
     * Get raterange
     *
     * @return string 
     */
    public function getRaterange()
    {
        return $this->raterange;
    }

    /**
     * Set loginreward
     *
     * @param string $loginreward
     * @return PreCommonUsergroupField
     */
    public function setLoginreward($loginreward)
    {
        $this->loginreward = $loginreward;

        return $this;
    }

    /**
     * Get loginreward
     *
     * @return string 
     */
    public function getLoginreward()
    {
        return $this->loginreward;
    }

    /**
     * Set mintradeprice
     *
     * @param integer $mintradeprice
     * @return PreCommonUsergroupField
     */
    public function setMintradeprice($mintradeprice)
    {
        $this->mintradeprice = $mintradeprice;

        return $this;
    }

    /**
     * Get mintradeprice
     *
     * @return integer 
     */
    public function getMintradeprice()
    {
        return $this->mintradeprice;
    }

    /**
     * Set maxtradeprice
     *
     * @param integer $maxtradeprice
     * @return PreCommonUsergroupField
     */
    public function setMaxtradeprice($maxtradeprice)
    {
        $this->maxtradeprice = $maxtradeprice;

        return $this;
    }

    /**
     * Get maxtradeprice
     *
     * @return integer 
     */
    public function getMaxtradeprice()
    {
        return $this->maxtradeprice;
    }

    /**
     * Set minrewardprice
     *
     * @param integer $minrewardprice
     * @return PreCommonUsergroupField
     */
    public function setMinrewardprice($minrewardprice)
    {
        $this->minrewardprice = $minrewardprice;

        return $this;
    }

    /**
     * Get minrewardprice
     *
     * @return integer 
     */
    public function getMinrewardprice()
    {
        return $this->minrewardprice;
    }

    /**
     * Set maxrewardprice
     *
     * @param integer $maxrewardprice
     * @return PreCommonUsergroupField
     */
    public function setMaxrewardprice($maxrewardprice)
    {
        $this->maxrewardprice = $maxrewardprice;

        return $this;
    }

    /**
     * Get maxrewardprice
     *
     * @return integer 
     */
    public function getMaxrewardprice()
    {
        return $this->maxrewardprice;
    }

    /**
     * Set magicsdiscount
     *
     * @param boolean $magicsdiscount
     * @return PreCommonUsergroupField
     */
    public function setMagicsdiscount($magicsdiscount)
    {
        $this->magicsdiscount = $magicsdiscount;

        return $this;
    }

    /**
     * Get magicsdiscount
     *
     * @return boolean 
     */
    public function getMagicsdiscount()
    {
        return $this->magicsdiscount;
    }

    /**
     * Set maxmagicsweight
     *
     * @param integer $maxmagicsweight
     * @return PreCommonUsergroupField
     */
    public function setMaxmagicsweight($maxmagicsweight)
    {
        $this->maxmagicsweight = $maxmagicsweight;

        return $this;
    }

    /**
     * Get maxmagicsweight
     *
     * @return integer 
     */
    public function getMaxmagicsweight()
    {
        return $this->maxmagicsweight;
    }

    /**
     * Set allowpostdebate
     *
     * @param boolean $allowpostdebate
     * @return PreCommonUsergroupField
     */
    public function setAllowpostdebate($allowpostdebate)
    {
        $this->allowpostdebate = $allowpostdebate;

        return $this;
    }

    /**
     * Get allowpostdebate
     *
     * @return boolean 
     */
    public function getAllowpostdebate()
    {
        return $this->allowpostdebate;
    }

    /**
     * Set tradestick
     *
     * @param boolean $tradestick
     * @return PreCommonUsergroupField
     */
    public function setTradestick($tradestick)
    {
        $this->tradestick = $tradestick;

        return $this;
    }

    /**
     * Get tradestick
     *
     * @return boolean 
     */
    public function getTradestick()
    {
        return $this->tradestick;
    }

    /**
     * Set exempt
     *
     * @param boolean $exempt
     * @return PreCommonUsergroupField
     */
    public function setExempt($exempt)
    {
        $this->exempt = $exempt;

        return $this;
    }

    /**
     * Get exempt
     *
     * @return boolean 
     */
    public function getExempt()
    {
        return $this->exempt;
    }

    /**
     * Set maxattachnum
     *
     * @param integer $maxattachnum
     * @return PreCommonUsergroupField
     */
    public function setMaxattachnum($maxattachnum)
    {
        $this->maxattachnum = $maxattachnum;

        return $this;
    }

    /**
     * Get maxattachnum
     *
     * @return integer 
     */
    public function getMaxattachnum()
    {
        return $this->maxattachnum;
    }

    /**
     * Set allowposturl
     *
     * @param boolean $allowposturl
     * @return PreCommonUsergroupField
     */
    public function setAllowposturl($allowposturl)
    {
        $this->allowposturl = $allowposturl;

        return $this;
    }

    /**
     * Get allowposturl
     *
     * @return boolean 
     */
    public function getAllowposturl()
    {
        return $this->allowposturl;
    }

    /**
     * Set allowrecommend
     *
     * @param boolean $allowrecommend
     * @return PreCommonUsergroupField
     */
    public function setAllowrecommend($allowrecommend)
    {
        $this->allowrecommend = $allowrecommend;

        return $this;
    }

    /**
     * Get allowrecommend
     *
     * @return boolean 
     */
    public function getAllowrecommend()
    {
        return $this->allowrecommend;
    }

    /**
     * Set allowpostrushreply
     *
     * @param boolean $allowpostrushreply
     * @return PreCommonUsergroupField
     */
    public function setAllowpostrushreply($allowpostrushreply)
    {
        $this->allowpostrushreply = $allowpostrushreply;

        return $this;
    }

    /**
     * Get allowpostrushreply
     *
     * @return boolean 
     */
    public function getAllowpostrushreply()
    {
        return $this->allowpostrushreply;
    }

    /**
     * Set maxfriendnum
     *
     * @param integer $maxfriendnum
     * @return PreCommonUsergroupField
     */
    public function setMaxfriendnum($maxfriendnum)
    {
        $this->maxfriendnum = $maxfriendnum;

        return $this;
    }

    /**
     * Get maxfriendnum
     *
     * @return integer 
     */
    public function getMaxfriendnum()
    {
        return $this->maxfriendnum;
    }

    /**
     * Set maxspacesize
     *
     * @param integer $maxspacesize
     * @return PreCommonUsergroupField
     */
    public function setMaxspacesize($maxspacesize)
    {
        $this->maxspacesize = $maxspacesize;

        return $this;
    }

    /**
     * Get maxspacesize
     *
     * @return integer 
     */
    public function getMaxspacesize()
    {
        return $this->maxspacesize;
    }

    /**
     * Set allowcomment
     *
     * @param boolean $allowcomment
     * @return PreCommonUsergroupField
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
     * Set allowcommentarticle
     *
     * @param integer $allowcommentarticle
     * @return PreCommonUsergroupField
     */
    public function setAllowcommentarticle($allowcommentarticle)
    {
        $this->allowcommentarticle = $allowcommentarticle;

        return $this;
    }

    /**
     * Get allowcommentarticle
     *
     * @return integer 
     */
    public function getAllowcommentarticle()
    {
        return $this->allowcommentarticle;
    }

    /**
     * Set searchinterval
     *
     * @param integer $searchinterval
     * @return PreCommonUsergroupField
     */
    public function setSearchinterval($searchinterval)
    {
        $this->searchinterval = $searchinterval;

        return $this;
    }

    /**
     * Get searchinterval
     *
     * @return integer 
     */
    public function getSearchinterval()
    {
        return $this->searchinterval;
    }

    /**
     * Set searchignore
     *
     * @param boolean $searchignore
     * @return PreCommonUsergroupField
     */
    public function setSearchignore($searchignore)
    {
        $this->searchignore = $searchignore;

        return $this;
    }

    /**
     * Get searchignore
     *
     * @return boolean 
     */
    public function getSearchignore()
    {
        return $this->searchignore;
    }

    /**
     * Set allowblog
     *
     * @param boolean $allowblog
     * @return PreCommonUsergroupField
     */
    public function setAllowblog($allowblog)
    {
        $this->allowblog = $allowblog;

        return $this;
    }

    /**
     * Get allowblog
     *
     * @return boolean 
     */
    public function getAllowblog()
    {
        return $this->allowblog;
    }

    /**
     * Set allowdoing
     *
     * @param boolean $allowdoing
     * @return PreCommonUsergroupField
     */
    public function setAllowdoing($allowdoing)
    {
        $this->allowdoing = $allowdoing;

        return $this;
    }

    /**
     * Get allowdoing
     *
     * @return boolean 
     */
    public function getAllowdoing()
    {
        return $this->allowdoing;
    }

    /**
     * Set allowupload
     *
     * @param boolean $allowupload
     * @return PreCommonUsergroupField
     */
    public function setAllowupload($allowupload)
    {
        $this->allowupload = $allowupload;

        return $this;
    }

    /**
     * Get allowupload
     *
     * @return boolean 
     */
    public function getAllowupload()
    {
        return $this->allowupload;
    }

    /**
     * Set allowshare
     *
     * @param boolean $allowshare
     * @return PreCommonUsergroupField
     */
    public function setAllowshare($allowshare)
    {
        $this->allowshare = $allowshare;

        return $this;
    }

    /**
     * Get allowshare
     *
     * @return boolean 
     */
    public function getAllowshare()
    {
        return $this->allowshare;
    }

    /**
     * Set allowblogmod
     *
     * @param boolean $allowblogmod
     * @return PreCommonUsergroupField
     */
    public function setAllowblogmod($allowblogmod)
    {
        $this->allowblogmod = $allowblogmod;

        return $this;
    }

    /**
     * Get allowblogmod
     *
     * @return boolean 
     */
    public function getAllowblogmod()
    {
        return $this->allowblogmod;
    }

    /**
     * Set allowdoingmod
     *
     * @param boolean $allowdoingmod
     * @return PreCommonUsergroupField
     */
    public function setAllowdoingmod($allowdoingmod)
    {
        $this->allowdoingmod = $allowdoingmod;

        return $this;
    }

    /**
     * Get allowdoingmod
     *
     * @return boolean 
     */
    public function getAllowdoingmod()
    {
        return $this->allowdoingmod;
    }

    /**
     * Set allowuploadmod
     *
     * @param boolean $allowuploadmod
     * @return PreCommonUsergroupField
     */
    public function setAllowuploadmod($allowuploadmod)
    {
        $this->allowuploadmod = $allowuploadmod;

        return $this;
    }

    /**
     * Get allowuploadmod
     *
     * @return boolean 
     */
    public function getAllowuploadmod()
    {
        return $this->allowuploadmod;
    }

    /**
     * Set allowsharemod
     *
     * @param boolean $allowsharemod
     * @return PreCommonUsergroupField
     */
    public function setAllowsharemod($allowsharemod)
    {
        $this->allowsharemod = $allowsharemod;

        return $this;
    }

    /**
     * Get allowsharemod
     *
     * @return boolean 
     */
    public function getAllowsharemod()
    {
        return $this->allowsharemod;
    }

    /**
     * Set allowcss
     *
     * @param boolean $allowcss
     * @return PreCommonUsergroupField
     */
    public function setAllowcss($allowcss)
    {
        $this->allowcss = $allowcss;

        return $this;
    }

    /**
     * Get allowcss
     *
     * @return boolean 
     */
    public function getAllowcss()
    {
        return $this->allowcss;
    }

    /**
     * Set allowpoke
     *
     * @param boolean $allowpoke
     * @return PreCommonUsergroupField
     */
    public function setAllowpoke($allowpoke)
    {
        $this->allowpoke = $allowpoke;

        return $this;
    }

    /**
     * Get allowpoke
     *
     * @return boolean 
     */
    public function getAllowpoke()
    {
        return $this->allowpoke;
    }

    /**
     * Set allowfriend
     *
     * @param boolean $allowfriend
     * @return PreCommonUsergroupField
     */
    public function setAllowfriend($allowfriend)
    {
        $this->allowfriend = $allowfriend;

        return $this;
    }

    /**
     * Get allowfriend
     *
     * @return boolean 
     */
    public function getAllowfriend()
    {
        return $this->allowfriend;
    }

    /**
     * Set allowclick
     *
     * @param boolean $allowclick
     * @return PreCommonUsergroupField
     */
    public function setAllowclick($allowclick)
    {
        $this->allowclick = $allowclick;

        return $this;
    }

    /**
     * Get allowclick
     *
     * @return boolean 
     */
    public function getAllowclick()
    {
        return $this->allowclick;
    }

    /**
     * Set allowmagic
     *
     * @param boolean $allowmagic
     * @return PreCommonUsergroupField
     */
    public function setAllowmagic($allowmagic)
    {
        $this->allowmagic = $allowmagic;

        return $this;
    }

    /**
     * Get allowmagic
     *
     * @return boolean 
     */
    public function getAllowmagic()
    {
        return $this->allowmagic;
    }

    /**
     * Set allowstat
     *
     * @param boolean $allowstat
     * @return PreCommonUsergroupField
     */
    public function setAllowstat($allowstat)
    {
        $this->allowstat = $allowstat;

        return $this;
    }

    /**
     * Get allowstat
     *
     * @return boolean 
     */
    public function getAllowstat()
    {
        return $this->allowstat;
    }

    /**
     * Set allowstatdata
     *
     * @param boolean $allowstatdata
     * @return PreCommonUsergroupField
     */
    public function setAllowstatdata($allowstatdata)
    {
        $this->allowstatdata = $allowstatdata;

        return $this;
    }

    /**
     * Get allowstatdata
     *
     * @return boolean 
     */
    public function getAllowstatdata()
    {
        return $this->allowstatdata;
    }

    /**
     * Set videophotoignore
     *
     * @param boolean $videophotoignore
     * @return PreCommonUsergroupField
     */
    public function setVideophotoignore($videophotoignore)
    {
        $this->videophotoignore = $videophotoignore;

        return $this;
    }

    /**
     * Get videophotoignore
     *
     * @return boolean 
     */
    public function getVideophotoignore()
    {
        return $this->videophotoignore;
    }

    /**
     * Set allowviewvideophoto
     *
     * @param boolean $allowviewvideophoto
     * @return PreCommonUsergroupField
     */
    public function setAllowviewvideophoto($allowviewvideophoto)
    {
        $this->allowviewvideophoto = $allowviewvideophoto;

        return $this;
    }

    /**
     * Get allowviewvideophoto
     *
     * @return boolean 
     */
    public function getAllowviewvideophoto()
    {
        return $this->allowviewvideophoto;
    }

    /**
     * Set allowmyop
     *
     * @param boolean $allowmyop
     * @return PreCommonUsergroupField
     */
    public function setAllowmyop($allowmyop)
    {
        $this->allowmyop = $allowmyop;

        return $this;
    }

    /**
     * Get allowmyop
     *
     * @return boolean 
     */
    public function getAllowmyop()
    {
        return $this->allowmyop;
    }

    /**
     * Set magicdiscount
     *
     * @param boolean $magicdiscount
     * @return PreCommonUsergroupField
     */
    public function setMagicdiscount($magicdiscount)
    {
        $this->magicdiscount = $magicdiscount;

        return $this;
    }

    /**
     * Get magicdiscount
     *
     * @return boolean 
     */
    public function getMagicdiscount()
    {
        return $this->magicdiscount;
    }

    /**
     * Set domainlength
     *
     * @param integer $domainlength
     * @return PreCommonUsergroupField
     */
    public function setDomainlength($domainlength)
    {
        $this->domainlength = $domainlength;

        return $this;
    }

    /**
     * Get domainlength
     *
     * @return integer 
     */
    public function getDomainlength()
    {
        return $this->domainlength;
    }

    /**
     * Set seccode
     *
     * @param boolean $seccode
     * @return PreCommonUsergroupField
     */
    public function setSeccode($seccode)
    {
        $this->seccode = $seccode;

        return $this;
    }

    /**
     * Get seccode
     *
     * @return boolean 
     */
    public function getSeccode()
    {
        return $this->seccode;
    }

    /**
     * Set disablepostctrl
     *
     * @param boolean $disablepostctrl
     * @return PreCommonUsergroupField
     */
    public function setDisablepostctrl($disablepostctrl)
    {
        $this->disablepostctrl = $disablepostctrl;

        return $this;
    }

    /**
     * Get disablepostctrl
     *
     * @return boolean 
     */
    public function getDisablepostctrl()
    {
        return $this->disablepostctrl;
    }

    /**
     * Set allowbuildgroup
     *
     * @param boolean $allowbuildgroup
     * @return PreCommonUsergroupField
     */
    public function setAllowbuildgroup($allowbuildgroup)
    {
        $this->allowbuildgroup = $allowbuildgroup;

        return $this;
    }

    /**
     * Get allowbuildgroup
     *
     * @return boolean 
     */
    public function getAllowbuildgroup()
    {
        return $this->allowbuildgroup;
    }

    /**
     * Set allowgroupdirectpost
     *
     * @param boolean $allowgroupdirectpost
     * @return PreCommonUsergroupField
     */
    public function setAllowgroupdirectpost($allowgroupdirectpost)
    {
        $this->allowgroupdirectpost = $allowgroupdirectpost;

        return $this;
    }

    /**
     * Get allowgroupdirectpost
     *
     * @return boolean 
     */
    public function getAllowgroupdirectpost()
    {
        return $this->allowgroupdirectpost;
    }

    /**
     * Set allowgroupposturl
     *
     * @param boolean $allowgroupposturl
     * @return PreCommonUsergroupField
     */
    public function setAllowgroupposturl($allowgroupposturl)
    {
        $this->allowgroupposturl = $allowgroupposturl;

        return $this;
    }

    /**
     * Get allowgroupposturl
     *
     * @return boolean 
     */
    public function getAllowgroupposturl()
    {
        return $this->allowgroupposturl;
    }

    /**
     * Set edittimelimit
     *
     * @param integer $edittimelimit
     * @return PreCommonUsergroupField
     */
    public function setEdittimelimit($edittimelimit)
    {
        $this->edittimelimit = $edittimelimit;

        return $this;
    }

    /**
     * Get edittimelimit
     *
     * @return integer 
     */
    public function getEdittimelimit()
    {
        return $this->edittimelimit;
    }

    /**
     * Set allowpostarticle
     *
     * @param boolean $allowpostarticle
     * @return PreCommonUsergroupField
     */
    public function setAllowpostarticle($allowpostarticle)
    {
        $this->allowpostarticle = $allowpostarticle;

        return $this;
    }

    /**
     * Get allowpostarticle
     *
     * @return boolean 
     */
    public function getAllowpostarticle()
    {
        return $this->allowpostarticle;
    }

    /**
     * Set allowdownlocalimg
     *
     * @param boolean $allowdownlocalimg
     * @return PreCommonUsergroupField
     */
    public function setAllowdownlocalimg($allowdownlocalimg)
    {
        $this->allowdownlocalimg = $allowdownlocalimg;

        return $this;
    }

    /**
     * Get allowdownlocalimg
     *
     * @return boolean 
     */
    public function getAllowdownlocalimg()
    {
        return $this->allowdownlocalimg;
    }

    /**
     * Set allowdownremoteimg
     *
     * @param boolean $allowdownremoteimg
     * @return PreCommonUsergroupField
     */
    public function setAllowdownremoteimg($allowdownremoteimg)
    {
        $this->allowdownremoteimg = $allowdownremoteimg;

        return $this;
    }

    /**
     * Get allowdownremoteimg
     *
     * @return boolean 
     */
    public function getAllowdownremoteimg()
    {
        return $this->allowdownremoteimg;
    }

    /**
     * Set allowpostarticlemod
     *
     * @param boolean $allowpostarticlemod
     * @return PreCommonUsergroupField
     */
    public function setAllowpostarticlemod($allowpostarticlemod)
    {
        $this->allowpostarticlemod = $allowpostarticlemod;

        return $this;
    }

    /**
     * Get allowpostarticlemod
     *
     * @return boolean 
     */
    public function getAllowpostarticlemod()
    {
        return $this->allowpostarticlemod;
    }

    /**
     * Set allowspacediyhtml
     *
     * @param boolean $allowspacediyhtml
     * @return PreCommonUsergroupField
     */
    public function setAllowspacediyhtml($allowspacediyhtml)
    {
        $this->allowspacediyhtml = $allowspacediyhtml;

        return $this;
    }

    /**
     * Get allowspacediyhtml
     *
     * @return boolean 
     */
    public function getAllowspacediyhtml()
    {
        return $this->allowspacediyhtml;
    }

    /**
     * Set allowspacediybbcode
     *
     * @param boolean $allowspacediybbcode
     * @return PreCommonUsergroupField
     */
    public function setAllowspacediybbcode($allowspacediybbcode)
    {
        $this->allowspacediybbcode = $allowspacediybbcode;

        return $this;
    }

    /**
     * Get allowspacediybbcode
     *
     * @return boolean 
     */
    public function getAllowspacediybbcode()
    {
        return $this->allowspacediybbcode;
    }

    /**
     * Set allowspacediyimgcode
     *
     * @param boolean $allowspacediyimgcode
     * @return PreCommonUsergroupField
     */
    public function setAllowspacediyimgcode($allowspacediyimgcode)
    {
        $this->allowspacediyimgcode = $allowspacediyimgcode;

        return $this;
    }

    /**
     * Get allowspacediyimgcode
     *
     * @return boolean 
     */
    public function getAllowspacediyimgcode()
    {
        return $this->allowspacediyimgcode;
    }

    /**
     * Set allowcommentpost
     *
     * @param boolean $allowcommentpost
     * @return PreCommonUsergroupField
     */
    public function setAllowcommentpost($allowcommentpost)
    {
        $this->allowcommentpost = $allowcommentpost;

        return $this;
    }

    /**
     * Get allowcommentpost
     *
     * @return boolean 
     */
    public function getAllowcommentpost()
    {
        return $this->allowcommentpost;
    }

    /**
     * Set allowcommentitem
     *
     * @param boolean $allowcommentitem
     * @return PreCommonUsergroupField
     */
    public function setAllowcommentitem($allowcommentitem)
    {
        $this->allowcommentitem = $allowcommentitem;

        return $this;
    }

    /**
     * Get allowcommentitem
     *
     * @return boolean 
     */
    public function getAllowcommentitem()
    {
        return $this->allowcommentitem;
    }

    /**
     * Set allowcommentreply
     *
     * @param boolean $allowcommentreply
     * @return PreCommonUsergroupField
     */
    public function setAllowcommentreply($allowcommentreply)
    {
        $this->allowcommentreply = $allowcommentreply;

        return $this;
    }

    /**
     * Get allowcommentreply
     *
     * @return boolean 
     */
    public function getAllowcommentreply()
    {
        return $this->allowcommentreply;
    }

    /**
     * Set allowreplycredit
     *
     * @param boolean $allowreplycredit
     * @return PreCommonUsergroupField
     */
    public function setAllowreplycredit($allowreplycredit)
    {
        $this->allowreplycredit = $allowreplycredit;

        return $this;
    }

    /**
     * Get allowreplycredit
     *
     * @return boolean 
     */
    public function getAllowreplycredit()
    {
        return $this->allowreplycredit;
    }

    /**
     * Set ignorecensor
     *
     * @param boolean $ignorecensor
     * @return PreCommonUsergroupField
     */
    public function setIgnorecensor($ignorecensor)
    {
        $this->ignorecensor = $ignorecensor;

        return $this;
    }

    /**
     * Get ignorecensor
     *
     * @return boolean 
     */
    public function getIgnorecensor()
    {
        return $this->ignorecensor;
    }

    /**
     * Set allowsendallpm
     *
     * @param boolean $allowsendallpm
     * @return PreCommonUsergroupField
     */
    public function setAllowsendallpm($allowsendallpm)
    {
        $this->allowsendallpm = $allowsendallpm;

        return $this;
    }

    /**
     * Get allowsendallpm
     *
     * @return boolean 
     */
    public function getAllowsendallpm()
    {
        return $this->allowsendallpm;
    }

    /**
     * Set allowsendpmmaxnum
     *
     * @param integer $allowsendpmmaxnum
     * @return PreCommonUsergroupField
     */
    public function setAllowsendpmmaxnum($allowsendpmmaxnum)
    {
        $this->allowsendpmmaxnum = $allowsendpmmaxnum;

        return $this;
    }

    /**
     * Get allowsendpmmaxnum
     *
     * @return integer 
     */
    public function getAllowsendpmmaxnum()
    {
        return $this->allowsendpmmaxnum;
    }

    /**
     * Set maximagesize
     *
     * @param integer $maximagesize
     * @return PreCommonUsergroupField
     */
    public function setMaximagesize($maximagesize)
    {
        $this->maximagesize = $maximagesize;

        return $this;
    }

    /**
     * Get maximagesize
     *
     * @return integer 
     */
    public function getMaximagesize()
    {
        return $this->maximagesize;
    }

    /**
     * Set allowmediacode
     *
     * @param boolean $allowmediacode
     * @return PreCommonUsergroupField
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
     * Set allowbegincode
     *
     * @param boolean $allowbegincode
     * @return PreCommonUsergroupField
     */
    public function setAllowbegincode($allowbegincode)
    {
        $this->allowbegincode = $allowbegincode;

        return $this;
    }

    /**
     * Get allowbegincode
     *
     * @return boolean 
     */
    public function getAllowbegincode()
    {
        return $this->allowbegincode;
    }

    /**
     * Set allowat
     *
     * @param integer $allowat
     * @return PreCommonUsergroupField
     */
    public function setAllowat($allowat)
    {
        $this->allowat = $allowat;

        return $this;
    }

    /**
     * Get allowat
     *
     * @return integer 
     */
    public function getAllowat()
    {
        return $this->allowat;
    }

    /**
     * Set allowsetpublishdate
     *
     * @param boolean $allowsetpublishdate
     * @return PreCommonUsergroupField
     */
    public function setAllowsetpublishdate($allowsetpublishdate)
    {
        $this->allowsetpublishdate = $allowsetpublishdate;

        return $this;
    }

    /**
     * Get allowsetpublishdate
     *
     * @return boolean 
     */
    public function getAllowsetpublishdate()
    {
        return $this->allowsetpublishdate;
    }

    /**
     * Set allowfollowcollection
     *
     * @param boolean $allowfollowcollection
     * @return PreCommonUsergroupField
     */
    public function setAllowfollowcollection($allowfollowcollection)
    {
        $this->allowfollowcollection = $allowfollowcollection;

        return $this;
    }

    /**
     * Get allowfollowcollection
     *
     * @return boolean 
     */
    public function getAllowfollowcollection()
    {
        return $this->allowfollowcollection;
    }

    /**
     * Set allowcommentcollection
     *
     * @param boolean $allowcommentcollection
     * @return PreCommonUsergroupField
     */
    public function setAllowcommentcollection($allowcommentcollection)
    {
        $this->allowcommentcollection = $allowcommentcollection;

        return $this;
    }

    /**
     * Get allowcommentcollection
     *
     * @return boolean 
     */
    public function getAllowcommentcollection()
    {
        return $this->allowcommentcollection;
    }

    /**
     * Set allowcreatecollection
     *
     * @param integer $allowcreatecollection
     * @return PreCommonUsergroupField
     */
    public function setAllowcreatecollection($allowcreatecollection)
    {
        $this->allowcreatecollection = $allowcreatecollection;

        return $this;
    }

    /**
     * Get allowcreatecollection
     *
     * @return integer 
     */
    public function getAllowcreatecollection()
    {
        return $this->allowcreatecollection;
    }

    /**
     * Set forcesecques
     *
     * @param boolean $forcesecques
     * @return PreCommonUsergroupField
     */
    public function setForcesecques($forcesecques)
    {
        $this->forcesecques = $forcesecques;

        return $this;
    }

    /**
     * Get forcesecques
     *
     * @return boolean 
     */
    public function getForcesecques()
    {
        return $this->forcesecques;
    }

    /**
     * Set forcelogin
     *
     * @param boolean $forcelogin
     * @return PreCommonUsergroupField
     */
    public function setForcelogin($forcelogin)
    {
        $this->forcelogin = $forcelogin;

        return $this;
    }

    /**
     * Get forcelogin
     *
     * @return boolean 
     */
    public function getForcelogin()
    {
        return $this->forcelogin;
    }

    /**
     * Set closead
     *
     * @param boolean $closead
     * @return PreCommonUsergroupField
     */
    public function setClosead($closead)
    {
        $this->closead = $closead;

        return $this;
    }

    /**
     * Get closead
     *
     * @return boolean 
     */
    public function getClosead()
    {
        return $this->closead;
    }

    /**
     * Set buildgroupcredits
     *
     * @param integer $buildgroupcredits
     * @return PreCommonUsergroupField
     */
    public function setBuildgroupcredits($buildgroupcredits)
    {
        $this->buildgroupcredits = $buildgroupcredits;

        return $this;
    }

    /**
     * Get buildgroupcredits
     *
     * @return integer 
     */
    public function getBuildgroupcredits()
    {
        return $this->buildgroupcredits;
    }

    /**
     * Set allowimgcontent
     *
     * @param boolean $allowimgcontent
     * @return PreCommonUsergroupField
     */
    public function setAllowimgcontent($allowimgcontent)
    {
        $this->allowimgcontent = $allowimgcontent;

        return $this;
    }

    /**
     * Get allowimgcontent
     *
     * @return boolean 
     */
    public function getAllowimgcontent()
    {
        return $this->allowimgcontent;
    }
}
