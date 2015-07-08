<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeBlogfield
 *
 * @ORM\Table(name="pre_home_blogfield", indexes={@ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class PreHomeBlogfield
{
    /**
     * @var integer
     *
     * @ORM\Column(name="blogid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $blogid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pic", type="string", length=255, nullable=false)
     */
    private $pic = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=255, nullable=false)
     */
    private $tag = '';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="postip", type="string", length=255, nullable=false)
     */
    private $postip = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="port", type="smallint", nullable=false)
     */
    private $port = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="related", type="text", nullable=false)
     */
    private $related;

    /**
     * @var integer
     *
     * @ORM\Column(name="relatedtime", type="integer", nullable=false)
     */
    private $relatedtime = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="target_ids", type="text", nullable=false)
     */
    private $targetIds;

    /**
     * @var string
     *
     * @ORM\Column(name="hotuser", type="text", nullable=false)
     */
    private $hotuser;

    /**
     * @var boolean
     *
     * @ORM\Column(name="magiccolor", type="boolean", nullable=false)
     */
    private $magiccolor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="magicpaper", type="boolean", nullable=false)
     */
    private $magicpaper = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="pushedaid", type="integer", nullable=false)
     */
    private $pushedaid = '0';



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
     * @return PreHomeBlogfield
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
     * Set pic
     *
     * @param string $pic
     * @return PreHomeBlogfield
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
     * Set tag
     *
     * @param string $tag
     * @return PreHomeBlogfield
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return PreHomeBlogfield
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set postip
     *
     * @param string $postip
     * @return PreHomeBlogfield
     */
    public function setPostip($postip)
    {
        $this->postip = $postip;

        return $this;
    }

    /**
     * Get postip
     *
     * @return string 
     */
    public function getPostip()
    {
        return $this->postip;
    }

    /**
     * Set port
     *
     * @param integer $port
     * @return PreHomeBlogfield
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return integer 
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set related
     *
     * @param string $related
     * @return PreHomeBlogfield
     */
    public function setRelated($related)
    {
        $this->related = $related;

        return $this;
    }

    /**
     * Get related
     *
     * @return string 
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * Set relatedtime
     *
     * @param integer $relatedtime
     * @return PreHomeBlogfield
     */
    public function setRelatedtime($relatedtime)
    {
        $this->relatedtime = $relatedtime;

        return $this;
    }

    /**
     * Get relatedtime
     *
     * @return integer 
     */
    public function getRelatedtime()
    {
        return $this->relatedtime;
    }

    /**
     * Set targetIds
     *
     * @param string $targetIds
     * @return PreHomeBlogfield
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

    /**
     * Set hotuser
     *
     * @param string $hotuser
     * @return PreHomeBlogfield
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
     * Set magiccolor
     *
     * @param boolean $magiccolor
     * @return PreHomeBlogfield
     */
    public function setMagiccolor($magiccolor)
    {
        $this->magiccolor = $magiccolor;

        return $this;
    }

    /**
     * Get magiccolor
     *
     * @return boolean 
     */
    public function getMagiccolor()
    {
        return $this->magiccolor;
    }

    /**
     * Set magicpaper
     *
     * @param boolean $magicpaper
     * @return PreHomeBlogfield
     */
    public function setMagicpaper($magicpaper)
    {
        $this->magicpaper = $magicpaper;

        return $this;
    }

    /**
     * Get magicpaper
     *
     * @return boolean 
     */
    public function getMagicpaper()
    {
        return $this->magicpaper;
    }

    /**
     * Set pushedaid
     *
     * @param integer $pushedaid
     * @return PreHomeBlogfield
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
}
