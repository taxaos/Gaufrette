<?php

namespace Gaufrette\Adapter\RackspaceCloudfiles;

interface ConnectionFactoryInterface
{
    /**
     * @return \CF_Connection
     */
    function create();
}
