<?php
/**
Copyright 2011-2020 Nick Korbel

This file is part of Booked Scheduler is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
*/

require_once(ROOT_DIR . 'lib/Email/Messages/ReservationEmailMessage.php');
require_once(ROOT_DIR . 'lib/Email/Messages/InviteeAddedEmail.php');

class ParticipantAddedEmail extends InviteeAddedEmail
{
	public function Subject()
	{
		return $this->Translate('ParticipantAddedSubjectWithResource', array($this->reservationOwner->FullName(), $this->primaryResource->GetName()));
	}
}

class ParticipantUpdatedEmail extends InviteeUpdatedEmail
{
	public function Subject()
	{
		return $this->Translate('ParticipantUpdatedSubjectWithResource', array($this->reservationOwner->FullName(), $this->primaryResource->GetName()));
	}
}

class ParticipantDeletedEmail extends InviteeRemovedEmail
{
	public function Subject()
	{
		return $this->Translate('ParticipantDeletedSubjectWithResource', array($this->reservationOwner->FullName(), $this->primaryResource->GetName()));
	}
}