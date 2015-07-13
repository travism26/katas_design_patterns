<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-07-12
 * Time: 7:33 PM
 */

namespace patterns\StrategyPattern;
use patterns\StrategyPattern\flyable\iFlyable;

class Animal {

    protected $flies;
    protected $name;
    protected $type;

    /**
     * @param iFlyable $flies
     * @return iFlyable
     */
    public function flyingType(iFlyable $flies){
        return $this->flies = $flies;
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

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getFlies()
    {
        var_dump($this->name . ", ". $this->flies->fly());
    }

    /**
     * @param mixed $flies
     */
    public function setFlies($flies)
    {
        $this->flies = $flies;
    }

}