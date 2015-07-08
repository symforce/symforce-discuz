<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumPostLocation
 *
 * @ORM\Table(name="pre_forum_post_location", indexes={@ORM\Index(name="tid", columns={"tid"}), @ORM\Index(name="uid", columns={"uid"})})
 * @ORM\Entity
 */
class PreForumPostLocation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=true)
     */
    private $tid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mapx", type="string", length=255, nullable=false)
     */
    private $mapx;

    /**
     * @var string
     *
     * @ORM\Column(name="mapy", type="string", length=255, nullable=false)
     */
    private $mapy;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=false)
     */
    private $location;



    /**
     * Get pid
     *
     * @return integer 
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set tid
     *
     * @param integer $tid
     * @return PreForumPostLocation
     */
    public function setTid($tid)
    {
        $this->tid = $tid;

        return $this;
    }

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
     * Set uid
     *
     * @param integer $uid
     * @return PreForumPostLocation
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
     * Set mapx
     *
     * @param string $mapx
     * @return PreForumPostLocation
     */
    public function setMapx($mapx)
    {
        $this->mapx = $mapx;

        return $this;
    }

    /**
     * Get mapx
     *
     * @return string 
     */
    public function getMapx()
    {
        return $this->mapx;
    }

    /**
     * Set mapy
     *
     * @param string $mapy
     * @return PreForumPostLocation
     */
    public function setMapy($mapy)
    {
        $this->mapy = $mapy;

        return $this;
    }

    /**
     * Get mapy
     *
     * @return string 
     */
    public function getMapy()
    {
        return $this->mapy;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return PreForumPostLocation
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }
}
