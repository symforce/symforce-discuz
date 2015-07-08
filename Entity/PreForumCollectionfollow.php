<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumCollectionfollow
 *
 * @ORM\Table(name="pre_forum_collectionfollow", indexes={@ORM\Index(name="ctid", columns={"ctid", "dateline"})})
 * @ORM\Entity
 */
class PreForumCollectionfollow
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
     * @ORM\Column(name="ctid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ctid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=15, nullable=false)
     */
    private $username = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastvisit", type="integer", nullable=false)
     */
    private $lastvisit = '0';



    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreForumCollectionfollow
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
     * Set ctid
     *
     * @param integer $ctid
     * @return PreForumCollectionfollow
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
     * Set username
     *
     * @param string $username
     * @return PreForumCollectionfollow
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
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumCollectionfollow
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
     * Set lastvisit
     *
     * @param integer $lastvisit
     * @return PreForumCollectionfollow
     */
    public function setLastvisit($lastvisit)
    {
        $this->lastvisit = $lastvisit;

        return $this;
    }

    /**
     * Get lastvisit
     *
     * @return integer 
     */
    public function getLastvisit()
    {
        return $this->lastvisit;
    }
}
