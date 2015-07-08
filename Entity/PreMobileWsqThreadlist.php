<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreMobileWsqThreadlist
 *
 * @ORM\Table(name="pre_mobile_wsq_threadlist")
 * @ORM\Entity
 */
class PreMobileWsqThreadlist
{
    /**
     * @var integer
     *
     * @ORM\Column(name="skey", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $skey;

    /**
     * @var string
     *
     * @ORM\Column(name="svalue", type="text", nullable=false)
     */
    private $svalue;



    /**
     * Get skey
     *
     * @return integer 
     */
    public function getSkey()
    {
        return $this->skey;
    }

    /**
     * Set svalue
     *
     * @param string $svalue
     * @return PreMobileWsqThreadlist
     */
    public function setSvalue($svalue)
    {
        $this->svalue = $svalue;

        return $this;
    }

    /**
     * Get svalue
     *
     * @return string 
     */
    public function getSvalue()
    {
        return $this->svalue;
    }
}
