<?php

namespace Symforce\DiscuzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreCommonTaskvar
 *
 * @ORM\Table(name="pre_common_taskvar", indexes={@ORM\Index(name="taskid", columns={"taskid"})})
 * @ORM\Entity
 */
class PreCommonTaskvar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="taskvarid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taskvarid;

    /**
     * @var integer
     *
     * @ORM\Column(name="taskid", type="smallint", nullable=false)
     */
    private $taskid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sort", type="string", nullable=false)
     */
    private $sort = 'complete';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description = '';

    /**
     * @var string
     *
     * @ORM\Column(name="variable", type="string", length=40, nullable=false)
     */
    private $variable = '';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type = 'text';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", nullable=false)
     */
    private $value;



    /**
     * Get taskvarid
     *
     * @return integer 
     */
    public function getTaskvarid()
    {
        return $this->taskvarid;
    }

    /**
     * Set taskid
     *
     * @param integer $taskid
     * @return PreCommonTaskvar
     */
    public function setTaskid($taskid)
    {
        $this->taskid = $taskid;

        return $this;
    }

    /**
     * Get taskid
     *
     * @return integer 
     */
    public function getTaskid()
    {
        return $this->taskid;
    }

    /**
     * Set sort
     *
     * @param string $sort
     * @return PreCommonTaskvar
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Get sort
     *
     * @return string 
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return PreCommonTaskvar
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return PreCommonTaskvar
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set variable
     *
     * @param string $variable
     * @return PreCommonTaskvar
     */
    public function setVariable($variable)
    {
        $this->variable = $variable;

        return $this;
    }

    /**
     * Get variable
     *
     * @return string 
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return PreCommonTaskvar
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
     * Set value
     *
     * @param string $value
     * @return PreCommonTaskvar
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
}
