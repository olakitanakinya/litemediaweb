<?php
/**
Copyright 2012-2020 Nick Korbel

This file is part of Booked Scheduler.

Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Booked Scheduler is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
*/

@define('PEAR_ROOT', ROOT_DIR . 'lib/external/pear/');

set_include_path(PEAR_ROOT . PATH_SEPARATOR . get_include_path());

require_once(ROOT_DIR . 'plugins/Authentication/Ldap/Ldap.php');
require_once(ROOT_DIR . 'plugins/Authentication/Ldap/LdapOptions.php');
require_once(ROOT_DIR . 'plugins/Authentication/Ldap/LdapConfig.php');
require_once(ROOT_DIR . 'plugins/Authentication/Ldap/LdapUser.php');
require_once(ROOT_DIR . 'plugins/Authentication/Ldap/Ldap2Wrapper.php');
require_once(PEAR_ROOT . 'PEAR.php');
?>