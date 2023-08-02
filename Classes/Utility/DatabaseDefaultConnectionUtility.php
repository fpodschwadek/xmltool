<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2022 Torsten Schrade <Torsten.Schrade@adwmainz.de>,
 *           Frodo Podschwadek <frodo.podschwadek@adwmainz.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

namespace Digicademy\Xmltool\Utility;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\{
    Connection,
    ConnectionPool
};

/**
 * Single-purpose utility class to provide a connection instance for the
 * default database connection of the application for further use.
 */
class DatabaseDefaultConnectionUtility
{

    /**
     * Gets a database connection for further use.
     *
     * @return Connection
     */
    public static function get(): Connection
    {

        // We use connection by name here because this clearly IS an
        // edge case and we need none of that table to database mapping for
        // which T3 urges one to use connection by table -- we only have one
        // database in this use case.
        return GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionByName(ConnectionPool::DEFAULT_CONNECTION_NAME);
    }
}
