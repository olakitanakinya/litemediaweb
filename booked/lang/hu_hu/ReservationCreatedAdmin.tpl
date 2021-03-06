{*
Eredeti angol jogi nyilatkozat:

Copyright 2013-2020 Nick Korbel

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

---
Az Eredeti angol jogi nyilatkozat magyar fordítása:

Szerzői jog tulajdonos: 2011-2020 Nick Korbel

Ez a fájl a Booked Scheduler része.

Booked Scheduler szabad szoftver: terjesztheted vagy módosíthatod a GNU Általános Nyilvános Licensz 
bármely 3 változata vagy (belátásod alapjánszerint) későbbi változatok alapján,
amelyeket a Free Software Foundation, adott ki. 

Booked Scheduler abban a reményben kerül terjesztésre, hogy hasznos lesz,
ém MINDEN GARANCIA NÉLKÜL; még a KERESKEDELMI vagy GYAKORLATI FELHASZNÁLÁS
hallgatólagos garanciája nélkül.  További információt a 
GNU Általános Nyilvános Licenszben talál.

A Booked Scheduler mellett meg kellett kapja a GNU Általános Nyilvános Licensz egy példányát is.
Amennyiben nem, kérjük látogassa meg az alábbi oldalt <http://www.gnu.org/licenses/>.
*}
A foglalás részletei:
<br/>
<br/>

Felhasználó: {$UserName}<br/>
{if !empty($CreatedBy)}
	Created by: {$CreatedBy}
	<br/>
{/if}
Kezdés: {formatdate date=$StartDate key=reservation_email}<br/>
Befejezés: {formatdate date=$EndDate key=reservation_email}<br/>
{if $ResourceNames|count > 1}
	Elemek:
	<br/>
	{foreach from=$ResourceNames item=resourceName}
		{$resourceName}
		<br/>
	{/foreach}
{else}
	Elem: {$ResourceName}
	<br/>
{/if}

{if $ResourceImage}
	<div class="resource-image"><img src="{$ScriptUrl}/{$ResourceImage}"/></div>
{/if}

Megnevezés: {$Title}<br/>
Leírás: {$Description|nl2br}

{if count($RepeatRanges) gt 0}
    <br/>
    A foglalás az alábbi dátumokra esik:
    <br/>
{/if}

{foreach from=$RepeatRanges item=date name=dates}
    {formatdate date=$date->GetBegin()}
    {if !$date->IsSameDate()} - {formatdate date=$date->GetEnd()}{/if}
    <br/>
{/foreach}

{if $Participants|count >0}
    <br/>
    Résztvevők:
    {foreach from=$Participants item=user}
        {$user->FullName()} <a href="mailto:{$user->EmailAddress()}">{$user->EmailAddress()}</a>
        <br/>
    {/foreach}
{/if}

{if $ParticipatingGuests|count >0}
    {foreach from=$ParticipatingGuests item=email}
        <a href="mailto:{$email}">{$email}</a>
        <br/>
    {/foreach}
{/if}

{if $Invitees|count >0}
    <br/>
    Meghívottak:
    {foreach from=$Invitees item=user}
        {$user->FullName()} <a href="mailto:{$user->EmailAddress()}">{$user->EmailAddress()}</a>
        <br/>
    {/foreach}
{/if}

{if $InvitedGuests|count >0}
    {foreach from=$InvitedGuests item=email}
        <a href="mailto:{$email}">{$email}</a>
        <br/>
    {/foreach}
{/if}

{if $Accessories|count > 0}
	<br/>
	Kiegészítők:
	<br/>
	{foreach from=$Accessories item=accessory}
		({$accessory->QuantityReserved}) {$accessory->Name}
		<br/>
	{/foreach}
{/if}

{if $Attributes|count > 0}
	<br/>
	{foreach from=$Attributes item=attribute}
		<div>{control type="AttributeControl" attribute=$attribute readonly=true}</div>
	{/foreach}
{/if}

{if $RequiresApproval}
	<br/>
	A foglalt elemek legalább egyike jóváhagyást igényel. Kérjük, biztosítsa a foglalás jóváhagyását vagy elvetését.
{/if}

{if $CheckInEnabled}
	<br/>
	A foglalt elemek legalább egyike ki- és bejelentkezést igényel a fogalásba/ból.
	{if $AutoReleaseMinutes != null}
		Eza foglalás törlésre kerül, amennyiben nem történik bejelentkezés {$AutoReleaseMinutes} perccel az ütemezett kezdést követően.
	{/if}
{/if}

<br/>
Referenciaszám: {$ReferenceNumber}

<br/>
<br/>
<a href="{$ScriptUrl}/{$ReservationUrl}">Foglalás megtekintése</a> | <a href="{$ScriptUrl}">Bejelentkezés ide: {$AppTitle}</a>
