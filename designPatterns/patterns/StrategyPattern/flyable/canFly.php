<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 15-07-12
 * Time: 9:45 PM
 */

namespace patterns\StrategyPattern\flyable;


class canFly implements iFlyable{

public function fly()
{
    return "can fly!!";
}}