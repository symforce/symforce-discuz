<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeFeedApp
 *
 * @ORM\Table(name="pre_home_feed_app", indexes={@ORM\Index(name="uid", columns={"uid", "dateline"}), @ORM\Index(name="dateline", columns={"dateline"})})
 * @ORM\Entity
 */
class PreHomeFeedApp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="feedid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $feedid;

    /**
     * @var integer
     *
     * @ORM\Column(name="appid", type="smallint", nullable=false)
     */
    private $appid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=30, nullable=false)
     */
    private $icon = '';

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
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="friend", type="boolean", nullable=false)
     */
    private $friend = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="hash_template", type="string", length=32, nullable=false)
     */
    private $hashTemplate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="hash_data", type="string", length=32, nullable=false)
     */
    private $hashData = '';

    /**
     * @var string
     *
     * @ORM\Column(name="title_template", type="text", nullable=false)
     */
    private $titleTemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="title_data", type="text", nullable=false)
     */
    private $titleData;

    /**
     * @var string
     *
     * @ORM\Column(name="body_template", type="text", nullable=false)
     */
    private $bodyTemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="body_data", type="text", nullable=false)
     */
    private $bodyData;

    /**
     * @var string
     *
     * @ORM\Column(name="body_general", type="text", nullable=false)
     */
    private $bodyGeneral;

    /**
     * @var string
     *
     * @ORM\Column(name="image_1", type="string", length=255, nullable=false)
     */
    private $image1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="image_1_link", type="string", length=255, nullable=false)
     */
    private $image1Link = '';

    /**
     * @var string
     *
     * @ORM\Column(name="image_2", type="string", length=255, nullable=false)
     */
    private $image2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="image_2_link", type="string", length=255, nullable=false)
     */
    private $image2Link = '';

    /**
     * @var string
     *
     * @ORM\Column(name="image_3", type="string", length=255, nullable=false)
     */
    private $image3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="image_3_link", type="string", length=255, nullable=false)
     */
    private $image3Link = '';

    /**
     * @var string
     *
     * @ORM\Column(name="image_4", type="string", length=255, nullable=false)
     */
    private $image4 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="image_4_link", type="string", length=255, nullable=false)
     */
    private $image4Link = '';

    /**
     * @var string
     *
     * @ORM\Column(name="target_ids", type="text", nullable=false)
     */
    private $targetIds;



    /**
     * Get feedid
     *
     * @return integer 
     */
    public function getFeedid()
    {
        return $this->feedid;
    }

    /**
     * Set appid
     *
     * @param integer $appid
     * @return PreHomeFeedApp
     */
    public function setAppid($appid)
    {
        $this->appid = $appid;

        return $this;
    }

    /**
     * Get appid
     *
     * @return integer 
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return PreHomeFeedApp
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
     * Set uid
     *
     * @param integer $uid
     * @return PreHomeFeedApp
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
     * @return PreHomeFeedApp
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
     * Set dateline
     *
     * @param integer $dateline
     * @return PreHomeFeedApp
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
     * Set friend
     *
     * @param boolean $friend
     * @return PreHomeFeedApp
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
     * Set hashTemplate
     *
     * @param string $hashTemplate
     * @return PreHomeFeedApp
     */
    public function setHashTemplate($hashTemplate)
    {
        $this->hashTemplate = $hashTemplate;

        return $this;
    }

    /**
     * Get hashTemplate
     *
     * @return string 
     */
    public function getHashTemplate()
    {
        return $this->hashTemplate;
    }

    /**
     * Set hashData
     *
     * @param string $hashData
     * @return PreHomeFeedApp
     */
    public function setHashData($hashData)
    {
        $this->hashData = $hashData;

        return $this;
    }

    /**
     * Get hashData
     *
     * @return string 
     */
    public function getHashData()
    {
        return $this->hashData;
    }

    /**
     * Set titleTemplate
     *
     * @param string $titleTemplate
     * @return PreHomeFeedApp
     */
    public function setTitleTemplate($titleTemplate)
    {
        $this->titleTemplate = $titleTemplate;

        return $this;
    }

    /**
     * Get titleTemplate
     *
     * @return string 
     */
    public function getTitleTemplate()
    {
        return $this->titleTemplate;
    }

    /**
     * Set titleData
     *
     * @param string $titleData
     * @return PreHomeFeedApp
     */
    public function setTitleData($titleData)
    {
        $this->titleData = $titleData;

        return $this;
    }

    /**
     * Get titleData
     *
     * @return string 
     */
    public function getTitleData()
    {
        return $this->titleData;
    }

    /**
     * Set bodyTemplate
     *
     * @param string $bodyTemplate
     * @return PreHomeFeedApp
     */
    public function setBodyTemplate($bodyTemplate)
    {
        $this->bodyTemplate = $bodyTemplate;

        return $this;
    }

    /**
     * Get bodyTemplate
     *
     * @return string 
     */
    public function getBodyTemplate()
    {
        return $this->bodyTemplate;
    }

    /**
     * Set bodyData
     *
     * @param string $bodyData
     * @return PreHomeFeedApp
     */
    public function setBodyData($bodyData)
    {
        $this->bodyData = $bodyData;

        return $this;
    }

    /**
     * Get bodyData
     *
     * @return string 
     */
    public function getBodyData()
    {
        return $this->bodyData;
    }

    /**
     * Set bodyGeneral
     *
     * @param string $bodyGeneral
     * @return PreHomeFeedApp
     */
    public function setBodyGeneral($bodyGeneral)
    {
        $this->bodyGeneral = $bodyGeneral;

        return $this;
    }

    /**
     * Get bodyGeneral
     *
     * @return string 
     */
    public function getBodyGeneral()
    {
        return $this->bodyGeneral;
    }

    /**
     * Set image1
     *
     * @param string $image1
     * @return PreHomeFeedApp
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;

        return $this;
    }

    /**
     * Get image1
     *
     * @return string 
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * Set image1Link
     *
     * @param string $image1Link
     * @return PreHomeFeedApp
     */
    public function setImage1Link($image1Link)
    {
        $this->image1Link = $image1Link;

        return $this;
    }

    /**
     * Get image1Link
     *
     * @return string 
     */
    public function getImage1Link()
    {
        return $this->image1Link;
    }

    /**
     * Set image2
     *
     * @param string $image2
     * @return PreHomeFeedApp
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;

        return $this;
    }

    /**
     * Get image2
     *
     * @return string 
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * Set image2Link
     *
     * @param string $image2Link
     * @return PreHomeFeedApp
     */
    public function setImage2Link($image2Link)
    {
        $this->image2Link = $image2Link;

        return $this;
    }

    /**
     * Get image2Link
     *
     * @return string 
     */
    public function getImage2Link()
    {
        return $this->image2Link;
    }

    /**
     * Set image3
     *
     * @param string $image3
     * @return PreHomeFeedApp
     */
    public function setImage3($image3)
    {
        $this->image3 = $image3;

        return $this;
    }

    /**
     * Get image3
     *
     * @return string 
     */
    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * Set image3Link
     *
     * @param string $image3Link
     * @return PreHomeFeedApp
     */
    public function setImage3Link($image3Link)
    {
        $this->image3Link = $image3Link;

        return $this;
    }

    /**
     * Get image3Link
     *
     * @return string 
     */
    public function getImage3Link()
    {
        return $this->image3Link;
    }

    /**
     * Set image4
     *
     * @param string $image4
     * @return PreHomeFeedApp
     */
    public function setImage4($image4)
    {
        $this->image4 = $image4;

        return $this;
    }

    /**
     * Get image4
     *
     * @return string 
     */
    public function getImage4()
    {
        return $this->image4;
    }

    /**
     * Set image4Link
     *
     * @param string $image4Link
     * @return PreHomeFeedApp
     */
    public function setImage4Link($image4Link)
    {
        $this->image4Link = $image4Link;

        return $this;
    }

    /**
     * Get image4Link
     *
     * @return string 
     */
    public function getImage4Link()
    {
        return $this->image4Link;
    }

    /**
     * Set targetIds
     *
     * @param string $targetIds
     * @return PreHomeFeedApp
     */
    public function setTargetIds($targetIds)
    {
        $this->targetIds = $targetIds;

        return $this;
    }

    /**
     * Get targetIds
     *
     * @return string 
     */
    public function getTargetIds()
    {
        return $this->targetIds;
    }
}
