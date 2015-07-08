<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumCollectioninvite
 *
 * @ORM\Table(name="pre_forum_collectioninvite", indexes={@ORM\Index(name="dateline", columns={"dateline"})})
 * @ORM\Entity
 */
class PreForumCollectioninvite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ctid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ctid = '0';

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
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Set ctid
     *
     * @param integer $ctid
     * @return PreForumCollectioninvite
     */
    public function setCtid($ctid)
    {
        $this->ctid = $ctid;

        return $this;
    }

    /**
     * Get ctid
     *
     * @return integer 
     */
    public function getCtid()
    {
        return $this->ctid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreForumCollectioninvite
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
     * @return PreForumCollectioninvite
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
