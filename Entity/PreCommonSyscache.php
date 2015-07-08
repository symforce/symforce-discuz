<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonSyscache
 *
 * @ORM\Table(name="pre_common_syscache")
 * @ORM\Entity
 */
class PreCommonSyscache
{
    /**
     * @var string
     *
     * @ORM\Column(name="cname", type="string", length=32, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ctype", type="boolean", nullable=false)
     */
    private $ctype;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="blob", nullable=false)
     */
    private $data;



    /**
     * Get cname
     *
     * @return string 
     */
    public function getCname()
    {
        return $this->cname;
    }

    /**
     * Set ctype
     *
     * @param boolean $ctype
     * @return PreCommonSyscache
     */
    public function setCtype($ctype)
    {
        $this->ctype = $ctype;

        return $this;
    }

    /**
     * Get ctype
     *
     * @return boolean 
     */
    public function getCtype()
    {
        return $this->ctype;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonSyscache
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
     * Set data
     *
     * @param string $data
     * @return PreCommonSyscache
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
}
