<?php
namespace RealejoTest\Service;

use Realejo\Service\ServiceAbstract;

class ServiceConcrete extends ServiceAbstract
{
    /**
     * @var string
     */
    protected $mapperClass = '\RealejoTest\Mapper\MapperConcrete';
}
