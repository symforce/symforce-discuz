<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreHomeShow
 *
 * @ORM\Table(name="pre_home_show", indexes={@ORM\Index(name="unitprice", columns={"unitprice"}), @ORM\Index(name="credit", columns={"credit"})})
 * @ORM\Entity
 */
class PreHomeShow
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
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=15, nullable=false)
     */
    private $username = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="unitprice", type="integer", nullable=false)
     */
    private $unitprice = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="credit", type="integer", nullable=false)
     */
    private $credit = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=100, nullable=false)
     */
    private $note = '';



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
     * Set username
     *
     * @param string $username
     * @return PreHomeShow
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set unitprice
     *
     * @param integer $unitprice
     * @return PreHomeShow
     */
    public function setUnitprice($unitprice)
    {
        $this->unitprice = $unitprice;

        return $this;
    }

    /**
     * Get unitprice
     *
     * @return integer 
     */
    public function getUnitprice()
    {
        return $this->unitprice;
    }

    /**
     * Set credit
     *
     * @param integer $credit
     * @return PreHomeShow
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return integer 
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return PreHomeShow
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
}
