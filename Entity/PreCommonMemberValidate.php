<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonMemberValidate
 *
 * @ORM\Table(name="pre_common_member_validate", indexes={@ORM\Index(name="status", columns={"status"})})
 * @ORM\Entity
 */
class PreCommonMemberValidate
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
     * @ORM\Column(name="submitdate", type="integer", nullable=false)
     */
    private $submitdate = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="moddate", type="integer", nullable=false)
     */
    private $moddate = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="admin", type="string", length=15, nullable=false)
     */
    private $admin = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="submittimes", type="boolean", nullable=false)
     */
    private $submittimes = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="remark", type="text", nullable=false)
     */
    private $remark;



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
     * Set submitdate
     *
     * @param integer $submitdate
     * @return PreCommonMemberValidate
     */
    public function setSubmitdate($submitdate)
    {
        $this->submitdate = $submitdate;

        return $this;
    }

    /**
     * Get submitdate
     *
     * @return integer 
     */
    public function getSubmitdate()
    {
        return $this->submitdate;
    }

    /**
     * Set moddate
     *
     * @param integer $moddate
     * @return PreCommonMemberValidate
     */
    public function setModdate($moddate)
    {
        $this->moddate = $moddate;

        return $this;
    }

    /**
     * Get moddate
     *
     * @return integer 
     */
    public function getModdate()
    {
        return $this->moddate;
    }

    /**
     * Set admin
     *
     * @param string $admin
     * @return PreCommonMemberValidate
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
     * Set submittimes
     *
     * @param boolean $submittimes
     * @return PreCommonMemberValidate
     */
    public function setSubmittimes($submittimes)
    {
        $this->submittimes = $submittimes;

        return $this;
    }

    /**
     * Get submittimes
     *
     * @return boolean 
     */
    public function getSubmittimes()
    {
        return $this->submittimes;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return PreCommonMemberValidate
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return PreCommonMemberValidate
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set remark
     *
     * @param string $remark
     * @return PreCommonMemberValidate
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }

    /**
     * Get remark
     *
     * @return string 
     */
    public function getRemark()
    {
        return $this->remark;
    }
}
