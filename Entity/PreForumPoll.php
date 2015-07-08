<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumPoll
 *
 * @ORM\Table(name="pre_forum_poll")
 * @ORM\Entity
 */
class PreForumPoll
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="overt", type="boolean", nullable=false)
     */
    private $overt = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="multiple", type="boolean", nullable=false)
     */
    private $multiple = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false)
     */
    private $visible = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="maxchoices", type="boolean", nullable=false)
     */
    private $maxchoices = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="isimage", type="boolean", nullable=false)
     */
    private $isimage = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="expiration", type="integer", nullable=false)
     */
    private $expiration = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pollpreview", type="string", length=255, nullable=false)
     */
    private $pollpreview = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="voters", type="integer", nullable=false)
     */
    private $voters = '0';



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
     * Set overt
     *
     * @param boolean $overt
     * @return PreForumPoll
     */
    public function setOvert($overt)
    {
        $this->overt = $overt;

        return $this;
    }

    /**
     * Get overt
     *
     * @return boolean 
     */
    public function getOvert()
    {
        return $this->overt;
    }

    /**
     * Set multiple
     *
     * @param boolean $multiple
     * @return PreForumPoll
     */
    public function setMultiple($multiple)
    {
        $this->multiple = $multiple;

        return $this;
    }

    /**
     * Get multiple
     *
     * @return boolean 
     */
    public function getMultiple()
    {
        return $this->multiple;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return PreForumPoll
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set maxchoices
     *
     * @param boolean $maxchoices
     * @return PreForumPoll
     */
    public function setMaxchoices($maxchoices)
    {
        $this->maxchoices = $maxchoices;

        return $this;
    }

    /**
     * Get maxchoices
     *
     * @return boolean 
     */
    public function getMaxchoices()
    {
        return $this->maxchoices;
    }

    /**
     * Set isimage
     *
     * @param boolean $isimage
     * @return PreForumPoll
     */
    public function setIsimage($isimage)
    {
        $this->isimage = $isimage;

        return $this;
    }

    /**
     * Get isimage
     *
     * @return boolean 
     */
    public function getIsimage()
    {
        return $this->isimage;
    }

    /**
     * Set expiration
     *
     * @param integer $expiration
     * @return PreForumPoll
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * Get expiration
     *
     * @return integer 
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set pollpreview
     *
     * @param string $pollpreview
     * @return PreForumPoll
     */
    public function setPollpreview($pollpreview)
    {
        $this->pollpreview = $pollpreview;

        return $this;
    }

    /**
     * Get pollpreview
     *
     * @return string 
     */
    public function getPollpreview()
    {
        return $this->pollpreview;
    }

    /**
     * Set voters
     *
     * @param integer $voters
     * @return PreForumPoll
     */
    public function setVoters($voters)
    {
        $this->voters = $voters;

        return $this;
    }

    /**
     * Get voters
     *
     * @return integer 
     */
    public function getVoters()
    {
        return $this->voters;
    }
}
