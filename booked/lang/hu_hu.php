<?php
/**
 * Copyright 2011-2020 Nick Korbel
 *
 * This file is part of Booked Scheduler.
 *
 * Booked Scheduler is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Booked Scheduler is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Booked Scheduler.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once('en_us.php');

class hu_hu extends en_us
{
	/**
	 * @return array
	 */
	protected function _LoadDates()
	{
		$dates = array();

		$dates['general_date'] = 'm/d/Y';
		$dates['general_datetime'] = 'm/d/Y g:i:s A';
		$dates['short_datetime'] = 'n/j/y g:i A';
		$dates['schedule_daily'] = 'l, n/j/y';
		$dates['reservation_email'] = 'm/d/Y @ g:i A (e)';
		$dates['res_popup'] = 'D, n/d g:i A';
		$dates['res_popup_time'] = 'g:i A';
		$dates['short_reservation_date'] = 'n/j/y g:i A';
		$dates['dashboard'] = 'D, n/d g:i A';
		$dates['period_time'] = 'g:i A';
		$dates['timepicker'] = 'h:i a';
		$dates['mobile_reservation_date'] = 'n/j g:i A';
		$dates['general_date_js'] = 'mm/dd/yy';
        $dates['general_time_js'] = 'h:mm tt';
        $dates['timepicker_js'] = 'h:i a';
        $dates['momentjs_datetime'] = 'M/D/YY h:mm A';
		$dates['calendar_time'] = 'h:mmt';
		$dates['calendar_dates'] = 'M d';
		$dates['embedded_date'] = 'D d';
		$dates['embedded_time'] = 'g:i A';
		$dates['embedded_datetime'] = 'n/j g:i A';
		$dates['report_date'] = '%m/%d';

		$this->Dates = $dates;

		return $this->Dates;
	}

	/**
	 * @return array
	 */
	protected function _LoadStrings()
	{
		$strings = array();

		$strings['FirstName'] = 'Keresztn??v';
		$strings['LastName'] = 'Vezetk??kn??v';
		$strings['Timezone'] = 'Id??z??na';
		$strings['Edit'] = 'Szerkeszt??s';
		$strings['Change'] = 'M??dos??t??s';
		$strings['Rename'] = '??tnevez??s';
		$strings['Remove'] = 'Elt??volt??t??s';
		$strings['Delete'] = 'T??rl??s';
		$strings['Update'] = 'Frisst??s';
		$strings['Cancel'] = 'M??gse';
		$strings['Add'] = 'Hozz??ad';
		$strings['Name'] = 'N??v';
		$strings['Yes'] = 'Igen';
		$strings['No'] = 'Nem';
		$strings['FirstNameRequired'] = 'A keresztn??v sz??ks??ges.';
		$strings['LastNameRequired'] = 'A vezet??kn??v sz??ks??ges.';
		$strings['PwMustMatch'] = 'A jelsz?? meger??s??t??snek egyeznie kell a jelsz??val.';
		$strings['ValidEmailRequired'] = 'Egy ??r??v??nyes e-mail c??m sz??ks??ges.';
		$strings['UniqueEmailRequired'] = 'Az e-mail c??m m??r regisztr??lva lett.';
		$strings['UniqueUsernameRequired'] = 'A felhaszn??l??n??v m??r regisztr??lva lett.';
		$strings['UserNameRequired'] = 'Hi??nyz?? felhaszn??l??n??v.';
		$strings['CaptchaMustMatch'] = 'Captcha sz??ks??ges.';
		$strings['Today'] = 'Ma';
		$strings['Week'] = 'H??t';
		$strings['Month'] = 'H??nap';
		$strings['BackToCalendar'] = 'Vissza a napt??rhoz';
		$strings['BeginDate'] = 'Kezd??s';
		$strings['EndDate'] = 'Befejez??s';
		$strings['Username'] = 'Felhaszn??l??n??v';
		$strings['Password'] = 'Jelsz??';
		$strings['PasswordConfirmation'] = 'Jelsz?? meger??s??t??s';
		$strings['DefaultPage'] = 'Alap??rtelmezett honlap';
		$strings['MyCalendar'] = 'Napt??ram';
		$strings['ScheduleCalendar'] = 'Napt??r ??temez??s';
		$strings['Registration'] = 'Regisztr??ci??';
		$strings['NoAnnouncements'] = 'Jelenleg nincs bejelent??s';
		$strings['Announcements'] = 'Bejelent??sek';
		$strings['NoUpcomingReservations'] = '??nnek nincs k??zelg?? foglal??sa';
		$strings['UpcomingReservations'] = 'K??zelg?? foglal??sok';
		$strings['AllNoUpcomingReservations'] = 'Nincs foglal??s a k??vetkez?? %s napban';
		$strings['AllUpcomingReservations'] = 'Minden k??vetkez?? foglal??s';
		$strings['ShowHide'] = 'Mutat/elrejt';
		$strings['Error'] = 'Hiba';
		$strings['ReturnToPreviousPage'] = 'Visszat??r??s az el??z?? oldalra';
		$strings['UnknownError'] = 'Ismeretlen hiba';
		$strings['InsufficientPermissionsError'] = 'Nincs megfelel?? jogosults??ga az eszk??z el??r??s??hez';
		$strings['MissingReservationResourceError'] = 'Eszk??z nincs kijel??lve';
		$strings['MissingReservationScheduleError'] = 'Beoszt??s nincs kijel??lve';
		$strings['DoesNotRepeat'] = 'Nem ism??tl??dik';
		$strings['Daily'] = 'Naponta';
		$strings['Weekly'] = 'Hetente';
		$strings['Monthly'] = 'Havonta';
		$strings['Yearly'] = '??vente';
		$strings['RepeatPrompt'] = 'Ism??tl??s';
		$strings['hours'] = '??r??k';
		$strings['days'] = 'napok';
		$strings['weeks'] = 'hetek';
		$strings['months'] = 'h??napon';
		$strings['years'] = '??vek';
		$strings['day'] = 'nap';
		$strings['week'] = 'h??t';
		$strings['month'] = 'h??nap';
		$strings['year'] = '??v';
		$strings['repeatDayOfMonth'] = 'a h?? napja';
		$strings['repeatDayOfWeek'] = 'a h??t napja';
		$strings['RepeatUntilPrompt'] = 'eddig';
		$strings['RepeatEveryPrompt'] = 'Minden';
		$strings['RepeatDaysPrompt'] = 'On';
		$strings['CreateReservationHeading'] = '??j foglal??s';
		$strings['EditReservationHeading'] = 'Foglal??s szerkeszt??se %s';
		$strings['ViewReservationHeading'] = 'Foglal??s megtekint??se %s';
		$strings['ReservationErrors'] = 'Foglal??s m??dos??t??sa';
		$strings['Create'] = 'L??trehoz';
		$strings['ThisInstance'] = 'Csak ebben az esetben';
		$strings['AllInstances'] = 'Minden esetben';
		$strings['FutureInstances'] = 'A j??v??beli esetekben';
		$strings['Print'] = 'Nyomtat??s';
		$strings['ShowHideNavigation'] = 'Navig??ci?? mutat/elrejt';
		$strings['ReferenceNumber'] = 'Referenciasz??m';
		$strings['Tomorrow'] = 'Holnap';
		$strings['LaterThisWeek'] = 'K??s??bb ezen a h??ten';
		$strings['NextWeek'] = 'K??vetkez?? h??t';
		$strings['SignOut'] = 'Kijelentkez??s';
		$strings['LayoutDescription'] = 'Kezd??s %s, mutat %s napot egyszerre';
		$strings['AllResources'] = 'Minden eszk??z';
		$strings['TakeOffline'] = 'Vegye el??rhetetlenre';
		$strings['BringOnline'] = 'Vegye el??rhet??re';
		$strings['AddImage'] = 'K??p hozz??ad??sa';
		$strings['NoImage'] = 'Nincs k??p kijel??lve';
		$strings['Move'] = 'Mozgat';
		$strings['AppearsOn'] = 'Megjelenik %s';
		$strings['Location'] = 'Helysz??n';
		$strings['NoLocationLabel'] = '(nincs helysz??n bejel??lve)';
		$strings['Contact'] = 'Kapcsolat';
		$strings['NoContactLabel'] = '(nincs kapcsolati inform??ci??)';
		$strings['Description'] = 'Le??r??s';
		$strings['NoDescriptionLabel'] = '(nincs le??r??s)';
		$strings['Notes'] = 'Jegyzetek';
		$strings['NoNotesLabel'] = '(nincsenek jegyzetek)';
		$strings['NoTitleLabel'] = '(nincs c??m)';
		$strings['UsageConfiguration'] = 'Haszn??lat meger??s??t??se';
		$strings['ChangeConfiguration'] = 'Meger??s??t??s m??dos??t??sa';
		$strings['ResourceMinLength'] = 'A foglal??s legal??bb eddig kell tartson %s';
		$strings['ResourceMinLengthNone'] = 'Nincs minim??lis foglal??si id??tartam';
		$strings['ResourceMaxLength'] = 'A foglal??s nem tarthat tov??bb, mint %s';
		$strings['ResourceMaxLengthNone'] = 'Nincs maxim??lis fogal??si id??tartam';
		$strings['ResourceRequiresApproval'] = 'A fogl??st enged??lyezni kell.';
		$strings['ResourceRequiresApprovalNone'] = 'A fogal??sokat nem sz??ks??ges enged??lyezni.';
		$strings['ResourcePermissionAutoGranted'] = 'Hozz??f??r??s automatikusan megad??sra ker??l';
		$strings['ResourcePermissionNotAutoGranted'] = 'A hozz??f??r??s nem ker??l automatikusan megad??sra';
		$strings['ResourceMinNotice'] = 'A foglal??st legal??bb %s-tal a kezdeti id??pont el??tt kell elv??gezni.';
		$strings['ResourceMinNoticeNone'] = 'A foglal??sokat eg??szen az aktu??lis id??pontig lehet v??gezni.';
		$strings['ResourceMinNoticeUpdate'] = 'A foglal??st legal??bb %s-tal a kezdeti id??pont el??tt lehet friss??teni';
		$strings['ResourceMinNoticeNoneUpdate'] = 'A foglal??sokat legfeljebb az aktu??lis id??pontig lehet friss??teni';
		$strings['ResourceMinNoticeDelete'] = 'A foglal??st legal??bb %s-tal a kezdeti id??pont el??tt lehet t??r??lni';
		$strings['ResourceMinNoticeNoneDelete'] = 'A foglal??sokat az aktu??lis id??pontig lehet t??r??lni';
		$strings['ResourceMaxNotice'] = 'A foglal??sok nem v??gz??dhetnek %s-tal az aktu??lis id??ponthoz k??pest';
		$strings['ResourceMaxNoticeNone'] = 'A fogal??sok b??rmikor v??gz??dhetnek a j??v??ben.';
		$strings['ResourceBufferTime'] = 'Legal??bb %s id??nek kell lenni k??t foglal??s k??z??tt';
		$strings['ResourceBufferTimeNone'] = 'Nincs ??tk??z??s a k??t foglal??s k??z??tt';
		$strings['ResourceAllowMultiDay'] = 'A fogal??sok m??s napra is ??tterjedhetnek.';
		$strings['ResourceNotAllowMultiDay'] = 'A fogal??sok m??s napra nem terjedhetnek ??t.';
		$strings['ResourceCapacity'] = 'Ez forr??s legfeljebb %s embert fogad be';
		$strings['ResourceCapacityNone'] = 'Ennek a forr??snak korl??tlak kapacit??sa van';
		$strings['AddNewResource'] = '??j elem hozz??ad??sa';
		$strings['AddNewUser'] = '??j felhaszn??l?? hozz??ad??sa';
		$strings['AddResource'] = 'Elem hozz??ad??sa';
		$strings['Capacity'] = 'Kapacit??s';
		$strings['Access'] = 'Hozz??f??r??s';
		$strings['Duration'] = 'Id??tartam';
		$strings['Active'] = 'Akt??v';
		$strings['Inactive'] = 'Inakt??v';
		$strings['ResetPassword'] = 'Jelsz?? vissza??ll??t??sa';
		$strings['LastLogin'] = 'Legut??bbi bejelentkez??s';
		$strings['Search'] = 'Keres??s';
		$strings['ResourcePermissions'] = 'Elem jogosults??gai';
		$strings['Reservations'] = 'Foglal??sok';
		$strings['Groups'] = 'Csoportok';
		$strings['Users'] = 'Felhaszn??l??k';
		$strings['AllUsers'] = 'Minden felhaszn??l??';
		$strings['AllGroups'] = 'Minden csoport';
		$strings['AllSchedules'] = 'Minden id??beoszt??s';
		$strings['UsernameOrEmail'] = 'Felhaszn??l??n??v vagy jelsz??';
		$strings['Members'] = 'Tagok';
		$strings['QuickSlotCreation'] = 'K??sz??tsen egy egys??get minden %s percenk??nt %s ??s %s';
		$strings['ApplyUpdatesTo'] = 'Alkalmazza a friss??t??seket a k??vetkez??kre';
		$strings['CancelParticipation'] = 'R??sztv??tel visszavon??sa';
		$strings['Attending'] = 'Csatlakoz??s';
		$strings['QuotaConfiguration'] = 'On %s for %s users in %s are limited to %s %s per %s';
		$strings['QuotaEnforcement'] = 'K??nyszer??tve %s %s';
		$strings['reservations'] = 'fogal??sok';
		$strings['reservation'] = 'foglal??s';
		$strings['ChangeCalendar'] = 'Napt??r v??lt??sa';
		$strings['AddQuota'] = 'Kv??ta hozz??ad??sa';
		$strings['FindUser'] = 'Felhaszn??l?? keres??se';
		$strings['Created'] = 'L??trehozva';
		$strings['LastModified'] = 'Utolj??ra m??dos??tva';
		$strings['GroupName'] = 'Csoport neve';
		$strings['GroupMembers'] = 'Csoport tagjai';
		$strings['GroupRoles'] = 'Csoport szab??lyai';
		$strings['GroupAdmin'] = 'Csoport adminisztr??tor';
		$strings['Actions'] = 'M??veletek';
		$strings['CurrentPassword'] = 'Jelenlegi jelsz??';
		$strings['NewPassword'] = '??j jelsz??';
		$strings['InvalidPassword'] = 'A jelenlegi jelsz?? helytelen';
		$strings['PasswordChangedSuccessfully'] = 'A jelszava sikeresen megv??ltozott';
		$strings['SignedInAs'] = 'Bejelentkezve mint';
		$strings['NotSignedIn'] = 'Nincs bejelentkezve';
		$strings['ReservationTitle'] = 'A foglal??s elnevez??se';
		$strings['ReservationDescription'] = 'A foglal??s le??r??sa';
		$strings['ResourceList'] = 'Foglal??sra v??r?? elemek';
		$strings['Accessories'] = 'Kieg??sz??t??k';
		$strings['InvitationList'] = 'Megh??vottak';
		$strings['AccessoryName'] = 'A kieg??sz??t?? neve';
		$strings['QuantityAvailable'] = 'El??rhet?? mennyis??g';
		$strings['Resources'] = 'Forr??sok';
		$strings['Participants'] = 'R??sztvev??k';
		$strings['User'] = 'felhaszn??l??';
		$strings['Resource'] = 'Forr??s';
		$strings['Status'] = 'St??tusz';
		$strings['Approve'] = 'J??v??hagy??s';
		$strings['Page'] = 'Oldal';
		$strings['Rows'] = 'Sorok';
		$strings['Unlimited'] = 'Korl??tlan';
		$strings['Email'] = 'Email';
		$strings['EmailAddress'] = 'Email c??m';
		$strings['Phone'] = 'Telefon';
		$strings['Organization'] = 'Szervezet';
		$strings['Position'] = 'Poz??ci??';
		$strings['Language'] = 'Nyelv';
		$strings['Permissions'] = 'Enged??lyek';
		$strings['Reset'] = 'Vissza??ll??t??s';
		$strings['FindGroup'] = 'Csoport keres??se';
		$strings['Manage'] = 'Kezel??s';
		$strings['None'] = 'Egyik sem';
		$strings['AddToOutlook'] = 'Napt??rhoz ad??s';
		$strings['Done'] = 'K??sz';
		$strings['RememberMe'] = 'Eml??kezzen r??m';
		$strings['FirstTimeUser?'] = 'Els?? felhaszn??l???';
		$strings['CreateAnAccount'] = 'Fi??k l??trehoz??sa';
		$strings['ViewSchedule'] = 'Beoszt??s megtekint??se';
		$strings['ForgotMyPassword'] = 'Elfelejtettem a jelszavam';
		$strings['YouWillBeEmailedANewPassword'] = 'E-mailben k??ld??nk egy v??letlen gener??lt jelsz??t.';
		$strings['Close'] = 'Bez??r';
		$strings['ExportToCSV'] = 'Export??l??s CSV form??tumba';
		$strings['OK'] = 'OK';
		$strings['Working'] = 'Dolgozunk...';
		$strings['Login'] = 'Bel??p';
		$strings['AdditionalInformation'] = 'Tov??bbi inform??ci??';
		$strings['AllFieldsAreRequired'] = 'minden mez?? k??telez??';
		$strings['Optional'] = 'v??laszthat??';
		$strings['YourProfileWasUpdated'] = 'Profilja friss??tve';
		$strings['YourSettingsWereUpdated'] = 'Be??ll??t??sai friss??tve';
		$strings['Register'] = 'Regisztr??l??s';
		$strings['SecurityCode'] = 'Biztons??gi k??d';
		$strings['ReservationCreatedPreference'] = 'Ha foglalok, vagy egy foglal??s t??rt??nt a megb??z??som alapj??n';
		$strings['ReservationUpdatedPreference'] = 'Ha friss??tek egy foglal??st, vagy m??dos??tottak egy foglal??st a megb??z??som alapj??n.';
		$strings['ReservationDeletedPreference'] = 'Ha t??rl??k vagy t??r??ltek egy foglal??st a megb??z??som alapj??n';
		$strings['ReservationApprovalPreference'] = 'Amikor egy f??gg??ben l??v?? foglal??som enged??lyez??sre ker??l';
		$strings['PreferenceSendEmail'] = 'K??ldj??n e-mailt a r??szemre';
		$strings['PreferenceNoEmail'] = 'Ne ??rtes??tsen';
		$strings['ReservationCreated'] = 'Fogal??sa sikeresen l??trehozva!';
		$strings['ReservationUpdated'] = 'Foglal??sa sikeresen friss??tve!';
		$strings['ReservationRemoved'] = 'Foglal??s??t elt??vol??tott??k';
		$strings['ReservationRequiresApproval'] = 'Egy vagy t??bb elem enged??lyez??se sz??ks??ges haszn??lat el??tt.  Ez a foglal??s f??gg??ben marad ezek enged??lyez??s??ig.';
		$strings['YourReferenceNumber'] = 'Az ??n referencia sz??ma %s';
		$strings['ChangeUser'] = 'Felhaszn??l?? v??lt??sa';
		$strings['MoreResources'] = 'T??bb elem';
		$strings['ReservationLength'] = 'A foglal??s hossza';
		$strings['ParticipantList'] = 'R??sztvev??k list??ja';
		$strings['AddParticipants'] = 'R??sztvev??k hozz??ad??sa';
		$strings['InviteOthers'] = 'M??sok megh??v??sa';
		$strings['AddResources'] = 'Elemek hozz??ad??sa';
		$strings['AddAccessories'] = 'Kieg??sz??t??k hozz??ad??sa';
		$strings['Accessory'] = 'Kieg??sz??t??';
		$strings['QuantityRequested'] = 'Ig??nyelt mennyis??g';
		$strings['CreatingReservation'] = 'Foglal??s l??trehoz??sa';
		$strings['UpdatingReservation'] = 'Foglal??s friss??t??se';
		$strings['DeleteWarning'] = 'Ez a m??velet v??gleges ??s nincs m??d a visszavon??sra!';
		$strings['DeleteAccessoryWarning'] = 'Ezen kieg??sz??t?? t??rl??se eset??n t??rl??dik minden foglal??sb??l.';
		$strings['AddAccessory'] = 'Kieg??sz??t?? hozz??ad??sa';
		$strings['AddBlackout'] = '??zemsz??net hozz??ad??sa';
		$strings['AllResourcesOn'] = 'Minden elem aktiv??l??sa';
		$strings['Reason'] = 'Indok';
		$strings['BlackoutShowMe'] = 'Mutassa meg az ??tk??z?? foglal??sokat';
		$strings['BlackoutDeleteConflicts'] = 'T??r??lje az ??tk??z?? foglal??sokat';
		$strings['Filter'] = 'Sz??r??';
		$strings['Between'] = 'al??bbiak k??z??tt';
		$strings['CreatedBy'] = 'L??trehozta';
		$strings['BlackoutCreated'] = '??zemsz??net hozz??adva';
		$strings['BlackoutNotCreated'] = 'Az ??zemsz??netet nem lehet l??trehozni';
		$strings['BlackoutUpdated'] = '??zemsz??net friss??tve';
		$strings['BlackoutNotUpdated'] = '??zemsz??net nem friss??thet??';
		$strings['BlackoutConflicts'] = '??tk??z??s van az ??zemsz??netek k??z??tt';
		$strings['ReservationConflicts'] = '??tk??z?? foglal??sok';
		$strings['UsersInGroup'] = 'Felhaszn??l??k ebben a csoportban';
		$strings['Browse'] = 'Tall??z??s';
		$strings['DeleteGroupWarning'] = 'A csoport elt??vol??t??s??val t??rl??dnek a hozz?? tartoz?? enged??lyek.  A csoport felhaszn??l??i elveszthetik a foglal??saik hozz??f??r??s??t.';
		$strings['WhatRolesApplyToThisGroup'] = 'Mely szab??lyok ??rv??nyesek a csoportra?';
		$strings['WhoCanManageThisGroup'] = 'Ki kezelheti a csoportot?';
		$strings['WhoCanManageThisSchedule'] = 'Ki kezelheti a beoszt??st?';
		$strings['AllQuotas'] = 'Minden kv??ta';
		$strings['QuotaReminder'] = 'Eml??keztet??: A kv??t??k a beoszt??s id??z??n??j??hoz vannak k??tve.';
		$strings['AllReservations'] = 'Minden foglal??s';
		$strings['PendingReservations'] = 'F??gg??ben l??v?? foglal??sok';
		$strings['Approving'] = 'J??v??hagy??s';
		$strings['MoveToSchedule'] = 'A beoszt??sokhoz';
		$strings['DeleteResourceWarning'] = 'Ezen elem t??rl??s??vel t??rl??dik minden hozz?? tartoz?? adat, mint';
		$strings['DeleteResourceWarningReservations'] = 'minden hozz?? tartoz?? m??ltb??li, jelenlegi ??s j??v??beli foglal??s';
		$strings['DeleteResourceWarningPermissions'] = 'minden jogosults??g kioszt??s';
		$strings['DeleteResourceWarningReassign'] = 'K??rem, miel??tt tov??bbl??p, rendeljen hozz?? ??jra mindent, amelyet nem szeretne t??r??lni.';
		$strings['ScheduleLayout'] = 'Elrendez??s (mindel alkalom %s)';
		$strings['ReservableTimeSlots'] = 'Foglalhat?? id?? egys??gek';
		$strings['BlockedTimeSlots'] = 'Lez??rt id?? egys??gek';
		$strings['ThisIsTheDefaultSchedule'] = 'Ez az alap??rtelmezett beoszt??s';
		$strings['DefaultScheduleCannotBeDeleted'] = 'Az alap??rtelmezett beoszt??s nem t??r??lhet??';
		$strings['MakeDefault'] = 'Tegye alap??rtelmezett??';
		$strings['BringDown'] = 'Mozgat??s lejjebb';
		$strings['ChangeLayout'] = 'Elrendez??s v??ltoztat??sa';
		$strings['AddSchedule'] = 'Beoszt??s hozz??ad??sa';
		$strings['StartsOn'] = 'Kezd?? id??pont';
		$strings['NumberOfDaysVisible'] = 'L??that?? napok sz??ma';
		$strings['UseSameLayoutAs'] = 'Haszn??lja azt az elrendez??st mint';
		$strings['Format'] = 'Form??tum';
		$strings['OptionalLabel'] = 'V??laszthat?? cimke';
		$strings['LayoutInstructions'] = 'Soronk??nt egy egys??get adjon meg.  Az egys??geket a nap 24 ??r??j??ra meg kell adni, 0:00 kezdettel ??s befejez??ssel.';
		$strings['AddUser'] = 'Felhaszn??l?? hozz??ad??sa';
		$strings['UserPermissionInfo'] = 'Az elemmhez val?? hozz??f??r??s elt??r?? lehet f??gg??en a felhszn??l??i szab??lyokt??l, csoport szab??lyokt??l vagy k??ls?? hozz??f??r??si be??ll??t??sokt??l';
		$strings['DeleteUserWarning'] = 'Jelen felhaszn??l?? torl??s??vel t??rl??dik minden jelenlegi j??v??beli ??s m??ltb??li foglal??sa.';
		$strings['AddAnnouncement'] = 'Bejelent??s hozz??ad??sa';
		$strings['Announcement'] = 'Bejelent??s';
		$strings['Priority'] = 'Priorit??s';
		$strings['Reservable'] = 'Megmyit??s';
		$strings['Unreservable'] = 'Blokkolt';
		$strings['Reserved'] = 'Foglalt';
		$strings['MyReservation'] = 'Foglal??som';
		$strings['Pending'] = 'F??gg??bem';
		$strings['Past'] = 'M??lt';
		$strings['Restricted'] = 'Korl??tozott';
		$strings['ViewAll'] = 'Mind megtekint??se';
		$strings['MoveResourcesAndReservations'] = 'Elemek ??s foglal??sok mozgat??sa';
		$strings['TurnOffSubscription'] = 'Elrejt??s';
		$strings['TurnOnSubscription'] = 'Nyilv??noss?? tesz (RSS, iCalendar)';
		$strings['SubscribeToCalendar'] = 'Feliratkoz??s erre a napt??rra';
		$strings['SubscriptionsAreDisabled'] = 'Az adminisztr??tor letiltotta a napt??rra val?? feliratkoz??st';
		$strings['NoResourceAdministratorLabel'] = '(Nincs Er??forr??s Adminiszttr??tor)';
		$strings['WhoCanManageThisResource'] = 'Ki kezelheti ezt az elemet?';
		$strings['ResourceAdministrator'] = 'Elem adminisztr??tor';
		$strings['Private'] = 'Priv??t';
		$strings['Accept'] = 'Elfogad';
		$strings['Decline'] = 'Elutas??t';
		$strings['ShowFullWeek'] = 'Teljes h??t mutat??sa';
		$strings['CustomAttributes'] = 'Egyedi attrib??tumok';
		$strings['AddAttribute'] = 'Attrib??tum hozz??ad??sa';
		$strings['EditAttribute'] = 'Attrib??tum friss??t??se';
		$strings['DisplayLabel'] = 'Cimk??k megjelen??t??se';
		$strings['Type'] = 'Tipus';
		$strings['Required'] = 'Sz??ks??ges';
		$strings['ValidationExpression'] = 'Validation Expression';
		$strings['PossibleValues'] = 'Lehets??ges ??rt??kek';
		$strings['SingleLineTextbox'] = 'Egy sorb??l ??ll?? sz??vegdoboz';
		$strings['MultiLineTextbox'] = 'T??bb sorb??l ??ll?? sz??vegdoboz';
		$strings['Checkbox'] = 'Jel??l??n??gyzet';
		$strings['SelectList'] = 'Leg??rd??l?? lista';
		$strings['CommaSeparated'] = 'vessz??vel elv??lasztott';
		$strings['Category'] = 'Kateg??ria';
		$strings['CategoryReservation'] = 'Foglal??s';
		$strings['CategoryGroup'] = 'Csoport';
		$strings['SortOrder'] = 'Redez??si elv';
		$strings['Title'] = 'Megnevez??s';
		$strings['AdditionalAttributes'] = 'Tov??bbi attrib??tumok';
		$strings['True'] = 'Igaz';
		$strings['False'] = 'Hamis';
		$strings['ForgotPasswordEmailSent'] = 'Egy e-mail kik??ld??sre ker??lt a jelsz?? vissza??ll??t??s??hoz sz??ks??ges utas??t??sokkal';
		$strings['ActivationEmailSent'] = 'Hamarosan e-mailt fog kapni.';
		$strings['AccountActivationError'] = 'Sajn??ljuk, nem tudjuk aktiv??lni a fi??kj??t.';
		$strings['Attachments'] = 'Csatolm??nyok';
		$strings['AttachFile'] = 'F??jl csatol??sa';
		$strings['Maximum'] = 'max';
		$strings['NoScheduleAdministratorLabel'] = 'Nincs beoszt??s adminisztr??tor';
		$strings['ScheduleAdministrator'] = 'Beoszt??s adminisztr??tor';
		$strings['Total'] = '??sszesen';
		$strings['QuantityReserved'] = 'Mennyis??g foglalva';
		$strings['AllAccessories'] = 'Minden kieg??sz??t??';
		$strings['GetReport'] = 'Kimutat??s leh??v??sa';
		$strings['NoResultsFound'] = 'Nem tal??lhat?? megfelel?? eredm??ny';
		$strings['SaveThisReport'] = 'Kimutat??s ment??se';
		$strings['ReportSaved'] = 'Kimutat??s elmentve!';
		$strings['EmailReport'] = 'Kimutat??s k??ld??se e-mailben';
		$strings['ReportSent'] = 'Kimutat??s elk??ldve!';
		$strings['RunReport'] = 'Kimutat??s futtat??sa';
		$strings['NoSavedReports'] = 'Nincs mentett kimutat??sa.';
		$strings['CurrentWeek'] = 'Aktu??lis h??t';
		$strings['CurrentMonth'] = 'Aktu??lis h??nap';
		$strings['AllTime'] = 'Minden id??szal';
		$strings['FilterBy'] = 'Sz??r??s alapja';
		$strings['Select'] = 'Kiv??laszt';
		$strings['List'] = 'List??z??s';
		$strings['TotalTime'] = 'Id??';
		$strings['Count'] = 'Mennyis??g';
		$strings['Usage'] = 'Haszn??lat';
		$strings['AggregateBy'] = 'Aggregate By';
		$strings['Range'] = 'Sorba ??ll??t';
		$strings['Choose'] = 'Kiv??laszt';
		$strings['All'] = 'Mind';
		$strings['ViewAsChart'] = 'Megtekint??s diagramk??nt';
		$strings['ReservedResources'] = 'Foglalt elemek';
		$strings['ReservedAccessories'] = 'Foglalt kieg??sz??t??k';
		$strings['ResourceUsageTimeBooked'] = 'Elem kihaszn??lts??g - foglal??s id?? szerint';
		$strings['ResourceUsageReservationCount'] = 'Elem kihaszn??lts??g - foglal??sok sz??ma'	;
		$strings['Top20UsersTimeBooked'] = 'Top 20 felhaszn??l?? - foglal??si id?? szerint';
		$strings['Top20UsersReservationCount'] = 'Top 20 felhaszn??l?? - fogal??sok sz??ma alapj??n';
		$strings['ConfigurationUpdated'] = 'A konfigur??ci??s f??jl mentve';
		$strings['ConfigurationUiNotEnabled'] = 'Ez az oldal nem hozz??f??rhet??. Ok: $conf[\'settings\'][\'pages\'][\'enable.configuration\'] is set to false or missing.';
		$strings['ConfigurationFileNotWritable'] = 'A konfigur??ci??s f??jl nem ??rhat??. K??rem, ellen??r??zze a f??jl jogosults??gait ??s pr??b??lja ??jra.';
		$strings['ConfigurationUpdateHelp'] = 'K??rem, keresse fel a konfigur??ci?? al??bbi r??sz??t: <a target=_blank href=%s>S??g?? f??jll</a> al??bbi be??ll??t??sok dokument??ci??j????rt.';
		$strings['GeneralConfigSettings'] = 'be??ll??t??sok';
		$strings['UseSameLayoutForAllDays'] = 'Haszn??lja ugyanazta a kioszt??st minden napra';
		$strings['LayoutVariesByDay'] = 'A kioszt??s v??ltozik a napok alapj??n';
		$strings['ManageReminders'] = 'Eml??keztet??k';
		$strings['ReminderUser'] = 'Felhaszn??l??i azonos??t??';
		$strings['ReminderMessage'] = '??zenet';
		$strings['ReminderAddress'] = 'C??mek';
		$strings['ReminderSendtime'] = 'K??ld??s id??pontja';
		$strings['ReminderRefNumber'] = 'A foglal??s referencia sz??ma';
		$strings['ReminderSendtimeDate'] = 'Az eml??kezet?? d??tuma';
		$strings['ReminderSendtimeTime'] = 'Az eml??kezet?? id??pontja (HH:MM)';
		$strings['ReminderSendtimeAMPM'] = 'DE / DU';
		$strings['AddReminder'] = 'Eml??keztet?? hozz??ad??sa';
        $strings['DeleteReminderWarning'] = 'Val??ban t??rli?';
        $strings['NoReminders'] = 'Nincs k??zelg?? eml??keztet??je.';
		$strings['Reminders'] = 'Eml??keztet??k';
		$strings['SendReminder'] = 'Eml??keztet?? k??ld??se';
		$strings['minutes'] = 'percek';
		$strings['hours'] = '??r??k';
		$strings['days'] = 'napok';
		$strings['ReminderBeforeStart'] = 'kezdeti id??pont el??tt';
		$strings['ReminderBeforeEnd'] = 'befejez??s id??pontja el??tt';
		$strings['Logo'] = 'Log??';
		$strings['CssFile'] = 'CSS F??jl';
		$strings['ThemeUploadSuccess'] = 'Be??ll??t??sai elmentve. K??rj??k friss??tse az oldalt a be??ll??t??sok ??rv??nyes??t??s??hez.';
		$strings['MakeDefaultSchedule'] = 'Tegye ezt a beoszt??st az ??n alap??rtelmezettemm??';
		$strings['DefaultScheduleSet'] = 'Ez a beoszt??s mostant??l az ??n alap??rtelmezettje';
		$strings['FlipSchedule'] = 'Ford??tson a beoszt??s kioszt??s??n';
		$strings['Next'] = 'K??vetkez??';
		$strings['Success'] = 'Sikeres';
		$strings['Participant'] = 'R??sztvev??';
		$strings['ResourceFilter'] = 'Elem sz??r??';
		$strings['ResourceGroups'] = 'Elem csoportok';
		$strings['AddNewGroup'] = '??j csoport hozz??ad??sa';
		$strings['Quit'] = 'Kil??p??s';
		$strings['AddGroup'] = 'Csoport hozz??ad??sa';
		$strings['StandardScheduleDisplay'] = 'Az alap??rtelmezett beoszt??s megjelen??t??s haszn??lata';
		$strings['TallScheduleDisplay'] = 'Magas megejelen??t??s haszn??lata';
		$strings['WideScheduleDisplay'] = 'Sz??les megjelen??t??s hszn??lata';
		$strings['CondensedWeekScheduleDisplay'] = 'T??m??r heti megjelen??t??s haszn??lata';
		$strings['ResourceGroupHelp1'] = 'H??z??ssal rendezze ??t az elem csoportokat.';
		$strings['ResourceGroupHelp2'] = 'Kattintson jobb gombbal egy elem csoportra tov??bbi m??veletek??rt.';
		$strings['ResourceGroupHelp3'] = 'H??zza az elemeket a csoportokra a hozz??ad??shoz.';
		$strings['ResourceGroupWarning'] = 'Ha elemcsoportokat haszn??l, minden elemet legal??bb egy csoporthoz ki kell jel??lni. A ki nem jel??lt elemeket nem lehet majd foglalni.';
		$strings['ResourceType'] = 'Elemt??pus';
		$strings['AppliesTo'] = 'Alkalmazhat?? a k??vetkez??re';
		$strings['UniquePerInstance'] = 'Egyedi folyamatonk??nt';
		$strings['AddResourceType'] = 'Elemt??pus hozz??ad??sa';
		$strings['NoResourceTypeLabel'] = '(m??g nincs elemt??pus)';
		$strings['ClearFilter'] = 'Sz??r?? t??rl??se';
		$strings['MinimumCapacity'] = 'Minimum kapacit??s';
		$strings['Color'] = 'Sz??n';
		$strings['Available'] = 'El??rhet??';
		$strings['Unavailable'] = 'Nem el??rhet??';
		$strings['Hidden'] = 'Rejtett';
		$strings['ResourceStatus'] = 'Elem st??tusz';
		$strings['CurrentStatus'] = 'Jelenlegi st??tusz';
		$strings['AllReservationResources'] = 'Minden foglal??s eleme';
		$strings['File'] = 'F??jl';
		$strings['BulkResourceUpdate'] = 'K??tegelt elem friss??t??s';
		$strings['Unchanged'] = 'V??ltozatlan';
		$strings['Common'] = 'K??z??s';
		$strings['AdminOnly'] = 'Kiz??r??lag admin';
		$strings['AdvancedFilter'] = 'B??v??tett sz??r??';
		$strings['MinimumQuantity'] = 'Minimum mennyis??g';
		$strings['MaximumQuantity'] = 'Max mennyis??g';
		$strings['ChangeLanguage'] = 'Nyelv cser??je';
		$strings['AddRule'] = 'Szab??ly hozz??ad??sa';
		$strings['Attribute'] = 'Attrib??tum';
		$strings['RequiredValue'] = 'Sz??ks??ges ??rt??k';
		$strings['ReservationCustomRuleAdd'] = 'Haszn??lja az al??bbi sz??nt, amikor a foglal??s attrib??tum a k??vetkez?? ??rt??kre ker??lt be??ll??t??sra';
		$strings['AddReservationColorRule'] = 'Foglal??si sz??n szab??ly hozz??ad??sa';
		$strings['LimitAttributeScope'] = 'K??l??nleges esetekben gy??jtse';
		$strings['CollectFor'] = 'Gy??jtse a k??vetkez??nek';
		$strings['SignIn'] = 'Bejelentkez??s';
		$strings['AllParticipants'] = 'Minden r??sztvev??';
		$strings['RegisterANewAccount'] = 'Egy ??j fi??k regisztr??l??sa';
		$strings['Dates'] = 'D??tumok';
		$strings['More'] = 'T??bb';
		$strings['ResourceAvailability'] = 'Elem el??rhet??s??ge';
		$strings['UnavailableAllDay'] = 'Nem el??rhet?? eg??sz nap';
		$strings['AvailableUntil'] = 'El??rhet?? eddig';
		$strings['AvailableBeginningAt'] = 'El??rhet?? a k??vetkez?? id??pontt??l';
        $strings['AvailableAt'] = 'El??rhet??';
		$strings['AllResourceTypes'] = 'Minden elem t??pus';
		$strings['AllResourceStatuses'] = 'Minden elem st??tusz';
		$strings['AllowParticipantsToJoin'] = 'Enged??lyezze a r??sztvev??knek, hogy csatlakozzanak';
		$strings['Join'] = 'Csatlakozom';
		$strings['YouAreAParticipant'] = '??n r??sztvev??je ennek a foglal??snak';
		$strings['YouAreInvited'] = 'Megh??vt??k erre a foglal??sra';
		$strings['YouCanJoinThisReservation'] = 'Csatlakozhat ehhez a foglal??shoz';
		$strings['Import'] = 'Import??l??s';
		$strings['GetTemplate'] = 'Sablon let??lt??sre';
		$strings['UserImportInstructions'] = '<ul><li>A f??jl CSV form??tumban sz??ks??ges.</li><li>Username and email are required fields.</li><li>Attribute validity will not be enforced.</li><li>Leaving other fields blank will set default values and \'password\' as the user\'s password.</li><li>Use the supplied template as an example.</li></ul>';
		$strings['RowsImported'] = 'Sor import??lva';
		$strings['RowsSkipped'] = 'Sor ??tugorva';
		$strings['Columns'] = 'Oszlop';
		$strings['Reserve'] = 'Foglalva';
		$strings['AllDay'] = 'Eg??sz nap';
		$strings['Everyday'] = 'Minden nap';
		$strings['IncludingCompletedReservations'] = 'bele??rtve teljes??tett foglal??st';
		$strings['NotCountingCompletedReservations'] = 'kiv??ve teljes??tett foglal??sok';
		$strings['RetrySkipConflicts'] = '??tk??z?? foglal??sok ??tugr??sa';
		$strings['Retry'] = '??jra pr??b??l';
		$strings['RemoveExistingPermissions'] = 'L??tez?? enged??lyek elt??vol??t??sa?';
		$strings['Continue'] = 'Folytat??s';
		$strings['WeNeedYourEmailAddress'] = 'Sz??ks??g??nk van az e-mail c??m??re a foglal??shoz';
		$strings['ResourceColor'] = 'Elem sz??ne';
		$strings['DateTime'] = 'd??tum ??s id??';
		$strings['AutoReleaseNotification'] = 'Automatikusan felszabad??tul, ha nem ker??l foglal??sra %s percen bel??l';
		$strings['RequiresCheckInNotification'] = 'Ki ??s be csakkol??s sz??ks??ges';
		$strings['NoCheckInRequiredNotification'] = 'Nem sz??ks??ges a ki/be csekkol??s';
		$strings['RequiresApproval'] = 'Enged??lyez??s sz??ks??ges';
		$strings['CheckingIn'] = 'Bejelentkez??s';
		$strings['CheckingOut'] = 'Kijelentkez??s';
		$strings['CheckIn'] = 'Bejelentkez??s';
		$strings['CheckOut'] = 'Kijelentkez??s';
		$strings['ReleasedIn'] = 'Felszabad??tva';
		$strings['CheckedInSuccess'] = '??n bejelentkezett';
		$strings['CheckedOutSuccess'] = '??n kijelentkezett';
		$strings['CheckInFailed'] = 'Nem jelentkeztethet?? be';
		$strings['CheckOutFailed'] = 'Nem jelentkeztethet?? ki';
		$strings['CheckInTime'] = 'Bejelentkez??s ideje';
		$strings['CheckOutTime'] = 'Kijelentkez??s ideje';
		$strings['OriginalEndDate'] = 'Eredeti befejez??s';
		$strings['SpecificDates'] = 'Mutassa a megadott d??tumokat';
		$strings['Users'] = 'Felhaszn??l??k';
		$strings['Guest'] = 'Vend??g';
		$strings['ResourceDisplayPrompt'] = 'Elemek megjelen??t??se';
		$strings['Credits'] = 'Egys??g';
		$strings['AvailableCredits'] = 'El??rhet?? egys??gek';
		$strings['CreditUsagePerSlot'] = 'Sz??ks??ges %s egys??g rekeszenk??nt (cs??csid??n k??v??l)';
		$strings['PeakCreditUsagePerSlot'] = 'Sz??ks??ges %s egys??g rekeszenk??nt (cs??csid??ben)';
		$strings['CreditsRule'] = 'Nincs rendelkez??sre ??ll?? egys??g. Sz??ks??ges: %s. Egys??g a fi??kj??ban: %s';
		$strings['PeakTimes'] = 'Cs??csid??';
		$strings['AllYear'] = 'Eg??sz ??vben';
		$strings['MoreOptions'] = 'Tov??bbi opci??k';
		$strings['SendAsEmail'] = 'K??ld??s e-mailk??nt';
		$strings['UsersInGroups'] = 'Felhaszn??l??k a csoportokban';
		$strings['UsersWithAccessToResources'] = 'Felhaszn??l??k az elemekhez val?? hozz??f??r??ssel';
		$strings['AnnouncementSubject'] = 'Egy ??j belejelt??s al??bbi felhaszn??l??t??l %s';
		$strings['AnnouncementEmailNotice'] = 'felhaszn??l??knak e-mailk??nt lesz kik??ldve a bejelent??s';
		$strings['Day'] = 'Nap';
		$strings['NotifyWhenAvailable'] = '??rtes??tsen ha el??rhet??';
		$strings['AddingToWaitlist'] = 'Hozz??adva a v??r??list??hoz';
		$strings['WaitlistRequestAdded'] = '??rtes??tve lesz, ha ez az id??pont el??rhet?? lesz.';
		$strings['PrintQRCode'] = 'QR k??d nyomtat??sa';
		$strings['FindATime'] = 'Id??pont keres??se';
		$strings['AnyResource'] = 'B??rmely elem';
		$strings['ThisWeek'] = 'Ezen a h??ten';
		$strings['Hours'] = '??r??k';
		$strings['Minutes'] = 'Percek';
        $strings['ImportICS'] = 'Import??l??s ICS-b??l';
        $strings['ImportQuartzy'] = 'Import??l??s Quartzy-b??l';
        $strings['OnlyIcs'] = 'Csak *.ics f??jlok felt??lthet??ek.';
        $strings['IcsLocationsAsResources'] = 'A helysz??nek elemekk??nt ker??lnek bet??lt??sre.';
        $strings['IcsMissingOrganizer'] = 'Any event missing an organizer will have the owner set to the current user.';
        $strings['IcsWarning'] = 'A foglal??si szab??lyok nem lesznek k??nyszer??tve - ??tk??z??sek, duplik??ci??k el??fordulhatnak.';
		$strings['BlackoutAroundConflicts'] = '??zemsz??net az ??tk??z?? foglal??sok k??rny??k??n';
		$strings['DuplicateReservation'] = 'Ism??tl??d??s';
		$strings['UnavailableNow'] = 'Jelenleg nem el??rhet??';
		$strings['ReserveLater'] = 'Fogl??l??s k??s??bb';
		$strings['CollectedFor'] = 'Begy??jtve a k??vetkez?? r??sz??re';
		$strings['IncludeDeleted'] = 'A t??r??lt foglal??sokat is bele??rtve';
		$strings['Deleted'] = 'T??r??lve';
		$strings['Back'] = 'Vissza';
		$strings['Forward'] = 'El??re';
		$strings['DateRange'] = 'D??tum tartom??ny';
		$strings['Copy'] = 'M??sol';
		$strings['Detect'] = 'Keres';
		$strings['Autofill'] = 'Kit??lt??s automatikusan';
		$strings['NameOrEmail'] = 'n??v vagy e-mail';
		$strings['ImportResources'] = 'Elemek import??l??sa';
		$strings['ExportResources'] = 'Elemek export??l??sa';
		$strings['ResourceImportInstructions'] = '<ul><li>A f??jl CSV form??tumban kell, hogy legyen UTF-8 k??dol??ssal.</li><li>Name is required field. Leaving other fields blank will set default values.</li><li>Status options are \'Available\', \'Unavailable\' and \'Hidden\'.</li><li>Color should be the hex value. ex) #ffffff.</li><li>Auto assign and approval columns can be true or false.</li><li>Attribute validity will not be enforced.</li><li>Comma separate multiple resource groups.</li><li>Use the supplied template as an example.</li></ul>';
		$strings['ReservationImportInstructions'] = '<ul><li>A f??jl CSV form??tumban kell, hogy legyen UTF-8 k??dol??ssal.</li><li>Email, resource names, begin, and end are required fields.</li><li>Begin and end require full date time. Recommended format is YYYY-mm-dd HH:mm (2017-12-31 20:30).</li><li>Rules, conflicts, and valid time slots will not be checked.</li><li>Notifications will not be sent.</li><li>Attribute validity will not be enforced.</li><li>Comma separate multiple resource names.</li><li>Use the supplied template as an example.</li></ul>';
		$strings['AutoReleaseMinutes'] = 'Percek automatikus felszabad??t??sa';
		$strings['CreditsPeak'] = 'Egys??g (cs??csid??ben)';
		$strings['CreditsOffPeak'] = 'Egys??g (cs??csid??n k??v??l)';
		$strings['ResourceMinLengthCsv'] = 'Foglal??s minim??lis hossza';
		$strings['ResourceMaxLengthCsv'] = 'Foglal??s maxim??lis hossza';
		$strings['ResourceBufferTimeCsv'] = 'Tartal??k id??';
		$strings['ResourceMinNoticeAddCsv'] = 'Reservation Add Minimum Notice';
		$strings['ResourceMinNoticeUpdateCsv'] = 'Reservation Update Minimum Notice';
		$strings['ResourceMinNoticeDeleteCsv'] = 'Reservation Delete Minimum Notice';
		$strings['ResourceMaxNoticeCsv'] = 'A foglal??s maxim??lis befejez??se';
		$strings['Export'] = 'Export??l??s';
		$strings['DeleteMultipleUserWarning'] = 'A felhaszn??l??k t??rl??s??vel elt??vol??t??sra ker??l minden m??ltb??li, jelenlegi ??s j??v??beli foglal??s. E-mail nem ker??l kik??ld??sre.';
		$strings['DeleteMultipleReservationsWarning'] = 'E-mail nem ker??l kik??ld??sre.';
		$strings['ErrorMovingReservation'] = 'Hiba: Foglal??sok mozgat??sa';
        $strings['SelectUser'] = 'Felhaszn??l?? kijel??l??se';
        $strings['InviteUsers'] = 'Felhaszn??l??k megh??v??sa';
        $strings['InviteUsersLabel'] = 'Adja meg a megh??vand?? emberek e-mail c??m??t';
        $strings['ApplyToCurrentUsers'] = 'Alkalmaz??s az aktu??lis felhaszn??l?? r??sz??re';
        $strings['ReasonText'] = 'Indokl??s sz??vege';
        $strings['NoAvailableMatchingTimes'] = 'A keres??s alapj??n nincs el??rhet?? id??pont';
        $strings['Schedules'] = 'Beoszt??sok';
        $strings['NotifyUser'] = 'Felhaszn??l?? ??rtes??t??se';
        $strings['UpdateUsersOnImport'] = 'L??tez?? felhaszn??l?? friss??t??se, ha az e-mail c??m m??r l??tezik';
        $strings['UpdateResourcesOnImport'] = 'L??tez?? elemek friss??t??se, ha a n??v m??r l??tezik';
        $strings['Reject'] = 'Elutas??t??s';
        $strings['CheckingAvailability'] = 'El??rhet??s??g ellen??rz??se';
        $strings['CreditPurchaseNotEnabled'] = 'Nem enged??lyezte egys??gek v??s??rl??s??nak lehet??s??g??t';
        $strings['CreditsCost'] = 'Egys??gek darab??ra';
        $strings['Currency'] = 'P??nznem';
        $strings['PayPalClientId'] = '??gyf??l azonos??t??ja';
        $strings['PayPalSecret'] = 'Titkos';
        $strings['PayPalEnvironment'] = 'K??rnyezet';
        $strings['Sandbox'] = 'Homokoz??';
        $strings['Live'] = '??l??';
        $strings['StripePublishableKey'] = 'Nyilv??nos kulcs';
        $strings['StripeSecretKey'] = 'Titkos kulcs';
        $strings['CreditsUpdated'] = 'Egys??g darab??r friss??tve';
        $strings['GatewaysUpdated'] = 'A fizet?? ??tj??r??k friss??tve';
        $strings['PurchaseSummary'] = 'V??s??rl??sok ??sszes??t??se';
        $strings['EachCreditCosts'] = 'Az egys??gek darab??ra';
        $strings['Checkout'] = 'Fizet??s';
        $strings['Quantity'] = 'Mennyis??g';
        $strings['CreditPurchase'] = 'Egys??g v??s??r??s';
        $strings['EmptyCart'] = 'A kos??r ??res.';
        $strings['BuyCredits'] = 'Egys??g v??s??rl??sa';
        $strings['CreditsPurchased'] = 'egys??g megv??s??rolva.';
        $strings['ViewYourCredits'] = 'Egys??gek megtekint??se';
        $strings['TryAgain'] = '??jra pr??b??l';
        $strings['PurchaseFailed'] = 'Probl??ma a fizet??s k??zben.';
        $strings['NoteCreditsPurchased'] = 'Egys??g megv??s??rolva';
        $strings['CreditsUpdatedLog'] = 'Egys??g friss??tve %s ??ltal';
        $strings['ReservationCreatedLog'] = 'Foglal??s l??trehozva. Referenciasz??m %s';
        $strings['ReservationUpdatedLog'] = 'Foglal??s friss??tve. Referenciasz??m %s';
        $strings['ReservationDeletedLog'] = 'Foglal??s t??r??lve. Referenciasz??m %s';
        $strings['BuyMoreCredits'] = 'Tov??bbi egys??g v??s??rl??sa';
        $strings['Transactions'] = 'Tranzakci??k';
        $strings['Cost'] = 'K??lts??g';
        $strings['PaymentGateways'] = 'Fizet?? ??tj??r??k';
        $strings['CreditHistory'] = 'Egys??g t??rt??net';
        $strings['TransactionHistory'] = 'Tranzakci??s t??rt??net';
        $strings['Date'] = 'D??tum';
        $strings['Note'] = 'Megjegyz??s';
        $strings['CreditsBefore'] = 'Egys??gek megel??z??en';
        $strings['CreditsAfter'] = 'Egys??gek ut??na';
        $strings['TransactionFee'] = 'Tranzakci??s d??j';
        $strings['InvoiceNumber'] = 'Sz??mla sorsz??ma';
        $strings['TransactionId'] = 'Tranzakci?? azonos??t??ja';
        $strings['Gateway'] = '??tj??r??';
        $strings['GatewayTransactionDate'] = '??tj??r?? tranzakci??s d??tuma';
        $strings['Refund'] = 'Visszat??r??t??s';
        $strings['IssueRefund'] = 'J??v????r??s ind??t??sa';
        $strings['RefundIssued'] = 'J??v????r??s sikeresen kiutalva';
        $strings['RefundAmount'] = 'J??v????r??s ??sszege';
        $strings['AmountRefunded'] = 'J??v????rva';
        $strings['FullyRefunded'] = 'Teljesen j??v????rva';
        $strings['YourCredits'] = 'Az ??n rendelkez??sre ??ll?? egys??gei';
        $strings['PayWithCard'] = 'Fizet??s k??rty??val';
        $strings['or'] = 'vagy';
        $strings['CreditsRequired'] = 'Egys??g sz??ks??ges';
        $strings['AddToGoogleCalendar'] = 'Hozz??ad??s a Google-hoz';
        $strings['Image'] = 'K??p';
        $strings['ChooseOrDropFile'] = 'V??lasszon egy f??jlt, vagy h??zza ide';
        $strings['SlackBookResource'] = 'Foglaljon %s most';
        $strings['SlackBookNow'] = 'Foglal??s most';
        $strings['SlackNotFound'] = 'Nem tal??lhat?? elem ezzel a n??vvel. Foglal??s most egy ??j foglal??st ind??t.';
        $strings['AutomaticallyAddToGroup'] = 'Automatikusan adja hozz?? az ??j felhaszn??l??kat ehhez a csoporthoz';
        $strings['GroupAutomaticallyAdd'] = 'Automatikus hozz??ad??s';
        $strings['TermsOfService'] = 'Felhaszn??l??si felt??telek';
        $strings['EnterTermsManually'] = 'Felt??telek manu??lis hozz??ad??sa';
        $strings['LinkToTerms'] = 'Link a felt??telekhez';
        $strings['UploadTerms'] = 'Felt??telek felt??lt??se';
        $strings['RequireTermsOfServiceAcknowledgement'] = 'Tegye k??telez??v?? a felhaszn??l??si felt??telek elfogad??s??t';
        $strings['UponReservation'] = 'Foglal??skor';
        $strings['UponRegistration'] = 'Regisztr??l??skor';
        $strings['ViewTerms'] = 'View Felhaszn??l??si felt??telek';
        $strings['IAccept'] = 'Elfogadom';
        $strings['TheTermsOfService'] = 'a felhaszn??l??si felt??teleket';
        $strings['DisplayPage'] = 'Oldal megtekint??se';
        $strings['AvailableAllYear'] = 'Eg??sz ??vben';
        $strings['Availability'] = 'El??rhet??';
        $strings['AvailableBetween'] = 'El??rhet?? az al??bbi id??pontok k??z??tt';
        $strings['ConcurrentYes'] = 'Az elemet egyn??l t??bb szem??ly is foglalhatja';
        $strings['ConcurrentNo'] = 'Az elem nem foglalhat?? egyn??l t??bb szem??lyn??l';
        $strings['ScheduleAvailabilityEarly'] = ' Ez az elem jelenleg nem el??rhet??. El??rhet??';
        $strings['ScheduleAvailabilityLate'] = 'Ez a beoszt??s t??bb?? nem el??rhet??. El??rhet??';
        $strings['ResourceImages'] = 'Elemhez tartoz?? k??pek';
        $strings['FullAccess'] = 'Teljes el??rhet??s??g';
        $strings['ViewOnly'] = 'Megtekint??s csak';
        $strings['Purge'] = 'Megsemmis??t??s';
        $strings['UsersWillBeDeleted'] = 'felhaszn??l??k t??rl??sre ker??lnek';
        $strings['BlackoutsWillBeDeleted'] = '??zemsz??net id??pontjai t??r??lve lesznek';
        $strings['ReservationsWillBePurged'] = 'foglal??sok t??rl??sre ker??lnek';
        $strings['ReservationsWillBeDeleted'] = 'foglal??sok t??rl??sre ker??lnek';
        $strings['PermanentlyDeleteUsers'] = 'V??glegesen t??r??lje a felhaszn??l??kat akik nem jelentkeztek be az al??bbi ideje';
        $strings['DeleteBlackoutsBefore'] = '??zemsz??netek t??rl??se miel??tt';
        $strings['DeletedReservations'] = 'T??r??lt foglal??sok';
        $strings['DeleteReservationsBefore'] = 'Foglal??sok t??rl??se miel??tt';
        $strings['SwitchToACustomLayout'] = 'Egy egyedi elrendez??sre v??lt??s';
        $strings['SwitchToAStandardLayout'] = 'Alap elrendez??sre v??lt??s';
        $strings['ThisScheduleUsesACustomLayout'] = 'Ez a beoszt??s egyedi elrendez??st haszn??l';
        $strings['ThisScheduleUsesAStandardLayout'] = 'Ez a beiszt??s alap elrendez??st haszn??l';
        $strings['SwitchLayoutWarning'] = 'Biztos benne, hogy lecser??li az elrendez??s fajt??j??t? Ezzel elt??vol??t??sra ker??l minden rekesz.';
        $strings['DeleteThisTimeSlot'] = 'T??rli ezt az id?? rekeszt?';
        $strings['Refresh'] = 'Friss??t';
        $strings['ViewReservation'] = 'Foglal??s megtekint??se';
        $strings['PublicId'] = 'Nyilv??nos azonos??t??';
        $strings['Public'] = 'Nyilv??nos';
        $strings['AtomFeedTitle'] = '%s foglal??sok';
        $strings['DefaultStyle'] = 'Alap??rtelmezett st??lus';
        $strings['Standard'] = 'Alap';
        $strings['Wide'] = 'Sz??les';
        $strings['Tall'] = 'Magas';
        $strings['EmailTemplate'] = 'E-mail sablonja';
        $strings['SelectEmailTemplate'] = 'E-mail sablon kiv??laszt??sa';
        $strings['ReloadOriginalContents'] = 'Eredeti tartalom ??jrat??lt??se';
        $strings['UpdateEmailTemplateSuccess'] = 'Friss??tett e-mai sablon';
        $strings['UpdateEmailTemplateFailure'] = 'E-mail sablon nem friss??thet??. Ellen??r??zze, hogy a mappa ??rhat??-e.';
        $strings['BulkResourceDelete'] = 'T??meges elem t??rl??s';
        $strings['NewVersion'] = '??j verzi??!';
        $strings['WhatsNew'] = 'Mi v??ltozott?';
        $strings['OnlyViewedCalendar'] = 'Ez a beoszt??s csak napt??r n??zetben megtekinhet??';
        $strings['Grid'] = 'R??cs';
        $strings['List'] = 'Lista';
        $strings['NoReservationsFound'] = 'Fogal??s nem tal??lhat??';
        $strings['EmailReservation'] = 'E-mail foglal??sok';
        $strings['AdHocMeeting'] = 'Ad hoc Tal??lkoz??';
        $strings['NextReservation'] = 'K??vetkez?? foglal??s';
        $strings['MissedCheckin'] = 'Elszalasztott bejelentkez??s';
        $strings['MissedCheckout'] = 'Elszalasztott kijelentkez??s';
        $strings['Utilization'] = 'Felhaszn??l??s';
        $strings['SpecificTime'] = 'Megadott id??pont';
        $strings['ReservationSeriesEndingPreference'] = 'When my recurring reservation series is ending';
        $strings['NotAttending'] = 'Nem vesz r??szt';
        $strings['ViewAvailability'] = 'EL??rhet??s??g megtekint??se';
        $strings['ReservationDetails'] = 'Foglal??s r??szletei';
        $strings['StartTime'] = 'Kezd??si id??pont';
        $strings['EndTime'] = 'Befejez??s id??pontja';
        // End Strings

		// Install
		$strings['InstallApplication'] = 'Booked Scheduler telep??t??se';
		$strings['IncorrectInstallPassword'] = 'Sajn??ljuk, a jelsz?? nem megfelel??.';
		$strings['SetInstallPassword'] = 'Meg kell adnia egy jelsz??t, miel??tt a telep??t?? lefut.';
		$strings['InstallPasswordInstructions'] = 'In %s k??rj??k adjon meg egy jelsz??t %s egy jelsz??t, amely v??letlen szer?? ??s nehezen kital??lhat??, majd t??rjen vissza erre az oldalra.<br/>You can use %s';
		$strings['NoUpgradeNeeded'] = 'Booked aktu??lis. Nincs sz??ks??g friss??t??sre.';
		$strings['ProvideInstallPassword'] = 'K??rj??k, adja meg a telep??t??i jelszav??t.';
		$strings['InstallPasswordLocation'] = 'Ez megtal??lhat?? %s in %s.';
		$strings['VerifyInstallSettings'] = 'Er??s??tse meg az alap??rtelmezett be??ll??t??sokat, miel??tt folytatjuk. K??s??bb itt megv??ltoztathatja %s.';
		$strings['DatabaseName'] = 'Adatb??zis neve';
		$strings['DatabaseUser'] = 'Adatb??zis felhaszn??l??ja';
		$strings['DatabaseHost'] = 'Adatb??zis kiszolg??l??ja';
		$strings['DatabaseCredentials'] = 'Adjon meg egy MySQL hozz??f??r??st egy olyan felhaszn??l??hoz, aki rendelkezik t??bl??zat l??trehoz??s??hoz sz??ks??ges jogokkal . Ha nem ismeri, l??pjen kapcsolatba adminisztr??tor??val. Sok esetben a root m??k??dhet.';
		$strings['MySQLUser'] = 'MySQL felhaszn??l??';
		$strings['InstallOptionsWarning'] = 'A k??vetkez?? opci??k val??sz??n??leg nem fognak m??k??dik egy kiszolg??lt k??rnyezetben. Ha kiszolg??l??i k??rnyezetben telep??t, haszn??ljon egy MySQL var??zsl??t, hogy befejezze ezeket a l??p??seket.';
		$strings['CreateDatabase'] = 'Adatb??zis l??trehoz??sa';
		$strings['CreateDatabaseUser'] = 'Adatb??zis felhaszn??l?? l??trehoz??sa';
		$strings['PopulateExampleData'] = 'Minta adatok import??l??sa. Admin fi??k l??trehoz??sa: admin/jelsz?? ??s felhaszn??l??i fi??k: felhaszn??l??/jelsz??';
		$strings['DataWipeWarning'] = 'Figyelem: ezzel t??l??dik minden l??tez?? adat';
		$strings['RunInstallation'] = 'Telep??t??s futtat??sa';
		$strings['UpgradeNotice'] = 'Az al??bbi verzi??r??l friss??t <b>%s</b> az al??bbira <b>%s</b>';
		$strings['RunUpgrade'] = 'Friss????s futtat??sa';
		$strings['Executing'] = 'V??grehajt??s';
		$strings['StatementFailed'] = 'Sikertelen. R??szletek:';
		$strings['SQLStatement'] = 'SQL nyilatkozat:';
		$strings['ErrorCode'] = 'Hibak??d:';
		$strings['ErrorText'] = 'Hiba sz??vege:';
		$strings['InstallationSuccess'] = 'A telep??t??s sikeresen v??grehajtva!';
		$strings['RegisterAdminUser'] = 'Regiszt??lja adminisztr??tor felhaszn??l??j??t. Erre akkor van sz??ks??g, ha nem import??l minta adatokat. Ensure that $conf[\'settings\'][\'allow.self.registration\'] = \'true\' in your %s file.';
		$strings['LoginWithSampleAccounts'] = 'Ha import??lta a mintaadatokat, bejelentkezhet admin/jelsz?? haszn??lat??val vagy felhaszn??l??/jelsz?? haszn??lat??val ??ltal??nos felhaszn??l??hoz.';
		$strings['InstalledVersion'] = 'A k??vetkez?? verzi??val haszn??lja a Booked Schedulert %s ';
		$strings['InstallUpgradeConfig'] = 'Aj??nlott a konfigur??ci??s f??jl friss??t??se';
		$strings['InstallationFailure'] = 'Probl??m??k voltak a telep??t??ssel.  Jav??tsa ??ket majd pr??b??lja ??jra a telep??t??st.';
		$strings['ConfigureApplication'] = 'Booked Scheduler be??ll??t??sa';
		$strings['ConfigUpdateSuccess'] = 'A konfigur??ci??s f??jl m??r aktu??lis!';
		$strings['ConfigUpdateFailure'] = 'Nem tudjuk automatikusan friss??teni a konfigur??ci??s f??jlt. K??rj??k, ??rja fel??l a config.php tartalm??t a k??vetkez??ekkel:';
		$strings['ScriptUrlWarning'] = 'Az ??n <em>script.url</em> val??sz??n??leg nem helyes. Jelenleg <strong>%s</strong>, ??gy gondoljuk <strong>%s</strong>';
		// End Install

		// Errors
		$strings['LoginError'] = 'Nem tal??ljuk a felhaszn??l??nev??t vagy jelszav??t';
		$strings['ReservationFailed'] = 'Foglal??sa nem hozhat?? l??tre';
		$strings['MinNoticeError'] = 'Ez a foglal??s el??zetes jelenkez??st ig??nyel. A legkor??bbi d??tum ??s id??, amig foglalhat?? %s.';
		$strings['MinNoticeErrorUpdate'] = 'Ez a foglal??s el??zetes jelenkez??st ig??nyel. Fogal??sok %s el??tt nem v??ltoztathat??k meg.';
		$strings['MinNoticeErrorDelete'] = 'Ezen foglal??s t??rl??se el??zetes ??rtes??t??st ig??nyel. Foglal??sok %s el??tt nem t??r??lhet??k.';
		$strings['MaxNoticeError'] = 'This reservation cannot be made this far in the future. A legk??s??bbi d??tum ??s id??pont, ami foglalhat?? %s.';
		$strings['MinDurationError'] = 'A foglal??s id??tartama legal??bb %s.';
		$strings['MaxDurationError'] = 'A foglal??s nem tarthat tov??bb, mint %s.';
		$strings['ConflictingAccessoryDates'] = 'Nincs elegend?? mennyis??g az al??bbi kieg??sz??t??kb??l:';
		$strings['NoResourcePermission'] = 'Nincs megfele?? joga hozz??f??rni egy vagy t??bb elemhez.';
		$strings['ConflictingReservationDates'] = '??tk??z?? fogal??sok vannak az al??bbi d??tumokon:';
		$strings['StartDateBeforeEndDateRule'] = 'A kezd??s d??tuma ??s id??pontja a befejez??s d??tum??nak ??s id??pontj??nak el??tt kell, hogy legyen.';
		$strings['StartIsInPast'] = 'A kezd??s d??tuma ??s id??pontja nem lehet a m??ltban.';
		$strings['EmailDisabled'] = 'Az admin letiltotta az e-mail ??rtes??t??ket.';
		$strings['ValidLayoutRequired'] = 'A rekeszeket eg??sz napra be kell osztani.';
		$strings['CustomAttributeErrors'] = 'Probl??m??k ad??dtak az ??n ??ltal hozz??adot jellemz??kkel:';
		$strings['CustomAttributeRequired'] = '%s egy k??telez?? mez??.';
		$strings['CustomAttributeInvalid'] = 'A megadott ??rt??k %s helytelen.';
		$strings['AttachmentLoadingError'] = 'Sajn??ljuk, probl??ma ad??dott a k??rt f??jl bet??lt??s??vel.';
		$strings['InvalidAttachmentExtension'] = 'Csak az al??bbi tipus?? f??jlok felt??lthet??ek: %s';
		$strings['InvalidStartSlot'] = 'Az ig??nyelt kezd??si d??tum ??s id?? nem ??rv??nyes.';
		$strings['InvalidEndSlot'] = 'Az ig??nyelt befejez??si d??tum ??s id?? nem ??rv??nyes.';
		$strings['MaxParticipantsError'] = '%s csak al??bbi mennyis??g?? %s r??sztvev??t t??mogat.';
		$strings['ReservationCriticalError'] = 'Kritikus hiba t??rt??nt a foglal??s r??gz??t??sekor. Amennyiben ??jra el??fordul, l??pjen kapcsolatba adminisztr??tor??val.';
		$strings['InvalidStartReminderTime'] = 'A kezd?? id??pont eml??keztet??je nem ??rv??nyes.';
		$strings['InvalidEndReminderTime'] = 'A befejez?? id??pont eml??keztet??je nem ??rv??nyes.';
		$strings['QuotaExceeded'] = 'A kv??ta limit meghaladva.';
		$strings['MultiDayRule'] = '%s nem fogad foglal??st az al??bbi napokon.';
		$strings['InvalidReservationData'] = 'Probl??ma ad??dott az ig??nyelt foglal??s??val.';
		$strings['PasswordError'] = 'A jelsz??nak tartalmaznia kell %s bet??t ??s %s sz??mot.';
		$strings['PasswordErrorRequirements'] = 'A jelsz??nak tartalmaznia kell %s nagy ??s kisbet??t valamint %s sz??mot.';
		$strings['NoReservationAccess'] = 'Nioncs jogosults??ga megv??ltoztatni ezt a foglal??st.';
		$strings['PasswordControlledExternallyError'] = 'Jelszav??t egy k??ls?? rendszer kezeli, ??gy innen nem friss??thet??.';
		$strings['AccessoryResourceRequiredErrorMessage'] = 'A kieg??sz??t?? %s csak az al??bbi elemekkel egy??tt fogalhat?? %s';
		$strings['AccessoryMinQuantityErrorMessage'] = 'Legal??bb %s db-ot foglalnia kell az al??bbi kieg??sz??t??b??l %s';
		$strings['AccessoryMaxQuantityErrorMessage'] = 'Nem foglalhat?? t??bb, mint %s az al??bbi kieg??sz??t??b??l %s';
		$strings['AccessoryResourceAssociationErrorMessage'] = 'A kieg??sz??t?? \'%s\' nem foglalhat?? az ig??nyelt elemmel';
		$strings['NoResources'] = 'Nem adott hozz?? egy elemet sem.';
		$strings['ParticipationNotAllowed'] = 'Nincs jogosults??ga csatlakozni ehhez a foglal??shoz.';
		$strings['ReservationCannotBeCheckedOutFrom'] = 'Ez a foglal??s nem jelentkeztethet?? be.';
		$strings['ReservationCannotBeCheckedInTo'] = 'Ez a foglal??s nem jelentkeztethet?? ki.';
		$strings['InvalidEmailDomain'] = 'Ez az e-mail nem enged??lyezet domainr??l ??rkezett';
		$strings['TermsOfServiceError'] = 'El kell fogadnia a Felhaszn??l??si Felt??teleket';
		$strings['UserNotFound'] = 'Ez a felhaszn??l?? nem tal??lhat??';
		$strings['ScheduleAvailabilityError'] = 'Ez a beoszt??s el??rhet?? %s ??s %s k??z??tt';
		$strings['ReservationNotFoundError'] = 'Foglal??s nem tal??lhat??';
		$strings['ReservationNotAvailable'] = 'Fogal??s nem el??rhet??';
		$strings['TitleRequiredRule'] = 'Foglal??s megnevez??se sz??ks??ges';
		$strings['DescriptionRequiredRule'] = 'Foglal??s le??r??sa sz??ks??ges';
		$strings['WhatCanThisGroupManage'] = 'Mit kezelhet ez a csoport?';
		$strings['ReservationParticipationActivityPreference'] = 'Ha valaki csatlakozik, vagy elhagyja a fogal??saimat';
		$strings['RegisteredAccountRequired'] = 'Csak regisztr??lt felhaszn??l??k foglalhatnak';
		// End Errors

		// Page Titles
		$strings['CreateReservation'] = 'Fogal??s l??trehoz??sa';
		$strings['EditReservation'] = 'Foglal??s friss????se';
		$strings['LogIn'] = 'Bejelentkez??s';
		$strings['ManageReservations'] = 'Foglal??sok';
		$strings['AwaitingActivation'] = 'V??rakoz??s az aktiv??l??sra';
		$strings['PendingApproval'] = 'F??gg?? enged??lyez??s';
		$strings['ManageSchedules'] = 'Beoszt??sok';
		$strings['ManageResources'] = 'Elemek';
		$strings['ManageAccessories'] = 'Kieg??sz??t??k';
		$strings['ManageUsers'] = 'Felhaszn??l??k';
		$strings['ManageGroups'] = 'Csoportok';
		$strings['ManageQuotas'] = 'Kv??t??k';
		$strings['ManageBlackouts'] = '??zemsz??netek';
		$strings['MyDashboard'] = 'Az ??n ir??ny??t??pultom';
		$strings['ServerSettings'] = 'Kiszolg??l?? be??ll??t??sai';
		$strings['Dashboard'] = 'Ir??ny??t??pult';
		$strings['Help'] = 'Seg??ts??g';
		$strings['Administration'] = 'Adminisztr??ci??k';
		$strings['About'] = 'R??lunk';
		$strings['Bookings'] = 'Foglal??sok';
		$strings['Schedule'] = 'Beoszt??s';
		$strings['Account'] = 'Fi??k';
		$strings['EditProfile'] = 'Profil szerkeszt??se';
		$strings['FindAnOpening'] = 'Nyit??s keres??se';
		$strings['OpenInvitations'] = 'Megh??v??sok megnyit??sa';
		$strings['ResourceCalendar'] = 'Elemek napt??ra';
		$strings['Reservation'] = '??j foglal??s';
		$strings['Install'] = 'Telep??t??s';
		$strings['ChangePassword'] = 'Jelsz?? megv??ltoztat??sa';
		$strings['MyAccount'] = 'Fi??kom';
		$strings['Profile'] = 'Profil';
		$strings['ApplicationManagement'] = 'Jelentkez??s kezel??se';
		$strings['ForgotPassword'] = 'Jelsz?? elfelejt??se';
		$strings['NotificationPreferences'] = '??rtes??t??sek kezel??se';
		$strings['ManageAnnouncements'] = 'Bejelent??sek';
		$strings['Responsibilities'] = 'Felel??ss??gek';
		$strings['GroupReservations'] = 'Csoport foglal??sok';
		$strings['ResourceReservations'] = 'Elem foglal??sok';
		$strings['Customization'] = 'Testreszab??s';
		$strings['Attributes'] = 'Jellemz??k';
		$strings['AccountActivation'] = 'Fi??k aktiv??l??s';
		$strings['ScheduleReservations'] = 'Beoszt??s fogal??sok';
		$strings['Reports'] = 'Jelent??sek';
		$strings['GenerateReport'] = '??j jelent??s k??sz??t??se';
		$strings['MySavedReports'] = 'Mentett jelent??seim';
		$strings['CommonReports'] = 'K??z??s jelent??sek';
		$strings['ViewDay'] = 'Nap megtekint??se';
		$strings['Group'] = 'Csoport';
		$strings['ManageConfiguration'] = 'Jelentkez??s be??ll??t??sa';
		$strings['LookAndFeel'] = 'Kin??zet ??s ??rzet';
		$strings['ManageResourceGroups'] = 'Elem csoportok';
		$strings['ManageResourceTypes'] = 'Elem fajt??i';
		$strings['ManageResourceStatus'] = 'Elem ??llapotok';
		$strings['ReservationColors'] = 'Foglal??sok sz??nei';
		$strings['SearchReservations'] = 'Foglal??s keres??se';
		$strings['ManagePayments'] = 'Kifizet??sek';
		$strings['ViewCalendar'] = 'Napt??r megtekint??se';
		$strings['DataCleanup'] = 'Adat t??rl??s';
		$strings['ManageEmailTemplates'] = 'E-mail sablonok kezel??se';
		// End Page Titles

		// Day representations
		$strings['DaySundaySingle'] = 'Va';
		$strings['DayMondaySingle'] = 'H??';
		$strings['DayTuesdaySingle'] = 'Ke';
		$strings['DayWednesdaySingle'] = 'Sze';
		$strings['DayThursdaySingle'] = 'Cs';
		$strings['DayFridaySingle'] = 'P??';
		$strings['DaySaturdaySingle'] = 'Szo';

		$strings['DaySundayAbbr'] = 'Vas';
		$strings['DayMondayAbbr'] = 'H??t';
		$strings['DayTuesdayAbbr'] = 'Kedd';
		$strings['DayWednesdayAbbr'] = 'Sze';
		$strings['DayThursdayAbbr'] = 'Cs??';
		$strings['DayFridayAbbr'] = 'P??n';
		$strings['DaySaturdayAbbr'] = 'Szo';
		// End Day representations

		// Email Subjects
		$strings['ReservationApprovedSubject'] = 'Foglal??sa elfogad??sra ker??lt';
		$strings['ReservationCreatedSubject'] = 'Fogal??sa l??trehozva';
		$strings['ReservationUpdatedSubject'] = 'Foglal??sa friss??tve';
		$strings['ReservationDeletedSubject'] = 'Fogal??sa elt??vol??tva';
		$strings['ReservationCreatedAdminSubject'] = '??rtes??t??s: Egy foglal??s l??trehozva';
		$strings['ReservationUpdatedAdminSubject'] = '??rtes????s: Egy foglal??s friss??t??sre ker??lt';
		$strings['ReservationDeleteAdminSubject'] = '??rtes??t??s: Egy foglal??s elt??vol??tva';
		$strings['ReservationApprovalAdminSubject'] = '??rtes??t??s: Foglal??s az enged??ly??t ig??nyli';
		$strings['ParticipantAddedSubject'] = 'Foglal??s r??sztv??tel ??rtes??t??s';
		$strings['ParticipantDeletedSubject'] = 'Foglal??s elt??vol??tva';
		$strings['InviteeAddedSubject'] = 'Foglal??s megh??v??s';
		$strings['ResetPasswordRequest'] = 'Jelsz?? vissza??ll??t??s ig??ny';
		$strings['ActivateYourAccount'] = 'K??rj??k, aktiv??lja fi??kj??t';
		$strings['ReportSubject'] = 'Ig??nyel jelent??se (%s)';
		$strings['ReservationStartingSoonSubject'] = 'Foglal??sa %s hamarosan kezd??dik';
		$strings['ReservationEndingSoonSubject'] = 'Foglal??sa %s hamarosan befejez??dik';
		$strings['UserAdded'] = 'Egy felhaszn??l?? hozz??ad??sra ker??lt';
		$strings['UserDeleted'] = 'Felhaszn??l??i fi??k %s t??rl??sre ker??lt %s ??ltal';
		$strings['GuestAccountCreatedSubject'] = '%s fi??kj??nak r??szletei';
		$strings['AccountCreatedSubject'] = 'Fi??kja %s r??szletei';
		$strings['InviteUserSubject'] = '%s megh??vta, hogy csatlakozzon ehhez: %s';

		$strings['ReservationApprovedSubjectWithResource'] = 'Foglal??sa elfogad??sra ker??lt ehhez: %s';
		$strings['ReservationCreatedSubjectWithResource'] = 'Foglal??sa ehhez: %s l??trehozva';
		$strings['ReservationUpdatedSubjectWithResource'] = 'Foglal??sa ehhez: %s friss??t??sre ker??lt';
		$strings['ReservationDeletedSubjectWithResource'] = 'Foglal??s elt??vol??tva %s';
		$strings['ReservationCreatedAdminSubjectWithResource'] = '??rtes??t??s: Reservation Created for %s';
		$strings['ReservationUpdatedAdminSubjectWithResource'] = '??rtes??t??s: Reservation Updated for %s';
		$strings['ReservationDeleteAdminSubjectWithResource'] = '??rtes??t??s: Reservation Removed for %s';
		$strings['ReservationApprovalAdminSubjectWithResource'] = '??rtes??t??s: Reservation for %s Requires Your Approval';
		$strings['ParticipantAddedSubjectWithResource'] = '%s hozz??adva a foglal??s??hoz %s';
		$strings['ParticipantDeletedSubjectWithResource'] = '%s elt??vol??totta foglal??s??t %s';
		$strings['InviteeAddedSubjectWithResource'] = '%s megh??vta foglal??s??ra %s';
		$strings['MissedCheckinEmailSubject'] = 'Elszalasztotta bejelentkez??s??t ehhez: %s';
		$strings['ReservationShareSubject'] = '%s megosztott egy foglal??st %s';
		$strings['ReservationSeriesEndingSubject'] = 'Foglal??s sorozata %s r??sz??re v??gz??dik %s -kor';
		$strings['ReservationParticipantAccept'] = '%s Elfogadta megh??v??s??t az al??bbi foglal??sra %s %s -kor';
		$strings['ReservationParticipantDecline'] = '%s elutas??totta megh??v??s??t %s %s -kor';
		$strings['ReservationParticipantJoin'] = '%s Csatlakozott foglal??s??ra for %s on %s';
		// End Email Subjects

		$this->Strings = $strings;

		return $this->Strings;
	}

	/**
	 * @return array
	 */
	protected function _LoadDays()
	{
		$days = array();

		/***
		 * DAY NAMES
		 * All of these arrays MUST start with Sunday as the first element
		 * and go through the seven day week, ending on Saturday
		 ***/
		// The full day name
		$days['full'] = array('Vas??rnap', 'H??tf??', 'Kedd', 'Szerda', 'Cs??t??rt??k', 'P??ntek', 'Szombat');
		// The three letter abbreviation
		$days['abbr'] = array('Vas', 'H??t', 'Kedd', 'Sze', 'Cs??', 'P??n', 'Szo');
		// The two letter abbreviation
		$days['two'] = array('Va', 'h??', 'Ke', 'Sze', 'Cs', 'P??', 'Va');
		// The one letter abbreviation
		$days['letter'] = array('V', 'H', 'K', 'Sze', 'Cs', 'P', 'Szo');

		$this->Days = $days;

		return $this->Days;
	}

	/**
	 * @return array
	 */
	protected function _LoadMonths()
	{
		$months = array();

		/***
		 * MONTH NAMES
		 * All of these arrays MUST start with January as the first element
		 * and go through the twelve months of the year, ending on December
		 ***/
		// The full month name
		$months['full'] = array('Janu??r', 'Febru??r', 'M??rcius', '??prilis', 'M??jus', 'J??nius', 'J??lius', 'Augusztus', 'Szeptember', 'Okt??ber', 'November', 'December');
		// The three letter month name
		$months['abbr'] = array('Jan', 'Feb', 'M??r', '??pr', 'M??j', 'J??n', 'J??l', 'Aug', 'Szep', 'Okt', 'Nov', 'Dec');

		$this->Months = $months;

		return $this->Months;
	}

	/**
	 * @return array
	 */
	protected function _LoadLetters()
	{
		$this->Letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

		return $this->Letters;
	}

	protected function _GetHtmlLangCode()
	{
		return 'hu';
	}
}