<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeShare
 *
 * @ORM\Table(name="pre_home_share", indexes={@ORM\Index(name="uid", columns={"uid", "dateline"}), @ORM\Index(name="hot", columns={"hot"}), @ORM\Index(name="dateline", columns={"dateline"})})
 * @ORM\Entity
 */
class PreHomeShare
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sid;

    /**
     * @var integer
     *
     * @ORM\Column(name="itemid", type="integer", nullable=false)
     */
    private $itemid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=false)
     */
    private $type = '';

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
     * @ORM\Column(name="fromuid", type="integer", nullable=false)
     */
    private $fromuid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="title_template", type="text", nullable=false)
     */
    private $titleTemplate;

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
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image = '';

    /**
     * @var string
     *
     * @ORM\Column(name="image_link", type="string", length=255, nullable=false)
     */
    private $imageLink = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="hot", type="integer", nullable=false)
     */
    private $hot = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="hotuser", type="text", nullable=false)
     */
    private $hotuser;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status;



    /**
     * Get sid
     *
     * @return integer 
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set itemid
     *
     * @param integer $itemid
     * @return PreHomeShare
     */
    public function setItemid($itemid)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid
     *
     * @return integer 
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return PreHomeShare
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
     * Set uid
     *
     * @param integer $uid
     * @return PreHomeShare
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
     * @return PreHomeShare
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
     * Set fromuid
     *
     * @param integer $fromuid
     * @return PreHomeShare
     */
    public function setFromuid($fromuid)
    {
        $this->fromuid = $fromuid;

        return $this;
    }

    /**
     * Get fromuid
     *
     * @return integer 
     */
    public function getFromuid()
    {
        return $this->fromuid;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreHomeShare
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
     * Set titleTemplate
     *
     * @param string $titleTemplate
     * @return PreHomeShare
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
     * Set bodyTemplate
     *
     * @param string $bodyTemplate
     * @return PreHomeShare
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
     * @return PreHomeShare
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
     * @return PreHomeShare
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
     * Set image
     *
     * @param string $image
     * @return PreHomeShare
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set imageLink
     *
     * @param string $imageLink
     * @return PreHomeShare
     */
    public function setImageLink($imageLink)
    {
        $this->imageLink = $imageLink;

        return $this;
    }

    /**
     * Get imageLink
     *
     * @return string 
     */
    public function getImageLink()
    {
        return $this->imageLink;
    }

    /**
     * Set hot
     *
     * @param integer $hot
     * @return PreHomeShare
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
     * Set hotuser
     *
     * @param string $hotuser
     * @return PreHomeShare
     */
    public function setHotuser($hotuser)
    {
        $this->hotuser = $hotuser;

        return $this;
    }

    /**
     * Get hotuser
     *
     * @return string 
     */
    public function getHotuser()
    {
        return $this->hotuser;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return PreHomeShare
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
}
