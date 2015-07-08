<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonOnlinetime
 *
 * @ORM\Table(name="pre_common_onlinetime")
 * @ORM\Entity
 */
class PreCommonOnlinetime
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="thismonth", type="smallint", nullable=false)
     */
    private $thismonth = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="total", type="integer", nullable=false)
     */
    private $total = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="lastupdate", type="integer", nullable=false)
     */
    private $lastupdate = '0';



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
     * Set thismonth
     *
     * @param integer $thismonth
     * @return PreCommonOnlinetime
     */
    public function setThismonth($thismonth)
    {
        $this->thismonth = $thismonth;

        return $this;
    }

    /**
     * Get thismonth
     *
     * @return integer 
     */
    public function getThismonth()
    {
        return $this->thismonth;
    }

    /**
     * Set total
     *
     * @param integer $total
     * @return PreCommonOnlinetime
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

    /**
     * Set lastupdate
     *
     * @param integer $lastupdate
     * @return PreCommonOnlinetime
     */
    public function setLastupdate($lastupdate)
    {
        $this->lastupdate = $lastupdate;

        return $this;
    }

    /**
     * Get lastupdate
     *
     * @return integer 
     */
    public function getLastupdate()
    {
        return $this->lastupdate;
    }
}
