<?php

namespace Razvan\Archivetwitter;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Razvan\Archivetwitter\Skeleton\SkeletonClass
 */
class ArchivetwitterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'archivetwitter';
    }
}
