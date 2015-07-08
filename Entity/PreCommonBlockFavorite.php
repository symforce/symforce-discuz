<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonBlockFavorite
 *
 * @ORM\Table(name="pre_common_block_favorite", indexes={@ORM\Index(name="uid", columns={"uid", "dateline"})})
 * @ORM\Entity
 */
class PreCommonBlockFavorite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="favid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $favid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=false)
     */
    private $bid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Get favid
     *
     * @return integer 
     */
    public function getFavid()
    {
        return $this->favid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonBlockFavorite
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
     * Set bid
     *
     * @param integer $bid
     * @return PreCommonBlockFavorite
     */
    public function setBid($bid)
    {
        $this->bid = $bid;

        return $this;
    }

    /**
     * Get bid
     *
     * @return integer 
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonBlockFavorite
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
