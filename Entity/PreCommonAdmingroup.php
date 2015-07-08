<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonAdmingroup
 *
 * @ORM\Table(name="pre_common_admingroup")
 * @ORM\Entity
 */
class PreCommonAdmingroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="admingid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $admingid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="alloweditpost", type="boolean", nullable=false)
     */
    private $alloweditpost = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="alloweditpoll", type="boolean", nullable=false)
     */
    private $alloweditpoll = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowstickthread", type="boolean", nullable=false)
     */
    private $allowstickthread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmodpost", type="boolean", nullable=false)
     */
    private $allowmodpost = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowdelpost", type="boolean", nullable=false)
     */
    private $allowdelpost = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmassprune", type="boolean", nullable=false)
     */
    private $allowmassprune = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowrefund", type="boolean", nullable=false)
     */
    private $allowrefund = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowcensorword", type="boolean", nullable=false)
     */
    private $allowcensorword = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowviewip", type="boolean", nullable=false)
     */
    private $allowviewip = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowbanip", type="boolean", nullable=false)
     */
    private $allowbanip = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowedituser", type="boolean", nullable=false)
     */
    private $allowedituser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmoduser", type="boolean", nullable=false)
     */
    private $allowmoduser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowbanuser", type="boolean", nullable=false)
     */
    private $allowbanuser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowbanvisituser", type="boolean", nullable=false)
     */
    private $allowbanvisituser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowpostannounce", type="boolean", nullable=false)
     */
    private $allowpostannounce = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowviewlog", type="boolean", nullable=false)
     */
    private $allowviewlog = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowbanpost", type="boolean", nullable=false)
     */
    private $allowbanpost = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="supe_allowpushthread", type="boolean", nullable=false)
     */
    private $supeAllowpushthread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowhighlightthread", type="boolean", nullable=false)
     */
    private $allowhighlightthread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowlivethread", type="boolean", nullable=false)
     */
    private $allowlivethread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowdigestthread", type="boolean", nullable=false)
     */
    private $allowdigestthread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowrecommendthread", type="boolean", nullable=false)
     */
    private $allowrecommendthread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowbumpthread", type="boolean", nullable=false)
     */
    private $allowbumpthread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowclosethread", type="boolean", nullable=false)
     */
    private $allowclosethread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmovethread", type="boolean", nullable=false)
     */
    private $allowmovethread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowedittypethread", type="boolean", nullable=false)
     */
    private $allowedittypethread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowstampthread", type="boolean", nullable=false)
     */
    private $allowstampthread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowstamplist", type="boolean", nullable=false)
     */
    private $allowstamplist = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowcopythread", type="boolean", nullable=false)
     */
    private $allowcopythread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmergethread", type="boolean", nullable=false)
     */
    private $allowmergethread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowsplitthread", type="boolean", nullable=false)
     */
    private $allowsplitthread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowrepairthread", type="boolean", nullable=false)
     */
    private $allowrepairthread = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowwarnpost", type="boolean", nullable=false)
     */
    private $allowwarnpost = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowviewreport", type="boolean", nullable=false)
     */
    private $allowviewreport = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="alloweditforum", type="boolean", nullable=false)
     */
    private $alloweditforum = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowremovereward", type="boolean", nullable=false)
     */
    private $allowremovereward = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowedittrade", type="boolean", nullable=false)
     */
    private $allowedittrade = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="alloweditactivity", type="boolean", nullable=false)
     */
    private $alloweditactivity = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowstickreply", type="boolean", nullable=false)
     */
    private $allowstickreply = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmanagearticle", type="boolean", nullable=false)
     */
    private $allowmanagearticle = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowaddtopic", type="boolean", nullable=false)
     */
    private $allowaddtopic = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmanagetopic", type="boolean", nullable=false)
     */
    private $allowmanagetopic = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowdiy", type="boolean", nullable=false)
     */
    private $allowdiy = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowclearrecycle", type="boolean", nullable=false)
     */
    private $allowclearrecycle = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmanagetag", type="boolean", nullable=false)
     */
    private $allowmanagetag = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="alloweditusertag", type="boolean", nullable=false)
     */
    private $alloweditusertag = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="managefeed", type="boolean", nullable=false)
     */
    private $managefeed = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="managedoing", type="boolean", nullable=false)
     */
    private $managedoing = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="manageshare", type="boolean", nullable=false)
     */
    private $manageshare = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="manageblog", type="boolean", nullable=false)
     */
    private $manageblog = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="managealbum", type="boolean", nullable=false)
     */
    private $managealbum = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="managecomment", type="boolean", nullable=false)
     */
    private $managecomment = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="managemagiclog", type="boolean", nullable=false)
     */
    private $managemagiclog = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="managereport", type="boolean", nullable=false)
     */
    private $managereport = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="managehotuser", type="boolean", nullable=false)
     */
    private $managehotuser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="managedefaultuser", type="boolean", nullable=false)
     */
    private $managedefaultuser = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="managevideophoto", type="boolean", nullable=false)
     */
    private $managevideophoto = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="managemagic", type="boolean", nullable=false)
     */
    private $managemagic = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="manageclick", type="boolean", nullable=false)
     */
    private $manageclick = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmanagecollection", type="boolean", nullable=false)
     */
    private $allowmanagecollection = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allowmakehtml", type="boolean", nullable=false)
     */
    private $allowmakehtml = '0';



    /**
     * Get admingid
     *
     * @return integer 
     */
    public function getAdmingid()
    {
        return $this->admingid;
    }

    /**
     * Set alloweditpost
     *
     * @param boolean $alloweditpost
     * @return PreCommonAdmingroup
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
     * Set alloweditpoll
     *
     * @param boolean $alloweditpoll
     * @return PreCommonAdmingroup
     */
    public function setAlloweditpoll($alloweditpoll)
    {
        $this->alloweditpoll = $alloweditpoll;

        return $this;
    }

    /**
     * Get alloweditpoll
     *
     * @return boolean 
     */
    public function getAlloweditpoll()
    {
        return $this->alloweditpoll;
    }

    /**
     * Set allowstickthread
     *
     * @param boolean $allowstickthread
     * @return PreCommonAdmingroup
     */
    public function setAllowstickthread($allowstickthread)
    {
        $this->allowstickthread = $allowstickthread;

        return $this;
    }

    /**
     * Get allowstickthread
     *
     * @return boolean 
     */
    public function getAllowstickthread()
    {
        return $this->allowstickthread;
    }

    /**
     * Set allowmodpost
     *
     * @param boolean $allowmodpost
     * @return PreCommonAdmingroup
     */
    public function setAllowmodpost($allowmodpost)
    {
        $this->allowmodpost = $allowmodpost;

        return $this;
    }

    /**
     * Get allowmodpost
     *
     * @return boolean 
     */
    public function getAllowmodpost()
    {
        return $this->allowmodpost;
    }

    /**
     * Set allowdelpost
     *
     * @param boolean $allowdelpost
     * @return PreCommonAdmingroup
     */
    public function setAllowdelpost($allowdelpost)
    {
        $this->allowdelpost = $allowdelpost;

        return $this;
    }

    /**
     * Get allowdelpost
     *
     * @return boolean 
     */
    public function getAllowdelpost()
    {
        return $this->allowdelpost;
    }

    /**
     * Set allowmassprune
     *
     * @param boolean $allowmassprune
     * @return PreCommonAdmingroup
     */
    public function setAllowmassprune($allowmassprune)
    {
        $this->allowmassprune = $allowmassprune;

        return $this;
    }

    /**
     * Get allowmassprune
     *
     * @return boolean 
     */
    public function getAllowmassprune()
    {
        return $this->allowmassprune;
    }

    /**
     * Set allowrefund
     *
     * @param boolean $allowrefund
     * @return PreCommonAdmingroup
     */
    public function setAllowrefund($allowrefund)
    {
        $this->allowrefund = $allowrefund;

        return $this;
    }

    /**
     * Get allowrefund
     *
     * @return boolean 
     */
    public function getAllowrefund()
    {
        return $this->allowrefund;
    }

    /**
     * Set allowcensorword
     *
     * @param boolean $allowcensorword
     * @return PreCommonAdmingroup
     */
    public function setAllowcensorword($allowcensorword)
    {
        $this->allowcensorword = $allowcensorword;

        return $this;
    }

    /**
     * Get allowcensorword
     *
     * @return boolean 
     */
    public function getAllowcensorword()
    {
        return $this->allowcensorword;
    }

    /**
     * Set allowviewip
     *
     * @param boolean $allowviewip
     * @return PreCommonAdmingroup
     */
    public function setAllowviewip($allowviewip)
    {
        $this->allowviewip = $allowviewip;

        return $this;
    }

    /**
     * Get allowviewip
     *
     * @return boolean 
     */
    public function getAllowviewip()
    {
        return $this->allowviewip;
    }

    /**
     * Set allowbanip
     *
     * @param boolean $allowbanip
     * @return PreCommonAdmingroup
     */
    public function setAllowbanip($allowbanip)
    {
        $this->allowbanip = $allowbanip;

        return $this;
    }

    /**
     * Get allowbanip
     *
     * @return boolean 
     */
    public function getAllowbanip()
    {
        return $this->allowbanip;
    }

    /**
     * Set allowedituser
     *
     * @param boolean $allowedituser
     * @return PreCommonAdmingroup
     */
    public function setAllowedituser($allowedituser)
    {
        $this->allowedituser = $allowedituser;

        return $this;
    }

    /**
     * Get allowedituser
     *
     * @return boolean 
     */
    public function getAllowedituser()
    {
        return $this->allowedituser;
    }

    /**
     * Set allowmoduser
     *
     * @param boolean $allowmoduser
     * @return PreCommonAdmingroup
     */
    public function setAllowmoduser($allowmoduser)
    {
        $this->allowmoduser = $allowmoduser;

        return $this;
    }

    /**
     * Get allowmoduser
     *
     * @return boolean 
     */
    public function getAllowmoduser()
    {
        return $this->allowmoduser;
    }

    /**
     * Set allowbanuser
     *
     * @param boolean $allowbanuser
     * @return PreCommonAdmingroup
     */
    public function setAllowbanuser($allowbanuser)
    {
        $this->allowbanuser = $allowbanuser;

        return $this;
    }

    /**
     * Get allowbanuser
     *
     * @return boolean 
     */
    public function getAllowbanuser()
    {
        return $this->allowbanuser;
    }

    /**
     * Set allowbanvisituser
     *
     * @param boolean $allowbanvisituser
     * @return PreCommonAdmingroup
     */
    public function setAllowbanvisituser($allowbanvisituser)
    {
        $this->allowbanvisituser = $allowbanvisituser;

        return $this;
    }

    /**
     * Get allowbanvisituser
     *
     * @return boolean 
     */
    public function getAllowbanvisituser()
    {
        return $this->allowbanvisituser;
    }

    /**
     * Set allowpostannounce
     *
     * @param boolean $allowpostannounce
     * @return PreCommonAdmingroup
     */
    public function setAllowpostannounce($allowpostannounce)
    {
        $this->allowpostannounce = $allowpostannounce;

        return $this;
    }

    /**
     * Get allowpostannounce
     *
     * @return boolean 
     */
    public function getAllowpostannounce()
    {
        return $this->allowpostannounce;
    }

    /**
     * Set allowviewlog
     *
     * @param boolean $allowviewlog
     * @return PreCommonAdmingroup
     */
    public function setAllowviewlog($allowviewlog)
    {
        $this->allowviewlog = $allowviewlog;

        return $this;
    }

    /**
     * Get allowviewlog
     *
     * @return boolean 
     */
    public function getAllowviewlog()
    {
        return $this->allowviewlog;
    }

    /**
     * Set allowbanpost
     *
     * @param boolean $allowbanpost
     * @return PreCommonAdmingroup
     */
    public function setAllowbanpost($allowbanpost)
    {
        $this->allowbanpost = $allowbanpost;

        return $this;
    }

    /**
     * Get allowbanpost
     *
     * @return boolean 
     */
    public function getAllowbanpost()
    {
        return $this->allowbanpost;
    }

    /**
     * Set supeAllowpushthread
     *
     * @param boolean $supeAllowpushthread
     * @return PreCommonAdmingroup
     */
    public function setSupeAllowpushthread($supeAllowpushthread)
    {
        $this->supeAllowpushthread = $supeAllowpushthread;

        return $this;
    }

    /**
     * Get supeAllowpushthread
     *
     * @return boolean 
     */
    public function getSupeAllowpushthread()
    {
        return $this->supeAllowpushthread;
    }

    /**
     * Set allowhighlightthread
     *
     * @param boolean $allowhighlightthread
     * @return PreCommonAdmingroup
     */
    public function setAllowhighlightthread($allowhighlightthread)
    {
        $this->allowhighlightthread = $allowhighlightthread;

        return $this;
    }

    /**
     * Get allowhighlightthread
     *
     * @return boolean 
     */
    public function getAllowhighlightthread()
    {
        return $this->allowhighlightthread;
    }

    /**
     * Set allowlivethread
     *
     * @param boolean $allowlivethread
     * @return PreCommonAdmingroup
     */
    public function setAllowlivethread($allowlivethread)
    {
        $this->allowlivethread = $allowlivethread;

        return $this;
    }

    /**
     * Get allowlivethread
     *
     * @return boolean 
     */
    public function getAllowlivethread()
    {
        return $this->allowlivethread;
    }

    /**
     * Set allowdigestthread
     *
     * @param boolean $allowdigestthread
     * @return PreCommonAdmingroup
     */
    public function setAllowdigestthread($allowdigestthread)
    {
        $this->allowdigestthread = $allowdigestthread;

        return $this;
    }

    /**
     * Get allowdigestthread
     *
     * @return boolean 
     */
    public function getAllowdigestthread()
    {
        return $this->allowdigestthread;
    }

    /**
     * Set allowrecommendthread
     *
     * @param boolean $allowrecommendthread
     * @return PreCommonAdmingroup
     */
    public function setAllowrecommendthread($allowrecommendthread)
    {
        $this->allowrecommendthread = $allowrecommendthread;

        return $this;
    }

    /**
     * Get allowrecommendthread
     *
     * @return boolean 
     */
    public function getAllowrecommendthread()
    {
        return $this->allowrecommendthread;
    }

    /**
     * Set allowbumpthread
     *
     * @param boolean $allowbumpthread
     * @return PreCommonAdmingroup
     */
    public function setAllowbumpthread($allowbumpthread)
    {
        $this->allowbumpthread = $allowbumpthread;

        return $this;
    }

    /**
     * Get allowbumpthread
     *
     * @return boolean 
     */
    public function getAllowbumpthread()
    {
        return $this->allowbumpthread;
    }

    /**
     * Set allowclosethread
     *
     * @param boolean $allowclosethread
     * @return PreCommonAdmingroup
     */
    public function setAllowclosethread($allowclosethread)
    {
        $this->allowclosethread = $allowclosethread;

        return $this;
    }

    /**
     * Get allowclosethread
     *
     * @return boolean 
     */
    public function getAllowclosethread()
    {
        return $this->allowclosethread;
    }

    /**
     * Set allowmovethread
     *
     * @param boolean $allowmovethread
     * @return PreCommonAdmingroup
     */
    public function setAllowmovethread($allowmovethread)
    {
        $this->allowmovethread = $allowmovethread;

        return $this;
    }

    /**
     * Get allowmovethread
     *
     * @return boolean 
     */
    public function getAllowmovethread()
    {
        return $this->allowmovethread;
    }

    /**
     * Set allowedittypethread
     *
     * @param boolean $allowedittypethread
     * @return PreCommonAdmingroup
     */
    public function setAllowedittypethread($allowedittypethread)
    {
        $this->allowedittypethread = $allowedittypethread;

        return $this;
    }

    /**
     * Get allowedittypethread
     *
     * @return boolean 
     */
    public function getAllowedittypethread()
    {
        return $this->allowedittypethread;
    }

    /**
     * Set allowstampthread
     *
     * @param boolean $allowstampthread
     * @return PreCommonAdmingroup
     */
    public function setAllowstampthread($allowstampthread)
    {
        $this->allowstampthread = $allowstampthread;

        return $this;
    }

    /**
     * Get allowstampthread
     *
     * @return boolean 
     */
    public function getAllowstampthread()
    {
        return $this->allowstampthread;
    }

    /**
     * Set allowstamplist
     *
     * @param boolean $allowstamplist
     * @return PreCommonAdmingroup
     */
    public function setAllowstamplist($allowstamplist)
    {
        $this->allowstamplist = $allowstamplist;

        return $this;
    }

    /**
     * Get allowstamplist
     *
     * @return boolean 
     */
    public function getAllowstamplist()
    {
        return $this->allowstamplist;
    }

    /**
     * Set allowcopythread
     *
     * @param boolean $allowcopythread
     * @return PreCommonAdmingroup
     */
    public function setAllowcopythread($allowcopythread)
    {
        $this->allowcopythread = $allowcopythread;

        return $this;
    }

    /**
     * Get allowcopythread
     *
     * @return boolean 
     */
    public function getAllowcopythread()
    {
        return $this->allowcopythread;
    }

    /**
     * Set allowmergethread
     *
     * @param boolean $allowmergethread
     * @return PreCommonAdmingroup
     */
    public function setAllowmergethread($allowmergethread)
    {
        $this->allowmergethread = $allowmergethread;

        return $this;
    }

    /**
     * Get allowmergethread
     *
     * @return boolean 
     */
    public function getAllowmergethread()
    {
        return $this->allowmergethread;
    }

    /**
     * Set allowsplitthread
     *
     * @param boolean $allowsplitthread
     * @return PreCommonAdmingroup
     */
    public function setAllowsplitthread($allowsplitthread)
    {
        $this->allowsplitthread = $allowsplitthread;

        return $this;
    }

    /**
     * Get allowsplitthread
     *
     * @return boolean 
     */
    public function getAllowsplitthread()
    {
        return $this->allowsplitthread;
    }

    /**
     * Set allowrepairthread
     *
     * @param boolean $allowrepairthread
     * @return PreCommonAdmingroup
     */
    public function setAllowrepairthread($allowrepairthread)
    {
        $this->allowrepairthread = $allowrepairthread;

        return $this;
    }

    /**
     * Get allowrepairthread
     *
     * @return boolean 
     */
    public function getAllowrepairthread()
    {
        return $this->allowrepairthread;
    }

    /**
     * Set allowwarnpost
     *
     * @param boolean $allowwarnpost
     * @return PreCommonAdmingroup
     */
    public function setAllowwarnpost($allowwarnpost)
    {
        $this->allowwarnpost = $allowwarnpost;

        return $this;
    }

    /**
     * Get allowwarnpost
     *
     * @return boolean 
     */
    public function getAllowwarnpost()
    {
        return $this->allowwarnpost;
    }

    /**
     * Set allowviewreport
     *
     * @param boolean $allowviewreport
     * @return PreCommonAdmingroup
     */
    public function setAllowviewreport($allowviewreport)
    {
        $this->allowviewreport = $allowviewreport;

        return $this;
    }

    /**
     * Get allowviewreport
     *
     * @return boolean 
     */
    public function getAllowviewreport()
    {
        return $this->allowviewreport;
    }

    /**
     * Set alloweditforum
     *
     * @param boolean $alloweditforum
     * @return PreCommonAdmingroup
     */
    public function setAlloweditforum($alloweditforum)
    {
        $this->alloweditforum = $alloweditforum;

        return $this;
    }

    /**
     * Get alloweditforum
     *
     * @return boolean 
     */
    public function getAlloweditforum()
    {
        return $this->alloweditforum;
    }

    /**
     * Set allowremovereward
     *
     * @param boolean $allowremovereward
     * @return PreCommonAdmingroup
     */
    public function setAllowremovereward($allowremovereward)
    {
        $this->allowremovereward = $allowremovereward;

        return $this;
    }

    /**
     * Get allowremovereward
     *
     * @return boolean 
     */
    public function getAllowremovereward()
    {
        return $this->allowremovereward;
    }

    /**
     * Set allowedittrade
     *
     * @param boolean $allowedittrade
     * @return PreCommonAdmingroup
     */
    public function setAllowedittrade($allowedittrade)
    {
        $this->allowedittrade = $allowedittrade;

        return $this;
    }

    /**
     * Get allowedittrade
     *
     * @return boolean 
     */
    public function getAllowedittrade()
    {
        return $this->allowedittrade;
    }

    /**
     * Set alloweditactivity
     *
     * @param boolean $alloweditactivity
     * @return PreCommonAdmingroup
     */
    public function setAlloweditactivity($alloweditactivity)
    {
        $this->alloweditactivity = $alloweditactivity;

        return $this;
    }

    /**
     * Get alloweditactivity
     *
     * @return boolean 
     */
    public function getAlloweditactivity()
    {
        return $this->alloweditactivity;
    }

    /**
     * Set allowstickreply
     *
     * @param boolean $allowstickreply
     * @return PreCommonAdmingroup
     */
    public function setAllowstickreply($allowstickreply)
    {
        $this->allowstickreply = $allowstickreply;

        return $this;
    }

    /**
     * Get allowstickreply
     *
     * @return boolean 
     */
    public function getAllowstickreply()
    {
        return $this->allowstickreply;
    }

    /**
     * Set allowmanagearticle
     *
     * @param boolean $allowmanagearticle
     * @return PreCommonAdmingroup
     */
    public function setAllowmanagearticle($allowmanagearticle)
    {
        $this->allowmanagearticle = $allowmanagearticle;

        return $this;
    }

    /**
     * Get allowmanagearticle
     *
     * @return boolean 
     */
    public function getAllowmanagearticle()
    {
        return $this->allowmanagearticle;
    }

    /**
     * Set allowaddtopic
     *
     * @param boolean $allowaddtopic
     * @return PreCommonAdmingroup
     */
    public function setAllowaddtopic($allowaddtopic)
    {
        $this->allowaddtopic = $allowaddtopic;

        return $this;
    }

    /**
     * Get allowaddtopic
     *
     * @return boolean 
     */
    public function getAllowaddtopic()
    {
        return $this->allowaddtopic;
    }

    /**
     * Set allowmanagetopic
     *
     * @param boolean $allowmanagetopic
     * @return PreCommonAdmingroup
     */
    public function setAllowmanagetopic($allowmanagetopic)
    {
        $this->allowmanagetopic = $allowmanagetopic;

        return $this;
    }

    /**
     * Get allowmanagetopic
     *
     * @return boolean 
     */
    public function getAllowmanagetopic()
    {
        return $this->allowmanagetopic;
    }

    /**
     * Set allowdiy
     *
     * @param boolean $allowdiy
     * @return PreCommonAdmingroup
     */
    public function setAllowdiy($allowdiy)
    {
        $this->allowdiy = $allowdiy;

        return $this;
    }

    /**
     * Get allowdiy
     *
     * @return boolean 
     */
    public function getAllowdiy()
    {
        return $this->allowdiy;
    }

    /**
     * Set allowclearrecycle
     *
     * @param boolean $allowclearrecycle
     * @return PreCommonAdmingroup
     */
    public function setAllowclearrecycle($allowclearrecycle)
    {
        $this->allowclearrecycle = $allowclearrecycle;

        return $this;
    }

    /**
     * Get allowclearrecycle
     *
     * @return boolean 
     */
    public function getAllowclearrecycle()
    {
        return $this->allowclearrecycle;
    }

    /**
     * Set allowmanagetag
     *
     * @param boolean $allowmanagetag
     * @return PreCommonAdmingroup
     */
    public function setAllowmanagetag($allowmanagetag)
    {
        $this->allowmanagetag = $allowmanagetag;

        return $this;
    }

    /**
     * Get allowmanagetag
     *
     * @return boolean 
     */
    public function getAllowmanagetag()
    {
        return $this->allowmanagetag;
    }

    /**
     * Set alloweditusertag
     *
     * @param boolean $alloweditusertag
     * @return PreCommonAdmingroup
     */
    public function setAlloweditusertag($alloweditusertag)
    {
        $this->alloweditusertag = $alloweditusertag;

        return $this;
    }

    /**
     * Get alloweditusertag
     *
     * @return boolean 
     */
    public function getAlloweditusertag()
    {
        return $this->alloweditusertag;
    }

    /**
     * Set managefeed
     *
     * @param boolean $managefeed
     * @return PreCommonAdmingroup
     */
    public function setManagefeed($managefeed)
    {
        $this->managefeed = $managefeed;

        return $this;
    }

    /**
     * Get managefeed
     *
     * @return boolean 
     */
    public function getManagefeed()
    {
        return $this->managefeed;
    }

    /**
     * Set managedoing
     *
     * @param boolean $managedoing
     * @return PreCommonAdmingroup
     */
    public function setManagedoing($managedoing)
    {
        $this->managedoing = $managedoing;

        return $this;
    }

    /**
     * Get managedoing
     *
     * @return boolean 
     */
    public function getManagedoing()
    {
        return $this->managedoing;
    }

    /**
     * Set manageshare
     *
     * @param boolean $manageshare
     * @return PreCommonAdmingroup
     */
    public function setManageshare($manageshare)
    {
        $this->manageshare = $manageshare;

        return $this;
    }

    /**
     * Get manageshare
     *
     * @return boolean 
     */
    public function getManageshare()
    {
        return $this->manageshare;
    }

    /**
     * Set manageblog
     *
     * @param boolean $manageblog
     * @return PreCommonAdmingroup
     */
    public function setManageblog($manageblog)
    {
        $this->manageblog = $manageblog;

        return $this;
    }

    /**
     * Get manageblog
     *
     * @return boolean 
     */
    public function getManageblog()
    {
        return $this->manageblog;
    }

    /**
     * Set managealbum
     *
     * @param boolean $managealbum
     * @return PreCommonAdmingroup
     */
    public function setManagealbum($managealbum)
    {
        $this->managealbum = $managealbum;

        return $this;
    }

    /**
     * Get managealbum
     *
     * @return boolean 
     */
    public function getManagealbum()
    {
        return $this->managealbum;
    }

    /**
     * Set managecomment
     *
     * @param boolean $managecomment
     * @return PreCommonAdmingroup
     */
    public function setManagecomment($managecomment)
    {
        $this->managecomment = $managecomment;

        return $this;
    }

    /**
     * Get managecomment
     *
     * @return boolean 
     */
    public function getManagecomment()
    {
        return $this->managecomment;
    }

    /**
     * Set managemagiclog
     *
     * @param boolean $managemagiclog
     * @return PreCommonAdmingroup
     */
    public function setManagemagiclog($managemagiclog)
    {
        $this->managemagiclog = $managemagiclog;

        return $this;
    }

    /**
     * Get managemagiclog
     *
     * @return boolean 
     */
    public function getManagemagiclog()
    {
        return $this->managemagiclog;
    }

    /**
     * Set managereport
     *
     * @param boolean $managereport
     * @return PreCommonAdmingroup
     */
    public function setManagereport($managereport)
    {
        $this->managereport = $managereport;

        return $this;
    }

    /**
     * Get managereport
     *
     * @return boolean 
     */
    public function getManagereport()
    {
        return $this->managereport;
    }

    /**
     * Set managehotuser
     *
     * @param boolean $managehotuser
     * @return PreCommonAdmingroup
     */
    public function setManagehotuser($managehotuser)
    {
        $this->managehotuser = $managehotuser;

        return $this;
    }

    /**
     * Get managehotuser
     *
     * @return boolean 
     */
    public function getManagehotuser()
    {
        return $this->managehotuser;
    }

    /**
     * Set managedefaultuser
     *
     * @param boolean $managedefaultuser
     * @return PreCommonAdmingroup
     */
    public function setManagedefaultuser($managedefaultuser)
    {
        $this->managedefaultuser = $managedefaultuser;

        return $this;
    }

    /**
     * Get managedefaultuser
     *
     * @return boolean 
     */
    public function getManagedefaultuser()
    {
        return $this->managedefaultuser;
    }

    /**
     * Set managevideophoto
     *
     * @param boolean $managevideophoto
     * @return PreCommonAdmingroup
     */
    public function setManagevideophoto($managevideophoto)
    {
        $this->managevideophoto = $managevideophoto;

        return $this;
    }

    /**
     * Get managevideophoto
     *
     * @return boolean 
     */
    public function getManagevideophoto()
    {
        return $this->managevideophoto;
    }

    /**
     * Set managemagic
     *
     * @param boolean $managemagic
     * @return PreCommonAdmingroup
     */
    public function setManagemagic($managemagic)
    {
        $this->managemagic = $managemagic;

        return $this;
    }

    /**
     * Get managemagic
     *
     * @return boolean 
     */
    public function getManagemagic()
    {
        return $this->managemagic;
    }

    /**
     * Set manageclick
     *
     * @param boolean $manageclick
     * @return PreCommonAdmingroup
     */
    public function setManageclick($manageclick)
    {
        $this->manageclick = $manageclick;

        return $this;
    }

    /**
     * Get manageclick
     *
     * @return boolean 
     */
    public function getManageclick()
    {
        return $this->manageclick;
    }

    /**
     * Set allowmanagecollection
     *
     * @param boolean $allowmanagecollection
     * @return PreCommonAdmingroup
     */
    public function setAllowmanagecollection($allowmanagecollection)
    {
        $this->allowmanagecollection = $allowmanagecollection;

        return $this;
    }

    /**
     * Get allowmanagecollection
     *
     * @return boolean 
     */
    public function getAllowmanagecollection()
    {
        return $this->allowmanagecollection;
    }

    /**
     * Set allowmakehtml
     *
     * @param boolean $allowmakehtml
     * @return PreCommonAdmingroup
     */
    public function setAllowmakehtml($allowmakehtml)
    {
        $this->allowmakehtml = $allowmakehtml;

        return $this;
    }

    /**
     * Get allowmakehtml
     *
     * @return boolean 
     */
    public function getAllowmakehtml()
    {
        return $this->allowmakehtml;
    }
}
