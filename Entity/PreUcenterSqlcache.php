<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreUcenterSqlcache
 *
 * @ORM\Table(name="pre_ucenter_sqlcache", indexes={@ORM\Index(name="expiry", columns={"expiry"})})
 * @ORM\Entity
 */
class PreUcenterSqlcache
{
    /**
     * @var string
     *
     * @ORM\Column(name="sqlid", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sqlid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", length=100, nullable=false)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="expiry", type="integer", nullable=false)
     */
    private $expiry;



    /**
     * Get sqlid
     *
     * @return string 
     */
    public function getSqlid()
    {
        return $this->sqlid;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return PreUcenterSqlcache
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string 
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set expiry
     *
     * @param integer $expiry
     * @return PreUcenterSqlcache
     */
    public function setExpiry($expiry)
    {
        $this->expiry = $expiry;

        return $this;
    }

    /**
     * Get expiry
     *
     * @return integer 
     */
    public function getExpiry()
    {
        return $this->expiry;
    }
}
