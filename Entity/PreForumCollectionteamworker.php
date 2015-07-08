<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumCollectionteamworker
 *
 * @ORM\Table(name="pre_forum_collectionteamworker")
 * @ORM\Entity
 */
class PreForumCollectionteamworker
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=15, nullable=false)
     */
    private $username = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastvisit", type="integer", nullable=false)
     */
    private $lastvisit = '0';



    /**
     * Set ctid
     *
     * @param integer $ctid
     * @return PreForumCollectionteamworker
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
     * @return PreForumCollectionteamworker
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
     * Set name
     *
     * @param string $name
     * @return PreForumCollectionteamworker
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return PreForumCollectionteamworker
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
     * Set lastvisit
     *
     * @param integer $lastvisit
     * @return PreForumCollectionteamworker
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
