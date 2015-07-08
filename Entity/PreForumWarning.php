<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumWarning
 *
 * @ORM\Table(name="pre_forum_warning", uniqueConstraints={@ORM\UniqueConstraint(name="pid", columns={"pid"})}, indexes={@ORM\Index(name="authorid", columns={"authorid"})})
 * @ORM\Entity
 */
class PreForumWarning
{
    /**
     * @var integer
     *
     * @ORM\Column(name="wid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wid;

    /**
     * @var integer
     *
     * @ORM\Column(name="pid", type="integer", nullable=false)
     */
    private $pid;

    /**
     * @var integer
     *
     * @ORM\Column(name="operatorid", type="integer", nullable=false)
     */
    private $operatorid;

    /**
     * @var string
     *
     * @ORM\Column(name="operator", type="string", length=15, nullable=false)
     */
    private $operator;

    /**
     * @var integer
     *
     * @ORM\Column(name="authorid", type="integer", nullable=false)
     */
    private $authorid;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=15, nullable=false)
     */
    private $author;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=40, nullable=false)
     */
    private $reason;



    /**
     * Get wid
     *
     * @return integer 
     */
    public function getWid()
    {
        return $this->wid;
    }

    /**
     * Set pid
     *
     * @param integer $pid
     * @return PreForumWarning
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

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
     * Set operatorid
     *
     * @param integer $operatorid
     * @return PreForumWarning
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
     * @return PreForumWarning
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
     * Set authorid
     *
     * @param integer $authorid
     * @return PreForumWarning
     */
    public function setAuthorid($authorid)
    {
        $this->authorid = $authorid;

        return $this;
    }

    /**
     * Get authorid
     *
     * @return integer 
     */
    public function getAuthorid()
    {
        return $this->authorid;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return PreForumWarning
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreForumWarning
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
     * Set reason
     *
     * @param string $reason
     * @return PreForumWarning
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
}
