<?php
/**
 * Copyright (c) 2021 KOUNT, INC.
 * See COPYING.txt for license details.
 */
namespace Kount\Kount\Model\Lib;

class NopLogger extends \Kount_Log_Binding_NopLogger
{
    /**
     * @param string $name
     */
    public function __construct($name = '')
    {
        parent::__construct($name);
    }
}
