<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonUinBlack
 *
 * @ORM\Table(name="pre_common_uin_black", uniqueConstraints={@ORM\UniqueConstraint(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class PreCommonUinBlack
{
    /**
     * @var string
     *
     * @ORM\Column(name="uin", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uin;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Get uin
     *
     * @return string 
     */
    public function getUin()
    {
        return $this->uin;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonUinBlack
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
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonUinBlack
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
