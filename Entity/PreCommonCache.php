<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonCache
 *
 * @ORM\Table(name="pre_common_cache")
 * @ORM\Entity
 */
class PreCommonCache
{
    /**
     * @var string
     *
     * @ORM\Column(name="cachekey", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cachekey = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cachevalue", type="blob", nullable=false)
     */
    private $cachevalue;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Get cachekey
     *
     * @return string 
     */
    public function getCachekey()
    {
        return $this->cachekey;
    }

    /**
     * Set cachevalue
     *
     * @param string $cachevalue
     * @return PreCommonCache
     */
    public function setCachevalue($cachevalue)
    {
        $this->cachevalue = $cachevalue;

        return $this;
    }

    /**
     * Get cachevalue
     *
     * @return string 
     */
    public function getCachevalue()
    {
        return $this->cachevalue;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonCache
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
}
