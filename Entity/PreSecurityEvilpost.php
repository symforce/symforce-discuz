<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreSecurityEvilpost
 *
 * @ORM\Table(name="pre_security_evilpost", indexes={@ORM\Index(name="type", columns={"tid", "type"}), @ORM\Index(name="operateresult", columns={"operateresult", "createtime"})})
 * @ORM\Entity
 */
class PreSecurityEvilpost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pid;

    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     */
    private $tid = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="type", type="boolean", nullable=false)
     */
    private $type = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="evilcount", type="integer", nullable=false)
     */
    private $evilcount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="eviltype", type="integer", nullable=false)
     */
    private $eviltype = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="createtime", type="integer", nullable=false)
     */
    private $createtime = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="operateresult", type="boolean", nullable=false)
     */
    private $operateresult = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="isreported", type="boolean", nullable=false)
     */
    private $isreported = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="censorword", type="string", length=50, nullable=false)
     */
    private $censorword;



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
     * @return PreSecurityEvilpost
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
     * Set type
     *
     * @param boolean $type
     * @return PreSecurityEvilpost
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set evilcount
     *
     * @param integer $evilcount
     * @return PreSecurityEvilpost
     */
    public function setEvilcount($evilcount)
    {
        $this->evilcount = $evilcount;

        return $this;
    }

    /**
     * Get evilcount
     *
     * @return integer 
     */
    public function getEvilcount()
    {
        return $this->evilcount;
    }

    /**
     * Set eviltype
     *
     * @param integer $eviltype
     * @return PreSecurityEvilpost
     */
    public function setEviltype($eviltype)
    {
        $this->eviltype = $eviltype;

        return $this;
    }

    /**
     * Get eviltype
     *
     * @return integer 
     */
    public function getEviltype()
    {
        return $this->eviltype;
    }

    /**
     * Set createtime
     *
     * @param integer $createtime
     * @return PreSecurityEvilpost
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Get createtime
     *
     * @return integer 
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

    /**
     * Set operateresult
     *
     * @param boolean $operateresult
     * @return PreSecurityEvilpost
     */
    public function setOperateresult($operateresult)
    {
        $this->operateresult = $operateresult;

        return $this;
    }

    /**
     * Get operateresult
     *
     * @return boolean 
     */
    public function getOperateresult()
    {
        return $this->operateresult;
    }

    /**
     * Set isreported
     *
     * @param boolean $isreported
     * @return PreSecurityEvilpost
     */
    public function setIsreported($isreported)
    {
        $this->isreported = $isreported;

        return $this;
    }

    /**
     * Get isreported
     *
     * @return boolean 
     */
    public function getIsreported()
    {
        return $this->isreported;
    }

    /**
     * Set censorword
     *
     * @param string $censorword
     * @return PreSecurityEvilpost
     */
    public function setCensorword($censorword)
    {
        $this->censorword = $censorword;

        return $this;
    }

    /**
     * Get censorword
     *
     * @return string 
     */
    public function getCensorword()
    {
        return $this->censorword;
    }
}
