<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonBanned
 *
 * @ORM\Table(name="pre_common_banned")
 * @ORM\Entity
 */
class PreCommonBanned
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ip1", type="smallint", nullable=false)
     */
    private $ip1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ip2", type="smallint", nullable=false)
     */
    private $ip2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ip3", type="smallint", nullable=false)
     */
    private $ip3 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ip4", type="smallint", nullable=false)
     */
    private $ip4 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="admin", type="string", length=15, nullable=false)
     */
    private $admin = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="expiration", type="integer", nullable=false)
     */
    private $expiration = '0';



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ip1
     *
     * @param integer $ip1
     * @return PreCommonBanned
     */
    public function setIp1($ip1)
    {
        $this->ip1 = $ip1;

        return $this;
    }

    /**
     * Get ip1
     *
     * @return integer 
     */
    public function getIp1()
    {
        return $this->ip1;
    }

    /**
     * Set ip2
     *
     * @param integer $ip2
     * @return PreCommonBanned
     */
    public function setIp2($ip2)
    {
        $this->ip2 = $ip2;

        return $this;
    }

    /**
     * Get ip2
     *
     * @return integer 
     */
    public function getIp2()
    {
        return $this->ip2;
    }

    /**
     * Set ip3
     *
     * @param integer $ip3
     * @return PreCommonBanned
     */
    public function setIp3($ip3)
    {
        $this->ip3 = $ip3;

        return $this;
    }

    /**
     * Get ip3
     *
     * @return integer 
     */
    public function getIp3()
    {
        return $this->ip3;
    }

    /**
     * Set ip4
     *
     * @param integer $ip4
     * @return PreCommonBanned
     */
    public function setIp4($ip4)
    {
        $this->ip4 = $ip4;

        return $this;
    }

    /**
     * Get ip4
     *
     * @return integer 
     */
    public function getIp4()
    {
        return $this->ip4;
    }

    /**
     * Set admin
     *
     * @param string $admin
     * @return PreCommonBanned
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return string 
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonBanned
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

    /**
     * Set expiration
     *
     * @param integer $expiration
     * @return PreCommonBanned
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * Get expiration
     *
     * @return integer 
     */
    public function getExpiration()
    {
        return $this->expiration;
    }
}
