<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeNotification
 *
 * @ORM\Table(name="pre_home_notification", indexes={@ORM\Index(name="uid", columns={"uid", "new"}), @ORM\Index(name="category", columns={"uid", "category", "dateline"}), @ORM\Index(name="by_type", columns={"uid", "type", "dateline"}), @ORM\Index(name="from_id", columns={"from_id", "from_idtype"})})
 * @ORM\Entity
 */
class PreHomeNotification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=false)
     */
    private $uid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="new", type="boolean", nullable=false)
     */
    private $new = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="authorid", type="integer", nullable=false)
     */
    private $authorid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=15, nullable=false)
     */
    private $author = '';

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=false)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="dateline", type="integer", nullable=false)
     */
    private $dateline = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="from_id", type="integer", nullable=false)
     */
    private $fromId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="from_idtype", type="string", length=20, nullable=false)
     */
    private $fromIdtype = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="from_num", type="integer", nullable=false)
     */
    private $fromNum = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="category", type="boolean", nullable=false)
     */
    private $category = '0';



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
     * Set uid
     *
     * @param integer $uid
     * @return PreHomeNotification
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
     * Set type
     *
     * @param string $type
     * @return PreHomeNotification
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set new
     *
     * @param boolean $new
     * @return PreHomeNotification
     */
    public function setNew($new)
    {
        $this->new = $new;

        return $this;
    }

    /**
     * Get new
     *
     * @return boolean 
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * Set authorid
     *
     * @param integer $authorid
     * @return PreHomeNotification
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
     * @return PreHomeNotification
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
     * Set note
     *
     * @param string $note
     * @return PreHomeNotification
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set dateline
     *
     * @param integer $dateline
     * @return PreHomeNotification
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
     * Set fromId
     *
     * @param integer $fromId
     * @return PreHomeNotification
     */
    public function setFromId($fromId)
    {
        $this->fromId = $fromId;

        return $this;
    }

    /**
     * Get fromId
     *
     * @return integer 
     */
    public function getFromId()
    {
        return $this->fromId;
    }

    /**
     * Set fromIdtype
     *
     * @param string $fromIdtype
     * @return PreHomeNotification
     */
    public function setFromIdtype($fromIdtype)
    {
        $this->fromIdtype = $fromIdtype;

        return $this;
    }

    /**
     * Get fromIdtype
     *
     * @return string 
     */
    public function getFromIdtype()
    {
        return $this->fromIdtype;
    }

    /**
     * Set fromNum
     *
     * @param integer $fromNum
     * @return PreHomeNotification
     */
    public function setFromNum($fromNum)
    {
        $this->fromNum = $fromNum;

        return $this;
    }

    /**
     * Get fromNum
     *
     * @return integer 
     */
    public function getFromNum()
    {
        return $this->fromNum;
    }

    /**
     * Set category
     *
     * @param boolean $category
     * @return PreHomeNotification
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return boolean 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
