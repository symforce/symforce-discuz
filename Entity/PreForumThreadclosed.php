<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreForumThreadclosed
 *
 * @ORM\Table(name="pre_forum_threadclosed")
 * @ORM\Entity
 */
class PreForumThreadclosed
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
     * @ORM\Column(name="redirect", type="integer", nullable=false)
     */
    private $redirect = '0';



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
     * Set redirect
     *
     * @param integer $redirect
     * @return PreForumThreadclosed
     */
    public function setRedirect($redirect)
    {
        $this->redirect = $redirect;

        return $this;
    }

    /**
     * Get redirect
     *
     * @return integer 
     */
    public function getRedirect()
    {
        return $this->redirect;
    }
}
