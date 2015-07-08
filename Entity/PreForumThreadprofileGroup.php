<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumThreadprofileGroup
 *
 * @ORM\Table(name="pre_forum_threadprofile_group")
 * @ORM\Entity
 */
class PreForumThreadprofileGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $gid;

    /**
     * @var integer
     *
     * @ORM\Column(name="tpid", type="integer", nullable=false)
     */
    private $tpid;



    /**
     * Get gid
     *
     * @return integer 
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Set tpid
     *
     * @param integer $tpid
     * @return PreForumThreadprofileGroup
     */
    public function setTpid($tpid)
    {
        $this->tpid = $tpid;

        return $this;
    }

    /**
     * Get tpid
     *
     * @return integer 
     */
    public function getTpid()
    {
        return $this->tpid;
    }
}
