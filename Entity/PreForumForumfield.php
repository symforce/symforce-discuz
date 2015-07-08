<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumForumfield
 *
 * @ORM\Table(name="pre_forum_forumfield", indexes={@ORM\Index(name="membernum", columns={"membernum"}), @ORM\Index(name="dateline", columns={"dateline"}), @ORM\Index(name="lastupdate", columns={"lastupdate"}), @ORM\Index(name="activity", columns={"activity"})})
 * @ORM\Entity
 */
class PreForumForumfield
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=12, nullable=false)
     */
    private $password = '';

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255, nullable=false)
     */
    private $icon = '';

    /**
     * @var string
     *
     * @ORM\Column(name="redirect", type="string", length=255, nullable=false)
     */
    private $redirect = '';

    /**
     * @var string
     *
     * @ORM\Column(name="attachextensions", type="string", length=255, nullable=false)
     */
    private $attachextensions = '';

    /**
     * @var string
     *
     * @ORM\Column(name="creditspolicy", type="text", nullable=false)
     */
    private $creditspolicy;

    /**
     * @var string
     *
     * @ORM\Column(name="formulaperm", type="text", nullable=false)
     */
    private $formulaperm;

    /**
     * @var string
     *
     * @ORM\Column(name="moderators", type="text", nullable=false)
     */
    private $moderators;

    /**
     * @var string
     *
     * @ORM\Column(name="rules", type="text", nullable=false)
     */
    private $rules;

    /**
     * @var string
     *
     * @ORM\Column(name="threadtypes", type="text", nullable=false)
     */
    private $threadtypes;

    /**
     * @var string
     *
     * @ORM\Column(name="threadsorts", type="text", nullable=false)
     */
    private $threadsorts;

    /**
     * @var string
     *
     * @ORM\Column(name="viewperm", type="text", nullable=false)
     */
    private $viewperm;

    /**
     * @var string
     *
     * @ORM\Column(name="postperm", type="text", nullable=false)
     */
    private $postperm;

    /**
     * @var string
     *
     * @ORM\Column(name="replyperm", type="text", nullable=false)
     */
    private $replyperm;

    /**
     * @var string
     *
     * @ORM\Column(name="getattachperm", type="text", nullable=false)
     */
    private $getattachperm;

    /**
     * @var string
     *
     * @ORM\Column(name="postattachperm", type="text", nullable=false)
     */
    private $postattachperm;

    /**
     * @var string
     *
     * @ORM\Column(name="postimageperm", type="text", nullable=false)
     */
    private $postimageperm;

    /**
     * @var string
     *
     * @ORM\Column(name="spviewperm", type="text", nullable=false)
     */
    private $spviewperm;

    /**
     * @var string
     *
     * @ORM\Column(name="seotitle", type="text", nullable=false)
     */
    private $seotitle;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="text", nullable=false)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="seodescription", type="text", nullable=false)
     */
    private $seodescription;

    /**
     * @var string
     *
     * @ORM\Column(name="supe_pushsetting", type="text", nullable=false)
     */
    private $supePushsetting;

    /**
     * @var string
     *
     * @ORM\Column(name="modrecommend", type="text", nullable=false)
     */
    private $modrecommend;

    /**
     * @var string
     *
     * @ORM\Column(name="threadplugin", type="text", nullable=false)
     */
    private $threadplugin;

    /**
     * @var string
     *
     * @ORM\Column(name="replybg", type="text", nullable=false)
     */
    private $replybg;

    /**
     * @var string
     *
     * @ORM\Column(name="extra", type="text", nullable=false)
     */
    private $extra;

    /**
     * @var boolean
     *
     * @ORM\Column(name="jointype", type="boolean", nullable=false)
     */
    private $jointype = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="gviewperm", type="boolean", nullable=false)
     */
    private $gviewperm = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="membernum", type="smallint", nullable=false)
     */
    private $membernum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastupdate", type="integer", nullable=false)
     */
    private $lastupdate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="activity", type="integer", nullable=false)
     */
    private $activity = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="founderuid", type="integer", nullable=false)
     */
    private $founderuid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="foundername", type="string", length=255, nullable=false)
     */
    private $foundername = '';

    /**
     * @var string
     *
     * @ORM\Column(name="banner", type="string", length=255, nullable=false)
     */
    private $banner = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="groupnum", type="smallint", nullable=false)
     */
    private $groupnum = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="commentitem", type="text", nullable=false)
     */
    private $commentitem;

    /**
     * @var string
     *
     * @ORM\Column(name="relatedgroup", type="text", nullable=false)
     */
    private $relatedgroup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="picstyle", type="boolean", nullable=false)
     */
    private $picstyle = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="widthauto", type="boolean", nullable=false)
     */
    private $widthauto = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="noantitheft", type="boolean", nullable=false)
     */
    private $noantitheft = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="noforumhidewater", type="boolean", nullable=false)
     */
    private $noforumhidewater = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="noforumrecommend", type="boolean", nullable=false)
     */
    private $noforumrecommend = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="livetid", type="integer", nullable=false)
     */
    private $livetid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price = '0';



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
     * Set description
     *
     * @param string $description
     * @return PreForumForumfield
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
     * Set password
     *
     * @param string $password
     * @return PreForumForumfield
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
     * Set icon
     *
     * @param string $icon
     * @return PreForumForumfield
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set redirect
     *
     * @param string $redirect
     * @return PreForumForumfield
     */
    public function setRedirect($redirect)
    {
        $this->redirect = $redirect;

        return $this;
    }

    /**
     * Get redirect
     *
     * @return string 
     */
    public function getRedirect()
    {
        return $this->redirect;
    }

    /**
     * Set attachextensions
     *
     * @param string $attachextensions
     * @return PreForumForumfield
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
     * Set creditspolicy
     *
     * @param string $creditspolicy
     * @return PreForumForumfield
     */
    public function setCreditspolicy($creditspolicy)
    {
        $this->creditspolicy = $creditspolicy;

        return $this;
    }

    /**
     * Get creditspolicy
     *
     * @return string 
     */
    public function getCreditspolicy()
    {
        return $this->creditspolicy;
    }

    /**
     * Set formulaperm
     *
     * @param string $formulaperm
     * @return PreForumForumfield
     */
    public function setFormulaperm($formulaperm)
    {
        $this->formulaperm = $formulaperm;

        return $this;
    }

    /**
     * Get formulaperm
     *
     * @return string 
     */
    public function getFormulaperm()
    {
        return $this->formulaperm;
    }

    /**
     * Set moderators
     *
     * @param string $moderators
     * @return PreForumForumfield
     */
    public function setModerators($moderators)
    {
        $this->moderators = $moderators;

        return $this;
    }

    /**
     * Get moderators
     *
     * @return string 
     */
    public function getModerators()
    {
        return $this->moderators;
    }

    /**
     * Set rules
     *
     * @param string $rules
     * @return PreForumForumfield
     */
    public function setRules($rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * Get rules
     *
     * @return string 
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Set threadtypes
     *
     * @param string $threadtypes
     * @return PreForumForumfield
     */
    public function setThreadtypes($threadtypes)
    {
        $this->threadtypes = $threadtypes;

        return $this;
    }

    /**
     * Get threadtypes
     *
     * @return string 
     */
    public function getThreadtypes()
    {
        return $this->threadtypes;
    }

    /**
     * Set threadsorts
     *
     * @param string $threadsorts
     * @return PreForumForumfield
     */
    public function setThreadsorts($threadsorts)
    {
        $this->threadsorts = $threadsorts;

        return $this;
    }

    /**
     * Get threadsorts
     *
     * @return string 
     */
    public function getThreadsorts()
    {
        return $this->threadsorts;
    }

    /**
     * Set viewperm
     *
     * @param string $viewperm
     * @return PreForumForumfield
     */
    public function setViewperm($viewperm)
    {
        $this->viewperm = $viewperm;

        return $this;
    }

    /**
     * Get viewperm
     *
     * @return string 
     */
    public function getViewperm()
    {
        return $this->viewperm;
    }

    /**
     * Set postperm
     *
     * @param string $postperm
     * @return PreForumForumfield
     */
    public function setPostperm($postperm)
    {
        $this->postperm = $postperm;

        return $this;
    }

    /**
     * Get postperm
     *
     * @return string 
     */
    public function getPostperm()
    {
        return $this->postperm;
    }

    /**
     * Set replyperm
     *
     * @param string $replyperm
     * @return PreForumForumfield
     */
    public function setReplyperm($replyperm)
    {
        $this->replyperm = $replyperm;

        return $this;
    }

    /**
     * Get replyperm
     *
     * @return string 
     */
    public function getReplyperm()
    {
        return $this->replyperm;
    }

    /**
     * Set getattachperm
     *
     * @param string $getattachperm
     * @return PreForumForumfield
     */
    public function setGetattachperm($getattachperm)
    {
        $this->getattachperm = $getattachperm;

        return $this;
    }

    /**
     * Get getattachperm
     *
     * @return string 
     */
    public function getGetattachperm()
    {
        return $this->getattachperm;
    }

    /**
     * Set postattachperm
     *
     * @param string $postattachperm
     * @return PreForumForumfield
     */
    public function setPostattachperm($postattachperm)
    {
        $this->postattachperm = $postattachperm;

        return $this;
    }

    /**
     * Get postattachperm
     *
     * @return string 
     */
    public function getPostattachperm()
    {
        return $this->postattachperm;
    }

    /**
     * Set postimageperm
     *
     * @param string $postimageperm
     * @return PreForumForumfield
     */
    public function setPostimageperm($postimageperm)
    {
        $this->postimageperm = $postimageperm;

        return $this;
    }

    /**
     * Get postimageperm
     *
     * @return string 
     */
    public function getPostimageperm()
    {
        return $this->postimageperm;
    }

    /**
     * Set spviewperm
     *
     * @param string $spviewperm
     * @return PreForumForumfield
     */
    public function setSpviewperm($spviewperm)
    {
        $this->spviewperm = $spviewperm;

        return $this;
    }

    /**
     * Get spviewperm
     *
     * @return string 
     */
    public function getSpviewperm()
    {
        return $this->spviewperm;
    }

    /**
     * Set seotitle
     *
     * @param string $seotitle
     * @return PreForumForumfield
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
     * Set keywords
     *
     * @param string $keywords
     * @return PreForumForumfield
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set seodescription
     *
     * @param string $seodescription
     * @return PreForumForumfield
     */
    public function setSeodescription($seodescription)
    {
        $this->seodescription = $seodescription;

        return $this;
    }

    /**
     * Get seodescription
     *
     * @return string 
     */
    public function getSeodescription()
    {
        return $this->seodescription;
    }

    /**
     * Set supePushsetting
     *
     * @param string $supePushsetting
     * @return PreForumForumfield
     */
    public function setSupePushsetting($supePushsetting)
    {
        $this->supePushsetting = $supePushsetting;

        return $this;
    }

    /**
     * Get supePushsetting
     *
     * @return string 
     */
    public function getSupePushsetting()
    {
        return $this->supePushsetting;
    }

    /**
     * Set modrecommend
     *
     * @param string $modrecommend
     * @return PreForumForumfield
     */
    public function setModrecommend($modrecommend)
    {
        $this->modrecommend = $modrecommend;

        return $this;
    }

    /**
     * Get modrecommend
     *
     * @return string 
     */
    public function getModrecommend()
    {
        return $this->modrecommend;
    }

    /**
     * Set threadplugin
     *
     * @param string $threadplugin
     * @return PreForumForumfield
     */
    public function setThreadplugin($threadplugin)
    {
        $this->threadplugin = $threadplugin;

        return $this;
    }

    /**
     * Get threadplugin
     *
     * @return string 
     */
    public function getThreadplugin()
    {
        return $this->threadplugin;
    }

    /**
     * Set replybg
     *
     * @param string $replybg
     * @return PreForumForumfield
     */
    public function setReplybg($replybg)
    {
        $this->replybg = $replybg;

        return $this;
    }

    /**
     * Get replybg
     *
     * @return string 
     */
    public function getReplybg()
    {
        return $this->replybg;
    }

    /**
     * Set extra
     *
     * @param string $extra
     * @return PreForumForumfield
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Get extra
     *
     * @return string 
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Set jointype
     *
     * @param boolean $jointype
     * @return PreForumForumfield
     */
    public function setJointype($jointype)
    {
        $this->jointype = $jointype;

        return $this;
    }

    /**
     * Get jointype
     *
     * @return boolean 
     */
    public function getJointype()
    {
        return $this->jointype;
    }

    /**
     * Set gviewperm
     *
     * @param boolean $gviewperm
     * @return PreForumForumfield
     */
    public function setGviewperm($gviewperm)
    {
        $this->gviewperm = $gviewperm;

        return $this;
    }

    /**
     * Get gviewperm
     *
     * @return boolean 
     */
    public function getGviewperm()
    {
        return $this->gviewperm;
    }

    /**
     * Set membernum
     *
     * @param integer $membernum
     * @return PreForumForumfield
     */
    public function setMembernum($membernum)
    {
        $this->membernum = $membernum;

        return $this;
    }

    /**
     * Get membernum
     *
     * @return integer 
     */
    public function getMembernum()
    {
        return $this->membernum;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumForumfield
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
     * Set lastupdate
     *
     * @param integer $lastupdate
     * @return PreForumForumfield
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
     * Set activity
     *
     * @param integer $activity
     * @return PreForumForumfield
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
     * Set founderuid
     *
     * @param integer $founderuid
     * @return PreForumForumfield
     */
    public function setFounderuid($founderuid)
    {
        $this->founderuid = $founderuid;

        return $this;
    }

    /**
     * Get founderuid
     *
     * @return integer 
     */
    public function getFounderuid()
    {
        return $this->founderuid;
    }

    /**
     * Set foundername
     *
     * @param string $foundername
     * @return PreForumForumfield
     */
    public function setFoundername($foundername)
    {
        $this->foundername = $foundername;

        return $this;
    }

    /**
     * Get foundername
     *
     * @return string 
     */
    public function getFoundername()
    {
        return $this->foundername;
    }

    /**
     * Set banner
     *
     * @param string $banner
     * @return PreForumForumfield
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get banner
     *
     * @return string 
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set groupnum
     *
     * @param integer $groupnum
     * @return PreForumForumfield
     */
    public function setGroupnum($groupnum)
    {
        $this->groupnum = $groupnum;

        return $this;
    }

    /**
     * Get groupnum
     *
     * @return integer 
     */
    public function getGroupnum()
    {
        return $this->groupnum;
    }

    /**
     * Set commentitem
     *
     * @param string $commentitem
     * @return PreForumForumfield
     */
    public function setCommentitem($commentitem)
    {
        $this->commentitem = $commentitem;

        return $this;
    }

    /**
     * Get commentitem
     *
     * @return string 
     */
    public function getCommentitem()
    {
        return $this->commentitem;
    }

    /**
     * Set relatedgroup
     *
     * @param string $relatedgroup
     * @return PreForumForumfield
     */
    public function setRelatedgroup($relatedgroup)
    {
        $this->relatedgroup = $relatedgroup;

        return $this;
    }

    /**
     * Get relatedgroup
     *
     * @return string 
     */
    public function getRelatedgroup()
    {
        return $this->relatedgroup;
    }

    /**
     * Set picstyle
     *
     * @param boolean $picstyle
     * @return PreForumForumfield
     */
    public function setPicstyle($picstyle)
    {
        $this->picstyle = $picstyle;

        return $this;
    }

    /**
     * Get picstyle
     *
     * @return boolean 
     */
    public function getPicstyle()
    {
        return $this->picstyle;
    }

    /**
     * Set widthauto
     *
     * @param boolean $widthauto
     * @return PreForumForumfield
     */
    public function setWidthauto($widthauto)
    {
        $this->widthauto = $widthauto;

        return $this;
    }

    /**
     * Get widthauto
     *
     * @return boolean 
     */
    public function getWidthauto()
    {
        return $this->widthauto;
    }

    /**
     * Set noantitheft
     *
     * @param boolean $noantitheft
     * @return PreForumForumfield
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
     * Set noforumhidewater
     *
     * @param boolean $noforumhidewater
     * @return PreForumForumfield
     */
    public function setNoforumhidewater($noforumhidewater)
    {
        $this->noforumhidewater = $noforumhidewater;

        return $this;
    }

    /**
     * Get noforumhidewater
     *
     * @return boolean 
     */
    public function getNoforumhidewater()
    {
        return $this->noforumhidewater;
    }

    /**
     * Set noforumrecommend
     *
     * @param boolean $noforumrecommend
     * @return PreForumForumfield
     */
    public function setNoforumrecommend($noforumrecommend)
    {
        $this->noforumrecommend = $noforumrecommend;

        return $this;
    }

    /**
     * Get noforumrecommend
     *
     * @return boolean 
     */
    public function getNoforumrecommend()
    {
        return $this->noforumrecommend;
    }

    /**
     * Set livetid
     *
     * @param integer $livetid
     * @return PreForumForumfield
     */
    public function setLivetid($livetid)
    {
        $this->livetid = $livetid;

        return $this;
    }

    /**
     * Get livetid
     *
     * @return integer 
     */
    public function getLivetid()
    {
        return $this->livetid;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return PreForumForumfield
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
}
