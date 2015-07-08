<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberCrime
 *
 * @ORM\Table(name="pre_common_member_crime", indexes={@ORM\Index(name="uid", columns={"uid", "action", "dateline"})})
 * @ORM\Entity
 */
class PreCommonMemberCrime
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="operatorid", type="integer", nullable=false)
     */
    private $operatorid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="operator", type="string", length=15, nullable=false)
     */
    private $operator;

    /**
     * @var boolean
     *
     * @ORM\Column(name="action", type="boolean", nullable=false)
     */
    private $action;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="text", nullable=false)
     */
    private $reason;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';



    /**
     * Get cid
     *
     * @return integer 
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonMemberCrime
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

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
     * Set operatorid
     *
     * @param integer $operatorid
     * @return PreCommonMemberCrime
     */
    public function setOperatorid($operatorid)
    {
        $this->operatorid = $operatorid;

        return $this;
    }

    /**
     * Get operatorid
     *
     * @return integer 
     */
    public function getOperatorid()
    {
        return $this->operatorid;
    }

    /**
     * Set operator
     *
     * @param string $operator
     * @return PreCommonMemberCrime
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * Get operator
     *
     * @return string 
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Set action
     *
     * @param boolean $action
     * @return PreCommonMemberCrime
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return boolean 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set reason
     *
     * @param string $reason
     * @return PreCommonMemberCrime
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string 
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreCommonMemberCrime
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
