<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumThreadpreview
 *
 * @ORM\Table(name="pre_forum_threadpreview")
 * @ORM\Entity
 */
class PreForumThreadpreview
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="relay", type="integer", nullable=false)
     */
    private $relay = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;



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
     * Set relay
     *
     * @param integer $relay
     * @return PreForumThreadpreview
     */
    public function setRelay($relay)
    {
        $this->relay = $relay;

        return $this;
    }

    /**
     * Get relay
     *
     * @return integer 
     */
    public function getRelay()
    {
        return $this->relay;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return PreForumThreadpreview
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }
}
