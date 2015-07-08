<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonCreditRuleLogField
 *
 * @ORM\Table(name="pre_common_credit_rule_log_field")
 * @ORM\Entity
 */
class PreCommonCreditRuleLogField
{
    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $uid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="clid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $clid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text", nullable=false)
     */
    private $info;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="text", nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="app", type="text", nullable=false)
     */
    private $app;



    /**
     * Set uid
     *
     * @param integer $uid
     * @return PreCommonCreditRuleLogField
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
     * Set clid
     *
     * @param integer $clid
     * @return PreCommonCreditRuleLogField
     */
    public function setClid($clid)
    {
        $this->clid = $clid;

        return $this;
    }

    /**
     * Get clid
     *
     * @return integer 
     */
    public function getClid()
    {
        return $this->clid;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return PreCommonCreditRuleLogField
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return PreCommonCreditRuleLogField
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set app
     *
     * @param string $app
     * @return PreCommonCreditRuleLogField
     */
    public function setApp($app)
    {
        $this->app = $app;

        return $this;
    }

    /**
     * Get app
     *
     * @return string 
     */
    public function getApp()
    {
        return $this->app;
    }
}
