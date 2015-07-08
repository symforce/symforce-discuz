<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumThreadaddviews
 *
 * @ORM\Table(name="pre_forum_threadaddviews")
 * @ORM\Entity
 */
class PreForumThreadaddviews
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="addviews", type="integer", nullable=false)
     */
    private $addviews = '0';



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
     * Set addviews
     *
     * @param integer $addviews
     * @return PreForumThreadaddviews
     */
    public function setAddviews($addviews)
    {
        $this->addviews = $addviews;

        return $this;
    }

    /**
     * Get addviews
     *
     * @return integer 
     */
    public function getAddviews()
    {
        return $this->addviews;
    }
}
