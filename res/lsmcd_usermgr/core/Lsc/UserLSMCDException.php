<?php

/* * ******************************************
 * LiteSpeed LSMCD User Management Plugin for cPanel
 * @author: LiteSpeed Technologies, Inc. (https://www.litespeedtech.com)
 * @copyright: (c) 2018
 * ******************************************* */

namespace LsmcdUserPanel\Lsc;

class UserLSMCDException extends \Exception
{

    const E_ERROR = 0;

    /**
     * show trace msg
     */
    const E_PROGRAM = 100;

    /**
     * error shown to user
     */
    const E_PERMISSION = 101;
    const E_UNSUPPORTED = 102;

    /**
     * Exception is considered non-fatal.
     */
    const E_NON_FATAL = 103;

    /**
     * Exceptions 12x are LSMCD specific
     */
    const E_USER_NOT_DEFINED = 120;
    const E_STATS_SERVER = 121;
    const E_SERVER_ACCESS = 122;

}
