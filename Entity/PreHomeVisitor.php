<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeVisitor
 *
 * @ORM\Table(name="pre_home_visitor", indexes={@ORM\Index(name="vuid", columns={"vuid"}), @ORM\Index(name="dateline", columns={"dateline"})})
 * @ORM\Entity
 */
class PreHomeVisitor
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
     * @ORM\Column(name="vuid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $vuid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="vusername", type="string", length=15, nullable=false)
     */
    private $vusername = '';

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
     * @return PreHomeVisitor
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
     * Set vuid
     *
     * @param integer $vuid
     * @return PreHomeVisitor
     */
    public function setVuid($vuid)
    {
        $this->vuid = $vuid;

        return $this;
    }

    /**
     * Get vuid
     *
     * @return integer 
     */
    public function getVuid()
    {
        return $this->vuid;
    }

    /**
     * Set vusername
     *
     * @param string $vusername
     * @return PreHomeVisitor
     */
    public function setVusername($vusername)
    {
        $this->vusername = $vusername;

        return $this;
    }

    /**
     * Get vusername
     *
     * @return string 
     */
    public function getVusername()
    {
        return $this->vusername;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreHomeVisitor
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
