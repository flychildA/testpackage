<?php


namespace TestPackage;


class TestPackage
{
    /**
     * Call test method
     *
     * @return string
     */
    public function run():string{
        return static::class.' '.__METHOD__;
    }
}