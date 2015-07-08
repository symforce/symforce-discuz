<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumReplycredit
 *
 * @ORM\Table(name="pre_forum_replycredit")
 * @ORM\Entity
 */
class PreForumReplycredit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tid;

    /**
     * @var integer
     *
     * @ORM\Column(name="extcredits", type="integer", nullable=false)
     */
    private $extcredits = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="extcreditstype", type="boolean", nullable=false)
     */
    private $extcreditstype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="times", type="smallint", nullable=false)
     */
    private $times = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="membertimes", type="smallint", nullable=false)
     */
    private $membertimes = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="random", type="boolean", nullable=false)
     */
    private $random = '0';



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
     * Set extcredits
     *
     * @param integer $extcredits
     * @return PreForumReplycredit
     */
    public function setExtcredits($extcredits)
    {
        $this->extcredits = $extcredits;

        return $this;
    }

    /**
     * Get extcredits
     *
     * @return integer 
     */
    public function getExtcredits()
    {
        return $this->extcredits;
    }

    /**
     * Set extcreditstype
     *
     * @param boolean $extcreditstype
     * @return PreForumReplycredit
     */
    public function setExtcreditstype($extcreditstype)
    {
        $this->extcreditstype = $extcreditstype;

        return $this;
    }

    /**
     * Get extcreditstype
     *
     * @return boolean 
     */
    public function getExtcreditstype()
    {
        return $this->extcreditstype;
    }

    /**
     * Set times
     *
     * @param integer $times
     * @return PreForumReplycredit
     */
    public function setTimes($times)
    {
        $this->times = $times;

        return $this;
    }

    /**
     * Get times
     *
     * @return integer 
     */
    public function getTimes()
    {
        return $this->times;
    }

    /**
     * Set membertimes
     *
     * @param integer $membertimes
     * @return PreForumReplycredit
     */
    public function setMembertimes($membertimes)
    {
        $this->membertimes = $membertimes;

        return $this;
    }

    /**
     * Get membertimes
     *
     * @return integer 
     */
    public function getMembertimes()
    {
        return $this->membertimes;
    }

    /**
     * Set random
     *
     * @param boolean $random
     * @return PreForumReplycredit
     */
    public function setRandom($random)
    {
        $this->random = $random;

        return $this;
    }

    /**
     * Get random
     *
     * @return boolean 
     */
    public function getRandom()
    {
        return $this->random;
    }
}
