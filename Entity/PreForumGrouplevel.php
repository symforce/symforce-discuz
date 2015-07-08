<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumGrouplevel
 *
 * @ORM\Table(name="pre_forum_grouplevel", indexes={@ORM\Index(name="creditsrange", columns={"creditshigher", "creditslower"})})
 * @ORM\Entity
 */
class PreForumGrouplevel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="levelid", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $levelid;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     */
    private $type = 'default';

    /**
     * @var string
     *
     * @ORM\Column(name="leveltitle", type="string", length=255, nullable=false)
     */
    private $leveltitle = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="creditshigher", type="integer", nullable=false)
     */
    private $creditshigher = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="creditslower", type="integer", nullable=false)
     */
    private $creditslower = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string", length=255, nullable=false)
     */
    private $icon = '';

    /**
     * @var string
     *
     * @ORM\Column(name="creditspolicy", type="text", nullable=false)
     */
    private $creditspolicy;

    /**
     * @var string
     *
     * @ORM\Column(name="postpolicy", type="text", nullable=false)
     */
    private $postpolicy;

    /**
     * @var string
     *
     * @ORM\Column(name="specialswitch", type="text", nullable=false)
     */
    private $specialswitch;



    /**
     * Get levelid
     *
     * @return integer 
     */
    public function getLevelid()
    {
        return $this->levelid;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return PreForumGrouplevel
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
     * Set leveltitle
     *
     * @param string $leveltitle
     * @return PreForumGrouplevel
     */
    public function setLeveltitle($leveltitle)
    {
        $this->leveltitle = $leveltitle;

        return $this;
    }

    /**
     * Get leveltitle
     *
     * @return string 
     */
    public function getLeveltitle()
    {
        return $this->leveltitle;
    }

    /**
     * Set creditshigher
     *
     * @param integer $creditshigher
     * @return PreForumGrouplevel
     */
    public function setCreditshigher($creditshigher)
    {
        $this->creditshigher = $creditshigher;

        return $this;
    }

    /**
     * Get creditshigher
     *
     * @return integer 
     */
    public function getCreditshigher()
    {
        return $this->creditshigher;
    }

    /**
     * Set creditslower
     *
     * @param integer $creditslower
     * @return PreForumGrouplevel
     */
    public function setCreditslower($creditslower)
    {
        $this->creditslower = $creditslower;

        return $this;
    }

    /**
     * Get creditslower
     *
     * @return integer 
     */
    public function getCreditslower()
    {
        return $this->creditslower;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return PreForumGrouplevel
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
     * Set creditspolicy
     *
     * @param string $creditspolicy
     * @return PreForumGrouplevel
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
     * Set postpolicy
     *
     * @param string $postpolicy
     * @return PreForumGrouplevel
     */
    public function setPostpolicy($postpolicy)
    {
        $this->postpolicy = $postpolicy;

        return $this;
    }

    /**
     * Get postpolicy
     *
     * @return string 
     */
    public function getPostpolicy()
    {
        return $this->postpolicy;
    }

    /**
     * Set specialswitch
     *
     * @param string $specialswitch
     * @return PreForumGrouplevel
     */
    public function setSpecialswitch($specialswitch)
    {
        $this->specialswitch = $specialswitch;

        return $this;
    }

    /**
     * Get specialswitch
     *
     * @return string 
     */
    public function getSpecialswitch()
    {
        return $this->specialswitch;
    }
}
