<?php

namespace StatsManagement\Entity;
/**
 * Created by PhpStorm.
 * User: Maurizio
 * Date: 24/11/2016
 * Time: 22:38
 */
class Product
{
    private $id, $name;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        return "Product[id: " . $this->id . ", name: " . $this->name . "]";
    }
}