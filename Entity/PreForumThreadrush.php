<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumThreadrush
 *
 * @ORM\Table(name="pre_forum_threadrush")
 * @ORM\Entity
 */
class PreForumThreadrush
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
     * @ORM\Column(name="stopfloor", type="integer", nullable=false)
     */
    private $stopfloor = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="starttimefrom", type="integer", nullable=false)
     */
    private $starttimefrom = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="starttimeto", type="integer", nullable=false)
     */
    private $starttimeto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="rewardfloor", type="text", nullable=false)
     */
    private $rewardfloor;

    /**
     * @var integer
     *
     * @ORM\Column(name="creditlimit", type="integer", nullable=false)
     */
    private $creditlimit = '-996';

    /**
     * @var integer
     *
     * @ORM\Column(name="replylimit", type="smallint", nullable=false)
     */
    private $replylimit = '0';



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
     * Set stopfloor
     *
     * @param integer $stopfloor
     * @return PreForumThreadrush
     */
    public function setStopfloor($stopfloor)
    {
        $this->stopfloor = $stopfloor;

        return $this;
    }

    /**
     * Get stopfloor
     *
     * @return integer 
     */
    public function getStopfloor()
    {
        return $this->stopfloor;
    }

    /**
     * Set starttimefrom
     *
     * @param integer $starttimefrom
     * @return PreForumThreadrush
     */
    public function setStarttimefrom($starttimefrom)
    {
        $this->starttimefrom = $starttimefrom;

        return $this;
    }

    /**
     * Get starttimefrom
     *
     * @return integer 
     */
    public function getStarttimefrom()
    {
        return $this->starttimefrom;
    }

    /**
     * Set starttimeto
     *
     * @param integer $starttimeto
     * @return PreForumThreadrush
     */
    public function setStarttimeto($starttimeto)
    {
        $this->starttimeto = $starttimeto;

        return $this;
    }

    /**
     * Get starttimeto
     *
     * @return integer 
     */
    public function getStarttimeto()
    {
        return $this->starttimeto;
    }

    /**
     * Set rewardfloor
     *
     * @param string $rewardfloor
     * @return PreForumThreadrush
     */
    public function setRewardfloor($rewardfloor)
    {
        $this->rewardfloor = $rewardfloor;

        return $this;
    }

    /**
     * Get rewardfloor
     *
     * @return string 
     */
    public function getRewardfloor()
    {
        return $this->rewardfloor;
    }

    /**
     * Set creditlimit
     *
     * @param integer $creditlimit
     * @return PreForumThreadrush
     */
    public function setCreditlimit($creditlimit)
    {
        $this->creditlimit = $creditlimit;

        return $this;
    }

    /**
     * Get creditlimit
     *
     * @return integer 
     */
    public function getCreditlimit()
    {
        return $this->creditlimit;
    }

    /**
     * Set replylimit
     *
     * @param integer $replylimit
     * @return PreForumThreadrush
     */
    public function setReplylimit($replylimit)
    {
        $this->replylimit = $replylimit;

        return $this;
    }

    /**
     * Get replylimit
     *
     * @return integer 
     */
    public function getReplylimit()
    {
        return $this->replylimit;
    }
}
