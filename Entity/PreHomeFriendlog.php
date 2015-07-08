<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeFriendlog
 *
 * @ORM\Table(name="pre_home_friendlog")
 * @ORM\Entity
 */
class PreHomeFriendlog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="fuid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fuid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=10, nullable=false)
     */
    private $action = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreHomeFriendlog
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
     * Set fuid
     *
     * @param integer $fuid
     * @return PreHomeFriendlog
     */
    public function setFuid($fuid)
    {
        $this->fuid = $fuid;

        return $this;
    }

    /**
     * Get fuid
     *
     * @return integer 
     */
    public function getFuid()
    {
        return $this->fuid;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return PreHomeFriendlog
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreHomeFriendlog
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
}
