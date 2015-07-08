<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumHotreplyNumber
 *
 * @ORM\Table(name="pre_forum_hotreply_number", indexes={@ORM\Index(name="tid", columns={"tid", "total"})})
 * @ORM\Entity
 */
class PreForumHotreplyNumber
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
     * @ORM\Column(name="tid", type="integer", nullable=false)
     */
    private $tid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="support", type="smallint", nullable=false)
     */
    private $support = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="against", type="smallint", nullable=false)
     */
    private $against = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer", nullable=false)
     */
    private $total = '0';



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
     * @return PreForumHotreplyNumber
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
     * Set support
     *
     * @param integer $support
     * @return PreForumHotreplyNumber
     */
    public function setSupport($support)
    {
        $this->support = $support;

        return $this;
    }

    /**
     * Get support
     *
     * @return integer 
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * Set against
     *
     * @param integer $against
     * @return PreForumHotreplyNumber
     */
    public function setAgainst($against)
    {
        $this->against = $against;

        return $this;
    }

    /**
     * Get against
     *
     * @return integer 
     */
    public function getAgainst()
    {
        return $this->against;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return PreForumHotreplyNumber
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }
}
