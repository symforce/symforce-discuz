<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumRelatedthread
 *
 * @ORM\Table(name="pre_forum_relatedthread")
 * @ORM\Entity
 */
class PreForumRelatedthread
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $type = 'general';

    /**
     * @var integer
     *
     * @ORM\Column(name="expiration", type="integer", nullable=false)
     */
    private $expiration = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=false)
     */
    private $keywords = '';

    /**
     * @var string
     *
     * @ORM\Column(name="relatedthreads", type="text", nullable=false)
     */
    private $relatedthreads;



    /**
     * Set tid
     *
     * @param integer $tid
     * @return PreForumRelatedthread
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
     * @param string $type
     * @return PreForumRelatedthread
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
     * Set expiration
     *
     * @param integer $expiration
     * @return PreForumRelatedthread
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

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return PreForumRelatedthread
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set relatedthreads
     *
     * @param string $relatedthreads
     * @return PreForumRelatedthread
     */
    public function setRelatedthreads($relatedthreads)
    {
        $this->relatedthreads = $relatedthreads;

        return $this;
    }

    /**
     * Get relatedthreads
     *
     * @return string 
     */
    public function getRelatedthreads()
    {
        return $this->relatedthreads;
    }
}
