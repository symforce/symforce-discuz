<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonVisit
 *
 * @ORM\Table(name="pre_common_visit", indexes={@ORM\Index(name="ip", columns={"ip", "view"})})
 * @ORM\Entity
 */
class PreCommonVisit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ip", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ip = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="view", type="integer", nullable=false)
     */
    private $view = '0';



    /**
     * Get ip
     *
     * @return integer 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set view
     *
     * @param integer $view
     * @return PreCommonVisit
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return integer 
     */
    public function getView()
    {
        return $this->view;
    }
}
