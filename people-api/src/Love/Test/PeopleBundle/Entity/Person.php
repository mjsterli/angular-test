<?php

namespace Love\Test\PeopleBundle\Entity;

/**
 * Person
 */
class Person
{
    /**
     * @var integer
     */
    private $personid;

    /**
     * @var string
     */
    private $first;

    /**
     * @var string
     */
    private $middle;

    /**
     * @var string
     */
    private $last;

    /**
     * @var integer
     */
    private $age;


    /**
     * Get personid
     *
     * @return integer
     */
    public function getPersonid()
    {
        return $this->personid;
    }

    /**
     * Set first
     *
     * @param string $first
     *
     * @return Person
     */
    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }

    /**
     * Get first
     *
     * @return string
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * Set middle
     *
     * @param string $middle
     *
     * @return Person
     */
    public function setMiddle($middle)
    {
        $this->middle = $middle;

        return $this;
    }

    /**
     * Get middle
     *
     * @return string
     */
    public function getMiddle()
    {
        return $this->middle;
    }

    /**
     * Set last
     *
     * @param string $last
     *
     * @return Person
     */
    public function setLast($last)
    {
        $this->last = $last;

        return $this;
    }

    /**
     * Get last
     *
     * @return string
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Person
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }
}

