<?php
/**
Copyright 2011-2020 Nick Korbel

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

require_once(ROOT_DIR . 'Controls/Dashboard/DashboardItem.php');
require_once(ROOT_DIR . 'Presenters/Dashboard/AnnouncementPresenter.php');

class AnnouncementsControl extends DashboardItem implements IAnnouncementsControl
{
	private $presenter;

	public function __construct(SmartyPage $smarty)
	{
		parent::__construct($smarty);
		$this->presenter = new AnnouncementPresenter($this, new AnnouncementRepository(), PluginManager::Instance()->LoadPermission());
	}

	public function PageLoad()
	{
		$this->presenter->PageLoad();
		$this->Display('announcements.tpl');
	}

	public function SetAnnouncements($announcements)
	{
		$this->Assign('Announcements', $announcements);
	}
}

interface IAnnouncementsControl
{
	public function SetAnnouncements($announcements);
}