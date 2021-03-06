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

require_once('en_gb.php');

class cz extends en_us
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * @return array
	 */
	protected function _LoadDates()
	{
		$dates = array();

		$dates['general_date'] = 'j.n.Y';
		$dates['general_datetime'] = 'j.n.Y H:i:s';
		$dates['short_datetime'] = 'j.n.Y H:i';
		$dates['schedule_daily'] = 'l, j.n.Y';
		$dates['reservation_email'] = 'j.n.Y \v H:i';
		$dates['res_popup'] = 'j.n. H:i';
		$dates['res_popup_time'] = 'H:i';
		$dates['short_reservation_date'] = 'j.n.Y H:i';
		$dates['dashboard'] = 'j.n. H:i';
		$dates['period_time'] = 'H:i';
		$dates['timepicker'] = 'H:i';
		$dates['mobile_reservation_date'] = 'j.n. H:i';
		$dates['general_date_js'] = 'd.m.yy';
		$dates['general_time_js'] = 'h:mm tt';
		$dates['timepicker_js'] = 'H:i';
		$dates['momentjs_datetime'] = 'D.M.YY hh:mm';
		$dates['calendar_time'] = 'h:mmt';
		$dates['calendar_dates'] = 'j.n.';
		$dates['embedded_date'] = 'j.n.';
		$dates['embedded_time'] = 'H:i';
		$dates['embedded_datetime'] = 'j.n. H:i';
		$dates['report_date'] = '%d.%m.';

		$this->Dates = $dates;

		return $this->Dates;
	}

	/**
	 * @return array
	 */
	protected function _LoadStrings()
	{
		$strings = parent::_LoadStrings();

		$strings['FirstName'] = 'Jm??no';
		$strings['LastName'] = 'P????jmen??';
		$strings['Timezone'] = '??asov?? z??na';
		$strings['Edit'] = 'Upravit';
		$strings['Change'] = 'Zm??nit';
		$strings['Rename'] = 'P??ejmenovat';
		$strings['Remove'] = 'Odstranit';
		$strings['Delete'] = 'Smazat';
		$strings['Update'] = 'Ulo??it';
		$strings['Cancel'] = 'Zru??it';
		$strings['Add'] = 'P??idat';
		$strings['Name'] = 'N??zev';
		$strings['Yes'] = 'Ano';
		$strings['No'] = 'Ne';
		$strings['FirstNameRequired'] = 'Jm??no je povinn??.';
		$strings['LastNameRequired'] = 'P????jmen?? je povinn??.';
		$strings['PwMustMatch'] = 'Hesla se neshoduj??.';
		$strings['ValidEmailRequired'] = 'E-mailov?? adresa je povinn??.';
		$strings['UniqueEmailRequired'] = 'Tato e-mailov?? adresa je ji?? v syst??mu zaregistrov??na.';
		$strings['UniqueUsernameRequired'] = 'Toto u??ivatelsk?? jm??no je ji?? v syst??mu zaregistrovan??.';
		$strings['UserNameRequired'] = 'U??ivatelsk?? jm??no je povinn??.';
		$strings['CaptchaMustMatch'] = 'Opi??te bezpe??nostn?? k??d z obr??zku.';
		$strings['Today'] = 'Dnes';
		$strings['Week'] = 'T??den';
		$strings['Month'] = 'M??s??c';
		$strings['BackToCalendar'] = 'Zp??t do kalend????e';
		$strings['BeginDate'] = 'Za????tek';
		$strings['EndDate'] = 'Konec';
		$strings['Username'] = 'U??ivatelsk?? jm??no';
		$strings['Password'] = 'Heslo';
		$strings['PasswordConfirmation'] = 'Potvrdit heslo';
		$strings['DefaultPage'] = 'V??choz?? hlavn?? str??nka';
		$strings['MyCalendar'] = 'M??j kalend????';
		$strings['ScheduleCalendar'] = 'Pl??novac?? kalend????';
		$strings['Registration'] = 'Registrace';
		$strings['NoAnnouncements'] = 'Nen?? napl??nov??no ????dn?? do??asn?? uzav??en?? provozu.';
		$strings['Announcements'] = 'Omezen?? provozu';
		$strings['NoUpcomingReservations'] = 'Nyn?? nem??te ????dn?? napl??novan?? rezervace.';
		$strings['UpcomingReservations'] = 'Va??e napl??novan?? rezervace';
		$strings['AllNoUpcomingReservations'] = '????dn?? napl??novan?? rezervace.';
		$strings['AllUpcomingReservations'] = 'V??echny napl??novan?? rezervace.';
		$strings['ShowHide'] = 'Zobrazit/skr??t';
		$strings['Error'] = 'Chyba';
		$strings['ReturnToPreviousPage'] = 'Vr??tit se zp??t';
		$strings['UnknownError'] = 'Nezn??m?? chyba';
		$strings['InsufficientPermissionsError'] = 'Nem??te opr??vnen??';
		$strings['MissingReservationResourceError'] = 'Nebyl vybr??n prost??edek';
		$strings['MissingReservationScheduleError'] = 'Nebyl za??krtnut ????dn?? den';
		$strings['DoesNotRepeat'] = 'Neopakovat';
		$strings['Daily'] = 'Denn??';
		$strings['Weekly'] = 'T??denn??';
		$strings['Monthly'] = 'M??s????n??';
		$strings['Yearly'] = 'Ro??n??';
		$strings['RepeatPrompt'] = 'Opakov??n??';
		$strings['hours'] = 'hodina';
		$strings['days'] = '. den';
		$strings['weeks'] = '. t??den';
		$strings['months'] = '. m??s??c';
		$strings['years'] = '. rok';
		$strings['day'] = 'den';
		$strings['week'] = 't??den';
		$strings['month'] = 'm??s??c';
		$strings['year'] = 'rok';
		$strings['repeatDayOfMonth'] = 'dny m??s??ce';
		$strings['repeatDayOfWeek'] = 'dny t??dne';
		$strings['RepeatUntilPrompt'] = 'konec opakovan?? rezervace';
		$strings['RepeatEveryPrompt'] = 'ka??d??';
		$strings['RepeatDaysPrompt'] = 'Opakovat v dny';
		$strings['CreateReservationHeading'] = 'Vytv????en?? rezervace';
		$strings['EditReservationHeading'] = '??prava rezervace: %s';
		$strings['ViewReservationHeading'] = 'Zobrazit rezervaci: %s';
		$strings['ReservationErrors'] = 'Zm??nit rezervaci';
		$strings['Create'] = 'Vytvo??it';
		$strings['ThisInstance'] = 'Pouze v tomto p????pad??';
		$strings['AllInstances'] = 'Po celou dobu';
		$strings['FutureInstances'] = 'V??echny v budoucnu';
		$strings['Print'] = 'Tisknout';
		$strings['ShowHideNavigation'] = 'zobrazit/skr??t navigaci';
		$strings['ReferenceNumber'] = 'Referen??n?? ????slo';
		$strings['Tomorrow'] = 'Z??tra';
		$strings['LaterThisWeek'] = 'Pozd??ji v tento t??den';
		$strings['NextWeek'] = 'N??sleduj??c?? t??den';
		$strings['SignOut'] = 'Odhl??sit se';
		$strings['LayoutDescription'] = 'Za????tek %s, zobrazeno %s dn??';
		$strings['AllResources'] = 'V??echny p????stoje';
		$strings['TakeOffline'] = 'Vypnout';
		$strings['BringOnline'] = 'Zapnout';
		$strings['AddImage'] = 'P??idat obr??zek';
		$strings['NoImage'] = '????dn?? obr??zek';
		$strings['Move'] = 'P??esunout';
		$strings['AppearsOn'] = 'Objev?? se na %s';
		$strings['Location'] = 'Um??st??n??';
		$strings['NoLocationLabel'] = '(um??st??n?? nenastaveno)';
		$strings['Contact'] = 'Kontakt';
		$strings['NoContactLabel'] = '(kontakt nenastaven)';
		$strings['Description'] = 'Popis';
		$strings['NoDescriptionLabel'] = '(bez popisku)';
		$strings['Notes'] = 'Pozn??mky';
		$strings['NoNotesLabel'] = '(bez pozn??mek)';
		$strings['NoTitleLabel'] = '(bez n??zvu)';
		$strings['UsageConfiguration'] = 'Pou????t konfiguraci';
		$strings['ChangeConfiguration'] = 'Zm??nit konfiguraci';
		$strings['ResourceMinLength'] = 'Rezervace mus?? b??t del???? ne?? %s';
		$strings['ResourceMinLengthNone'] = 'Neexistuje ????dn?? minim??ln?? doba rezervace';
		$strings['ResourceMaxLength'] = 'Rezervace mus?? b??t krat???? ne?? %s';
		$strings['ResourceMaxLengthNone'] = 'Neexistuje ????dn?? maxim??ln?? doba rezervace';
		$strings['ResourceRequiresApproval'] = 'Rezervace mus?? b??t schv??leny';
		$strings['ResourceRequiresApprovalNone'] = 'Rezervace nen?? t??eba potvrzovat';
		$strings['ResourcePermissionAutoGranted'] = 'Povolen?? je automaticky z??sk??no';
		$strings['ResourcePermissionNotAutoGranted'] = 'Povolen?? nen?? automaticky z??sk??no';
		$strings['ResourceMinNotice'] = 'Rezervace mus?? b??t uskute??n??na nejm??n?? %s p??ed za????tkem';
		$strings['ResourceMinNoticeNone'] = 'Rezervace lze prov??st a?? do sou??asn?? doby';
		$strings['ResourceMinNoticeUpdate'] = 'Rezervace m????e b??t upravena nejpozd??ji %s p??ed za????tkem';
		$strings['ResourceMinNoticeNoneUpdate'] = 'Rezervace m????e b??t upravena kdykoliv p??ed za????tekem';
		$strings['ResourceMinNoticeDelete'] = 'Rezervace m????e b??t smaz??na nejpozd??ji %s p??ed za????tkem';
		$strings['ResourceMinNoticeNoneDelete'] = 'Rezervace m????e b??t smaz??na kdykoliv p??ed za????tekem';
		$strings['ResourceMaxNotice'] = 'Rezervace nesm?? kon??it v??ce ne?? %s p??ed sou??asnost??';
		$strings['ResourceMaxNoticeNone'] = 'Rezervace m????e skon??it kdykoliv v budoucnu';
		$strings['ResourceBufferTime'] = 'Mezi rezervacemi mus?? b??t pauza %s.';
		$strings['ResourceBufferTimeNone'] = 'Mezi rezervacemi nen?? pauza.';
		$strings['ResourceAllowMultiDay'] = 'Rezervace m????e b??t vytvo??ena na n??kolik dn??';
		$strings['ResourceNotAllowMultiDay'] = 'Rezervace nelze prov??d??t v r??mci n??kolika dn??';
		$strings['ResourceCapacity'] = 'Tento p????stoj m?? omezenou kapacitu na %s osob';
		$strings['ResourceCapacityNone'] = 'Tento prost??edek m?? neomezenou kapacitu';
		$strings['AddNewResource'] = 'P??idat nov?? prost??edek';
		$strings['AddNewUser'] = 'P??idat nov??ho u??ivatele';
		$strings['AddUser'] = 'P??idat u??ivatele';
		$strings['Schedule'] = 'Pl??nov??n??';
		$strings['AddResource'] = 'P??idat prost??edek';
		$strings['Capacity'] = 'Kapacita';
		$strings['Access'] = 'P????stup';
		$strings['Duration'] = 'Trv??n??';
		$strings['Active'] = 'Aktivn??';
		$strings['Inactive'] = 'Vypnuto';
		$strings['ResetPassword'] = 'Obnovit heslo';
		$strings['LastLogin'] = 'Posledn?? p??ihl????en??';
		$strings['Search'] = 'Hled??n??';
		$strings['ResourcePermissions'] = 'Opr??vn??n?? prost??edk??';
		$strings['Reservations'] = 'Rezervace';
		$strings['Groups'] = 'Skupiny';
		$strings['ResetPassword'] = 'Resetovat heslo';
		$strings['AllUsers'] = 'V??ichni u??ivatel??';
		$strings['AllGroups'] = 'V??echny skupiny';
		$strings['AllSchedules'] = 'V??echna pl??nov??n??';
		$strings['UsernameOrEmail'] = 'U??ivatelsk?? jm??no nebo e-mail';
		$strings['Members'] = '??lenov??';
		$strings['QuickSlotCreation'] = 'Vytvo??it m??sto ka??d??ch %s minut mezi %s a %s';
		$strings['ApplyUpdatesTo'] = 'prov??st update';
		$strings['CancelParticipation'] = 'Zru??en?? ????astn??k??';
		$strings['Attending'] = '????ast';
		$strings['QuotaConfiguration'] = 'pro %s pro %s u??ivatel??m v %s omezen?? po??tu %s %s na %s';
		$strings['reservations'] = 'rezervac??';
		$strings['reservation'] = 'rezervace';
		$strings['ChangeCalendar'] = 'Zm??nit kalend????';
		$strings['AddQuota'] = 'P??dat kv??tu';
		$strings['FindUser'] = 'Naj??t u??ivatele';
		$strings['Created'] = 'Vytvo??eno';
		$strings['LastModified'] = 'Posledn?? ??prava';
		$strings['GroupName'] = 'N??zev skupiny';
		$strings['GroupMembers'] = '??lenov?? skupiny';
		$strings['GroupRoles'] = 'Role skupiny';
		$strings['GroupAdmin'] = 'Administr??tor skupiny';
		$strings['Actions'] = 'Akce';
		$strings['CurrentPassword'] = 'Sou??asn?? heslo';
		$strings['NewPassword'] = 'Nov?? heslo';
		$strings['InvalidPassword'] = 'Bylo chybn?? zad??no sou??asn?? heslo.';
		$strings['PasswordChangedSuccessfully'] = 'Va??e nov?? heslo bylo ??sp????n?? nastaveno';
		$strings['SignedInAs'] = 'P??ihl????en jako';
		$strings['NotSignedIn'] = 'Nep??ihl????en??';
		$strings['ReservationTitle'] = 'N??zev rezervace';
		$strings['ReservationDescription'] = 'Voliteln?? popis';
		$strings['ResourceList'] = 'Rezervovan?? prost??edky';
		$strings['Accessories'] = 'P????slu??enstv??';
		$strings['ParticipantList'] = 'Seznam ????astn??k??';
		$strings['InvitationList'] = 'Pozv??n??';
		$strings['AccessoryName'] = 'N??zev p????slu??enstv??';
		$strings['QuantityAvailable'] = 'Dostupn?? mno??stv??';
		$strings['Resources'] = 'Prost??edky';
		$strings['Participants'] = '????astn??ci';
		$strings['User'] = 'U??ivatel';
		$strings['Resource'] = 'Prost??edek';
		$strings['Status'] = 'Stav';
		$strings['Approve'] = 'Schv??lit';
		$strings['Page'] = 'Strana';
		$strings['Rows'] = '????dek';
		$strings['Unlimited'] = 'neomezeno';
		$strings['Email'] = 'E-mail';
		$strings['EmailAddress'] = 'E-mailov?? adresa';
		$strings['Phone'] = 'Telefon';
		$strings['Organization'] = 'Spole??nost';
		$strings['Position'] = 'Pozice';
		$strings['Language'] = 'Jazyk';
		$strings['Permissions'] = 'Opr??vn??n??';
		$strings['Reset'] = 'Reset';
		$strings['FindGroup'] = 'Naj??t skupinu';
		$strings['Manage'] = 'Spravovat';
		$strings['None'] = '????dn??';
		$strings['AddToOutlook'] = 'P??idat do Outlooku';
		$strings['AddToGoogleCalendar'] = 'P??idat do Google';
		$strings['DuplicateReservation'] = 'Duplikovat';
		$strings['Done'] = 'Hotovo';
		$strings['RememberMe'] = 'P??ihl??sit se trvale';
		$strings['FirstTimeUser?'] = 'Nem??te ????et?';
		$strings['CreateAnAccount'] = 'Registrovat se';
		$strings['ViewSchedule'] = 'Zobrazit pl??nov??n??';
		$strings['ForgotMyPassword'] = 'Zapomenut?? heslo';
		$strings['YouWillBeEmailedANewPassword'] = 'Na zadan?? e-mail V??m bude zasl??no nov?? vygenerovan?? heslo.';
		$strings['Close'] = 'Zav????t';
		$strings['ExportToCSV'] = 'Exportovat do souboru CSV';
		$strings['OK'] = 'Odeslat';
		$strings['Working'] = 'Na????t??m';
		$strings['Login'] = 'P??ihl????en??';
		$strings['AdditionalInformation'] = 'Dal???? informace.';
		$strings['AllFieldsAreRequired'] = 'V??echna pole jsou povinn??';
		$strings['Optional'] = 'Nepovinn??';
		$strings['YourProfileWasUpdated'] = 'V???? profil by aktualizov??n.';
		$strings['YourSettingsWereUpdated'] = 'Va??e nastaven?? bylo provedeno';
		$strings['Register'] = 'Registrovat';
		$strings['SecurityCode'] = 'Bezpe??nostn?? k??d';
		$strings['ReservationCreatedPreference'] = 'Kdy?? vytvo????m rezervaci, nebo kdy?? je rezervace m??mu ????tu vytvo??ena.';
		$strings['ReservationUpdatedPreference'] = 'Kdy?? zm??n??m rezervaci, nebo kdy?? je rezervace m??mu ????tu zm??n??na.';
		$strings['ReservationDeletedPreference'] = 'Kdy?? sma??u rezervaci, nebo kdy?? je rezervace m??mu ????tu smaz??na.';
		$strings['ReservationApprovalPreference'] = 'Kdy?? je m?? rezervace potvrzena';
		$strings['PreferenceSendEmail'] = 'Ozn??mit e-mailem';
		$strings['PreferenceNoEmail'] = 'Neoznamovat';
		$strings['ReservationCreated'] = 'Rezervace byla vytvo??ena.';
		$strings['ReservationUpdated'] = 'Rezervace byla upravena.';
		$strings['ReservationRemoved'] = 'Rezervace byla odstran??na.';
		$strings['ReservationRequiresApproval'] = 'Jedna nebo v??ce rezervac?? vy??aduj?? schv??len??. Do t?? doby budou ozna??eny jako nevy????zen??.';
		$strings['YourReferenceNumber'] = 'Referen??n?? ????slo: %s';
		$strings['UpdatingReservation'] = 'Obnoven?? rezervace';
		$strings['ChangeUser'] = 'Zm??nit u??ivatele';
		$strings['MoreResources'] = 'P??idat dal???? prost??edek';
		$strings['ReservationLength'] = 'D??lka rezervace';
		$strings['ParticipantList'] = 'Seznam ????astn??k??';
		$strings['AddParticipants'] = 'P??idat ????astn??ka';
		$strings['InviteOthers'] = 'Pozvat ostatn??';
		$strings['AddResources'] = 'P??idat prost??edky';
		$strings['AddAccessories'] = 'P??idat p????slu??enstv??';
		$strings['Accessory'] = 'P????slu??enstv??';
		$strings['QuantityRequested'] = 'Po??adovan?? mno??stv??';
		$strings['CreatingReservation'] = 'Vytv????en?? rezervace';
		$strings['UpdatingReservation'] = '??prava rezervace';
		$strings['DeleteWarning'] = 'Tato akce je trval?? a nelze ji vr??tit zp??t!';
		$strings['DeleteAccessoryWarning'] = 'P??i odstran??n?? tohoto p????slu??enstv?? jej odstran??te tak?? ze v??ech rezervac??.';
		$strings['AddAccessory'] = 'P??idat p????slu??enstv??';
		$strings['AddBlackout'] = 'P??idat dobu u??av??en??';
		$strings['AllResourcesOn'] = 'v??echny prost??edky na';
		$strings['Reason'] = 'Od??vodn??n??';
		$strings['BlackoutShowMe'] = 'Zobrazit rezervace, kter?? jsou v konfliktu s jin??mi';
		$strings['BlackoutDeleteConflicts'] = 'Odstranit rezervace, kter?? jsou v konfliktu s jin??mi';
		$strings['Filter'] = 'Filtr';
		$strings['Between'] = 'Mezi';
		$strings['CreatedBy'] = 'Vytvo??il';
		$strings['BlackoutCreated'] = 'Doba uzav??en?? byla nastavena.';
		$strings['BlackoutNotCreated'] = 'Doba uzav??en?? nebyla nastavena';
		$strings['BlackoutUpdated'] = 'Doba uzav??en?? byla upravena.';
		$strings['BlackoutNotUpdated'] = 'Doba uzav??en?? nem????e b??t upravena.';
		$strings['BlackoutConflicts'] = 'Jsou zde ??asy zav??en??ho provozu v konfliktu s jin??mi';
		$strings['ReservationConflicts'] = 'Jsou zde rezervovan?? ??ase v konfliktu s jin??mi';
		$strings['UsersInGroup'] = 'U??ivatel?? v t??to skupin??';
		$strings['Browse'] = 'Prohledat';
		$strings['DeleteGroupWarning'] = 'Odstran??n??m t??to skupiny budou odstran??ny v??echny souvisej??c?? opr??vn??n?? k prost??edk??m. U??ivatel?? v t??to skupin?? mohou p??ij??t o p????stup k prost??edk??m.';
		$strings['WhatRolesApplyToThisGroup'] = 'Jak?? role se vztahuje k t??to skupin???';
		$strings['WhoCanManageThisGroup'] = 'Kdo m????e spravovat tuto skupinu?';
		$strings['WhoCanManageThisSchedule'] = 'Kdo m????e spravovat tento kalend?????';
		$strings['AddGroup'] = 'P??idat skupinu';
		$strings['AllQuotas'] = 'V??echny kv??ty';
		$strings['QuotaReminder'] = 'Nezapome??te: Kv??ty se uplat??uj?? na z??klad?? nastaven?? ??asov??ho p??sma.';
		$strings['AllReservations'] = 'V??echny rezervace';
		$strings['PendingReservations'] = 'Nevy????zen?? rezervace';
		$strings['Approving'] = 'Schvalov??n??';
		$strings['MoveToSchedule'] = 'P??esunout do pl??nov??n??';
		$strings['DeleteResourceWarning'] = 'Odstran??n??m tohoto prost??edku vyma??ete v??echna souvisej??c?? data.';
		$strings['DeleteResourceWarningReservations'] = 'v??echny minul??, sou??asn?? a budouc?? rezervace s n??m spojen??';
		$strings['DeleteResourceWarningPermissions'] = 'v??echna p??i??azen?? povolen??';
		$strings['DeleteResourceWarningReassign'] = 'Pros??m p??e??a??te cokoli, co nechcete, aby bylo vymaz??no.';
		$strings['ScheduleLayout'] = 'Rozvr??en?? (??asy v %s)';
		$strings['ReservableTimeSlots'] = 'Rezervovateln?? ??asov?? ??seky';
		$strings['BlockedTimeSlots'] = 'Blokovan?? ??asov?? ??sek';
		$strings['ThisIsTheDefaultSchedule'] = 'Toto je v??choz?? pl??nov??n??';
		$strings['DefaultScheduleCannotBeDeleted'] = 'v??choz?? pl??nov??n?? nem????e b??t odstran??no';
		$strings['MakeDefault'] = 'Vytvo??it jako v??choz??';
		$strings['BringDown'] = 'Sn????it';
		$strings['ChangeLayout'] = 'Zm??nit rozvr??en??';
		$strings['AddSchedule'] = 'P??idat pl??nov??n??';
		$strings['StartsOn'] = 'Za????n?? od';
		$strings['NumberOfDaysVisible'] = 'Viditeln?? dn??';
		$strings['UseSameLayoutAs'] = 'Pou????t rozvr??en?? jako';
		$strings['Format'] = 'Form??t';
		$strings['OptionalLabel'] = 'Nepovinn?? pole';
		$strings['LayoutInstructions'] = 'Vlo??te ka??d?? ??asov?? ??sek na jeden ????dek. ??asov?? ??seky mus?? b??t napl??nov??ny na cel?? den - 24hodin';
		$strings['AddUser'] = 'Ru??n?? p??id??n?? nov??ho u??ivatele';
		$strings['UserPermissionInfo'] = 'Aktu??ln?? p????stup k prost??edku se m????e li??it v z??vislosti na roli u??ivatele a skupiny opr??vn??n?? nebo extern??m nastaven?? opr??vn??n??';
		$strings['DeleteUserWarning'] = 'Po odstran??n?? tohoto u??ivatele odstran??te tak?? jeho v??echny sou??asn??, budouc?? a minul?? rezervace.';
		$strings['AddAnnouncement'] = 'Napl??novat uzav??en?? provozu';
		$strings['Announcement'] = 'Text p??i ??pln??m uzav??en?? provozu';
		$strings['Priority'] = 'Priorita';
		$strings['Reservable'] = 'Voln??';
		$strings['Unreservable'] = 'Zav??eno';
		$strings['Reserved'] = 'Rezervov??no';
		$strings['MyReservation'] = 'M?? rezervace';
		$strings['Pending'] = 'P??ed schv??len??m';
		$strings['Past'] = 'Minulost';
		$strings['Restricted'] = 'Mimo provoz';
		$strings['ViewAll'] = 'Zobrazit v??e';
		$strings['MoveResourcesAndReservations'] = 'P??esunout prost??edek a rezervace do';
		$strings['TurnOffSubscription'] = 'Vypnout zapisov??n?? do kalend????e';
		$strings['TurnOnSubscription'] = 'Zapnout zapisov??n?? do kalend????e';
		$strings['SubscribeToCalendar'] = 'Zapisovac?? kalend????';
		$strings['SubscriptionsAreDisabled'] = 'Administr??tor zak??zal zapisov??n?? do kalend????e';
		$strings['NoResourceAdministratorLabel'] = '(????dn?? administr??torsk?? prost??edky)';
		$strings['WhoCanManageThisResource'] = 'Kdo m????e spravovat tyto prost??edku?';
		$strings['ResourceAdministrator'] = 'Administr??torsk?? prost??edky';
		$strings['Private'] = 'Rezervov??no';
		$strings['Accept'] = 'Potvrzeno';
		$strings['Decline'] = 'Zam??tnut??';
		$strings['ShowFullWeek'] = 'Zobrazit cel?? t??den';
		$strings['CustomAttributes'] = 'Upravit atributy';
		$strings['AddAttribute'] = 'P??idat atribut';
		$strings['EditAttribute'] = 'Upravit atribut';
		$strings['DisplayLabel'] = 'Zobrazit pole';
		$strings['Type'] = 'Typ';
		$strings['Required'] = 'Povinn??';
		$strings['ValidationExpression'] = 'Ove??en?? v??razu';
		$strings['PossibleValues'] = 'Mo??nosti';
		$strings['SingleLineTextbox'] = 'jednotn?? textov?? pole';
		$strings['MultiLineTextbox'] = 'Mnohon??sobn?? textov?? pole';
		$strings['Checkbox'] = 'Za??krt??vac?? seznam';
		$strings['SelectList'] = 'V??b??r z nab??dky';
		$strings['CommaSeparated'] = 'odd??lujte ????rkou';
		$strings['Category'] = 'Kategorie';
		$strings['CategoryReservation'] = 'Rezervace';
		$strings['CategoryGroup'] = 'Skupina';
		$strings['SortOrder'] = 'Po??ad??';
		$strings['Title'] = 'Nadpis';
		$strings['AdditionalAttributes'] = 'Dal???? atributy';
		$strings['True'] = 'Ano';
		$strings['False'] = 'Ne';
		$strings['ForgotPasswordEmailSent'] = 'Na zadan?? e-mail byly odesl??ny instrukce pro obnoven?? hesla.';
		$strings['ActivationEmailSent'] = 'Brzy obdr????te aktiva??n?? e-mail.';
		$strings['AccountActivationError'] = 'Omlouv??me se, V???? u??et je??t?? nen?? schv??len.';
		$strings['Attachments'] = 'P????lohy';
		$strings['AttachFile'] = 'P????loha';
		$strings['Maximum'] = 'limit';
		$strings['NoScheduleAdministratorLabel'] = '????dn?? kalend???? administr??tora';
		$strings['ScheduleAdministrator'] = 'Kalend???? administr??tora';
		$strings['Total'] = 'Celkem';
		$strings['QuantityReserved'] = 'Rezervovan?? mno??stv??';
		$strings['AllAccessories'] = 'V??echno p????slu??enstv??';
		$strings['GetReport'] = 'Zobrazit hl????en??';
		$strings['NoResultsFound'] = 'Nenalezena ????dn?? shoda';
		$strings['SaveThisReport'] = 'Ulo??it hl????en??';
		$strings['ReportSaved'] = 'Hl????en?? ulo??eno!';
		$strings['EmailReport'] = 'Zaslat hl????en?? e-mailem';
		$strings['ReportSent'] = 'Hl????en?? zasl??no na e-mail!';
		$strings['RunReport'] = 'Spustit hl????en??';
		$strings['NoSavedReports'] = 'Nem??te ulo??en?? ????dn?? hl????en??.';
		$strings['CurrentWeek'] = 'Tento t??den';
		$strings['CurrentMonth'] = 'Tento m??s??c';
		$strings['AllTime'] = 'V??dy';
		$strings['FilterBy'] = 'Filtrovat podle';
		$strings['Select'] = 'V??b??r';
		$strings['List'] = 'Seznam';
		$strings['TotalTime'] = 'Celkov?? ??as';
		$strings['Count'] = 'Po??et';
		$strings['Usage'] = 'U??it??';
		$strings['AggregateBy'] = 'Agregoval';
		$strings['Range'] = 'Rozsah';
		$strings['Choose'] = 'V??b??r';
		$strings['All'] = 'V??echno';
		$strings['ViewAsChart'] = 'Zobrazit jako tabulku';
		$strings['ReservedResources'] = 'Rezervovan?? prost??edky';
		$strings['ReservedAccessories'] = 'Rezervovan?? p????slu??enstv??';
		$strings['ResourceUsageTimeBooked'] = 'Pou??it?? stroje - v??b??r ??asu';
		$strings['ResourceUsageReservationCount'] = 'Pou??it?? stroje - po??et rezervac??';
		$strings['Top20UsersTimeBooked'] = 'Nejlep????ch 20 u??ivatel?? - v??b??r ??asu';
		$strings['Top20UsersReservationCount'] = 'Nejlep????ch 20 u??ivatel?? - po??et rezervac??';
		$strings['ConfigurationUpdated'] = 'Konfigura??n?? soubor byl upraven';
		$strings['ConfigurationUiNotEnabled'] = 'Str??nka nen?? p????stupn??, proto??e $conf[\'settings\'][\'pages\'][\'enable.configuration\'] je chybov?? nebo chyb??.';
		$strings['ConfigurationFileNotWritable'] = 'Konfigura??n?? soubor mus?? b??t zapisovateln??.';
		$strings['ConfigurationUpdateHelp'] = 'Pro vysv??tlen?? nastaven?? n????e nav??tivte <a target=_blank href=%s>dokumentaci</a>.';
		$strings['GeneralConfigSettings'] = 'Nastaven??';
		$strings['UseSameLayoutForAllDays'] = 'Pou????t stejn?? kalend???? pro v??echny dny';
		$strings['LayoutVariesByDay'] = 'Kalend???? pro ka??d?? den zvl??????';
		$strings['ManageReminders'] = 'E-mailov?? upom??nka';
		$strings['ReminderUser'] = '????slo u??ivatele';
		$strings['ReminderMessage'] = 'Zpr??va';
		$strings['ReminderAddress'] = 'Adresa';
		$strings['ReminderSendtime'] = '??as odesl??n??';
		$strings['ReminderRefNumber'] = 'Referen??n?? ????slo rezervace';
		$strings['ReminderSendtimeDate'] = 'Datum upom??nky';
		$strings['ReminderSendtimeTime'] = '??as (HH:MM)';
		$strings['ReminderSendtimeAMPM'] = 'dopoledne / odpoledne';
		$strings['AddReminder'] = 'P??idat upom??nku';
		$strings['DeleteReminderWarning'] = 'Opravdu to chcete?';
		$strings['NoReminders'] = 'Nem??te napl??novanou ????dnou upom??nku.';
		$strings['Reminders'] = 'Upom??nky';
		$strings['SendReminder'] = 'Odeslat upom??nku';
		$strings['minutes'] = 'minut';
		$strings['hours'] = 'hodin';
		$strings['days'] = 'den';
		$strings['ReminderBeforeStart'] = 'P??ed za????tkem';
		$strings['ReminderBeforeEnd'] = 'P??ed koncem';
		$strings['Logo'] = 'Logotyp';
		$strings['CssFile'] = 'CSS Soubor';
		$strings['ThemeUploadSuccess'] = 'Zm??ny byly ulo??eny. Obnovte str??nku.';
		$strings['MakeDefaultSchedule'] = 'Pou????t jako v??choz?? kalend????';
		$strings['DefaultScheduleSet'] = 'Toto je V???? v??choz?? kalend????';
		$strings['FlipSchedule'] = 'Zm??nit vzhled kalend????e';
		$strings['Next'] = 'Dal????';
		$strings['Success'] = 'Provedeno';
		$strings['Participant'] = '????astn??k';
		$strings['ResourceFilter'] = 'Filtr zdroj??';
		$strings['ResourceGroups'] = 'Skupiny zdroj??';
		$strings['AddNewGroup'] = 'P??idat novou skupinu';
		$strings['Quit'] = 'Ukon??it';
		$strings['AddGroup'] = 'P??idat skupinu';
		$strings['StandardScheduleDisplay'] = 'Pou????t klasick?? zobrazen??';
		$strings['TallScheduleDisplay'] = 'Pou????t zobrazen?? na v????ku';
		$strings['WideScheduleDisplay'] = 'Pou????t zobrazen?? na ??????ku';
		$strings['CondensedWeekScheduleDisplay'] = 'Pou????t zkr??cen?? t??denn?? zobrazen??';
		$strings['ResourceGroupHelp1'] = 'Pou??ijte metodu Drag and drop pro p??em??st??n?? skupiny zdroj??.';
		$strings['ResourceGroupHelp2'] = 'Pro dal???? akce Klikn??te prav??m tla????tkem na n??zev zdroje skupiny.';
		$strings['ResourceGroupHelp3'] = 'Pro p??id??n?? droje do skupiny Pou??ijte metodu Drag and drop.';
		$strings['ResourceGroupWarning'] = 'Pokud pou????v??te skupiny zdroje, ka??d?? zdroj mus?? b??t p??i??azen nejm??n?? jedn?? skupin??. Nep??i??azen?? zdroje nebude mo??n?? rezervovat.';
		$strings['ResourceType'] = 'Typ zdroje';
		$strings['AppliesTo'] = 'Pou????t na';
		$strings['UniquePerInstance'] = 'Unik??tn?? ke ka??d??mu';
		$strings['AddResourceType'] = 'P??idat typ zdroje';
		$strings['NoResourceTypeLabel'] = '(nezvolen typ zdroje)';
		$strings['ClearFilter'] = 'Vy??istit filtr';
		$strings['MinimumCapacity'] = 'Minim??ln?? kapacita';
		$strings['Color'] = 'Barva';
		$strings['Available'] = 'Voln??';
		$strings['Unavailable'] = 'Obsazen??';
		$strings['Hidden'] = 'Skryt??';
		$strings['ResourceStatus'] = 'Stav zroje';
		$strings['CurrentStatus'] = 'Sou??asn?? stav';
		$strings['AllReservationResources'] = 'V??echny zdroje';
		$strings['File'] = 'Soubor';
		$strings['BulkResourceUpdate'] = 'Pr??zdn?? zdroje';
		$strings['Unchanged'] = 'Nezm??n??n??';
		$strings['Common'] = 'p????buzn??';
		$strings['AdvancedFilter'] = 'Roz??????en?? filtr';
		$strings['AllParticipants'] = 'V??ichni ????astn??ci';
		$strings['NoResources'] = 'Nebyl p??id??n zdroj.';
		$strings['ReservationApprovalAdminSubject'] = 'Upozorn??n??: Rezervace vy??aduje Va??e schv??len??';
		$strings['ResourceAvailability'] = 'Dostupnost zdroj??';
		$strings['UnavailableAllDay'] = 'Nedostupn?? cel?? den';
		$strings['AvailableUntil'] = 'Dostupn??ch ??as?? k rezervaci';
		$strings['AvailableBeginningAt'] = 'Dostupn?? za????tek';
		$strings['ChangeLanguage'] = 'Zm??nit jazyk';
		$strings['Reserve'] = 'Rezervovat';
		$strings['Purge'] = 'Vy??istit';
		$strings['UsersWillBeDeleted'] = 'u??ivatel?? bude smaz??no';
		$strings['BlackoutsWillBeDeleted'] = 'term??n?? zav??en?? bude smaz??no';
		$strings['ReservationsWillBePurged'] = 'rezervac?? bude vy??i??t??no';
		$strings['ReservationsWillBeDeleted'] = 'rezervac?? bude smaz??no';
		$strings['PermanentlyDeleteUsers'] = 'Trvale vymazat u??ivatele naposledy p??ihl????en?? p??ed';
		$strings['DeleteBlackoutsBefore'] = 'Vymazat term??ny zav??en?? provozu p??ed';
		$strings['DeletedReservations'] = 'Smazan?? rezervace';
		$strings['DeleteReservationsBefore'] = 'Vymazat rezervace p??ed';
		$strings['ReservationSeriesEndingPreference'] = 'Kdy?? kon???? s??rie opakovan??ch rezervac??';
		$strings['DateRange'] = 'Obdob??';
		$strings['ThisWeek'] = 'Tento t??den';
		$strings['FindATime'] = 'Vyhledat ??as';
		$strings['AnyResource'] = 'Libovoln?? prost??edek';
		$strings['Hours'] = 'hodin';
		$strings['Minutes'] = 'minut';
		$strings['SpecificTime'] = 'Vybran?? ??as';
		$strings['MoreOptions'] = 'V??ce nastaven??';
		$strings['DisplayPage'] = 'Zobrazit str??nku';
		$strings['SendAsEmail'] = 'Informovat e-mailem';
		$strings['Users'] = 'U??ivatel??';
		$strings['UsersInGroups'] = 'U??ivatel?? ve skupin??ch';
		$strings['UsersWithAccessToResources'] = 'U??ivatel?? s p????stupem k prost??edk??m';
		$strings['AutomaticallyAddToGroup'] = 'Automaticky p??id??vat nov?? u??ivatele do t??to skupiny';
		$strings['InviteUsers'] = 'Pozvat u??ivatele';
		$strings['InviteUsersLabel'] = 'Vypl??te email u??ivatel??, kter?? chcete pozvat';
		$strings['PrintQRCode'] = 'Vytisknout QR k??d';
		$strings['AllResourceTypes'] = 'V??echny typt prost??edku';
		$strings['AllResourceStatuses'] = 'V??echny stavy prost??edku';
		$strings['AllYear'] = 'Cel?? rok';
		$strings['ConcurrentYes'] = 'Prost??edek m????e b??t rezervov??n v??ce u??ivateli z??rove??';
		$strings['ConcurrentNo'] = 'Prost??edek nem????e b??t rezervov??n v??ce u??ivateli z??rove??';
		$strings['DefaultStyle'] = 'V??choz?? vzhled';
		$strings['SwitchToACustomLayout'] = 'P??epnout na vlastn?? zobrazen??';
		$strings['SwitchToAStandardLayout'] = 'P??epnout na standardn?? zobrazen??';
		$strings['ThisScheduleUsesACustomLayout'] = 'Tento pl??n pou????v?? vlastn?? zobrazen??';
		$strings['ThisScheduleUsesAStandardLayout'] = 'Tento pl??n pou????v?? standardn?? zobrazen??';
		$strings['Autofill'] = 'Vyplnit automaticky';
		$strings['IncludingCompletedReservations'] = 'Zahrnout ukon??en?? rezervace';
		$strings['NotCountingCompletedReservations'] = 'Nezahrnovat ukon??en?? rezervace';
		$strings['AllDay'] = 'Cel?? den';
		$strings['Everyday'] = 'Ka??d?? den';
		$strings['QuotaEnforcement'] = 'Vynutit %s %s';
		$strings['AvailableAllYear'] = 'Cel?? rok';
		$strings['Availability'] = 'Dostupnost';
		$strings['AvailableBetween'] = 'Dostupno v obdob??';
		$strings['BlackoutAroundConflicts'] = 'Uzav????t provoz p??ed a po konfliktn??ch rezervac??ch';
		$strings['ImportICS'] = 'Importovat z ICS';
		$strings['ImportQuartzy'] = 'Importovat z Quartzy';
		$strings['OnlyIcs'] = 'Only *.ics files can be uploaded.';
		$strings['IcsLocationsAsResources'] = 'Um??st??n?? budou importov??ny jako prost??edky.';
		$strings['IcsMissingOrganizer'] = 'Vlastn??ck ud??lost?? u kter??ch nen?? nastaven organiz??tor bude nastaven na sou??asn??ho u??ivatele.';
		$strings['IcsWarning'] = 'Pravidla pro rezervace nebudou vynucena - m????e doj??t ke konflikt??m a duplikac??m.';
		$strings['IncludeDeleted'] = 'Zahrnout smazan?? rezervace';
		$strings['Utilization'] = 'Vyu??it??';
		$strings['CheckingIn'] = 'Odbaven??';
		$strings['CheckingOut'] = 'Odhl????en??';
		$strings['CheckIn'] = 'Odbaven??';
		$strings['CheckOut'] = 'Odhl????en??';
		$strings['ReleasedIn'] = 'Uvoln??no v';
		$strings['CheckedInSuccess'] = 'Byli jste odbaveni';
		$strings['CheckedOutSuccess'] = 'Byli jste odhl????eni';
		$strings['CheckInFailed'] = 'Odbaven?? se nezda??ilo';
		$strings['CheckOutFailed'] = 'Odhl????en?? se nezda??ilo';
		$strings['CheckInTime'] = '??as odbaven??';
		$strings['CheckOutTime'] = '??as odhl????en??';
		$strings['OriginalEndDate'] = 'Pl??novan?? konec';
		$strings['MissedCheckin'] = 'Zme??kan?? odbaven??';
		$strings['MissedCheckout'] = 'Zme??kan?? odhl????en??';
		$strings['RequiresApproval'] = 'Vy??aduje schv??len??';
		$strings['FullAccess'] = 'Pln?? p????stup';
		$strings['ViewOnly'] = 'Pouze ??ten??';
		$strings['Schedules'] = 'Pl??nov??n??';
		$strings['ResourceColor'] = 'Barva prost??edku';
		$strings['PublicId'] = 'Ve??ejn?? Id';
		$strings['Public'] = 'Ve??ejn??';
		$strings['AutoReleaseNotification'] = 'Automaticky uvolnit pokud odbaven?? neprob??hne do %s minut';
		$strings['RequiresCheckInNotification'] = 'Vy??aduje odbaven?? a odhl????en??';
		$strings['NoCheckInRequiredNotification'] = 'Nevy??aduje odbaven?? a odhl????en??';
		$strings['More'] = 'V??ce';
		$strings['ViewAvailability'] = 'Zobrazit dostupnost';
		$strings['ReservationDetails'] = 'Detaily rezervace';
		$strings['NotifyUser'] = 'Upozornit u??ivatele';
		$strings['Reject'] = 'Zam??tnout';
		$strings['Columns'] = 'Sloupce';
		$strings['NewVersion'] = 'Nov?? verze!';
		$strings['StartTime'] = '??as za????tku';
		$strings['EndTime'] = '??as konce';
		$strings['SelectUser'] = 'Vybrat u??ivatele';
		$strings['TermsOfService'] = 'Podm??nky u??it??';
		$strings['EnterTermsManually'] = 'Zadat podm??nky ru??ne';
		$strings['LinkToTerms'] = 'Odkaz na podm??nky';
		$strings['UploadTerms'] = 'Nahr??t podm??nky';
		$strings['RequireTermsOfServiceAcknowledgement'] = 'Vy??adovat souhlas s podm??nkami';
		$strings['UponReservation'] = 'P??i rezervaci';
		$strings['UponRegistration'] = 'P??i registraci';
		$strings['ViewTerms'] = 'Zobrazit podm??nky u??it??';
		$strings['IAccept'] = 'Souhlas??m';
		$strings['TheTermsOfService'] = 'Podm??nky u??it??';
		$strings['ReservationColors'] = 'Barvy rezervac??';
		$strings['Attribute'] = 'Atribut';
		$strings['AddRule'] = 'P??idat pravidlo';
		$strings['RequiredValue'] = 'Vy??adovan?? hodnota';
		$strings['ReservationCustomRuleAdd'] = 'Pou??it barvu, pokud je atribut rezervace nastaven na n??sleduj??c?? hodnotu';
		$strings['AddReservationColorRule'] = 'P??idat pravidlo barvy rezervac??';
		$strings['CollectedFor'] = 'Zobrazov??no pro';
		$strings['LimitAttributeScope'] = 'Zobrazovat v konkr??tn??ch p????padech';
		$strings['AdminOnly'] = 'Pouze pro Admina';
		// End Strings

		// Install
		$strings['InstallApplication'] = 'Instalace Booked Scheduleru (pouze pro MySQL)';
		$strings['IncorrectInstallPassword'] = 'Nespr??vn?? heslo.';
		$strings['SetInstallPassword'] = 'P??ed pokra??ov??n??m mus??te zadat instala??n?? heslo.';
		$strings['InstallPasswordInstructions'] = 'V souboru %s nastavte ????dek %s na n??hodn?? a obt????n?? uhodnuteln?? heslo, pot?? se vra??te na tuto str??nku.<br/>M????ete pou????t %s';
		$strings['NoUpgradeNeeded'] = '????dn?? aktualizace nen?? pot??eba. Op??tovn?? spu??t??n?? instala??n??ho procesu sma??e ve??ker?? st??vaj??c?? data a znovu nainstaluje Booked Scheduler!';
		$strings['ProvideInstallPassword'] = 'Zadejte pros??m instala??n?? heslo.';
		$strings['InstallPasswordLocation'] = 'To je zad??no v souboru %s v ????dku %s.';
		$strings['VerifyInstallSettings'] = 'P??ed pokra??ovn??n??m ov????te n??sleduj??c?? v??choz?? nastaven??. Nebo jej zm????te v %s.';
		$strings['DatabaseName'] = 'N??zev datab??ze';
		$strings['DatabaseUser'] = 'Datab??zov?? u??ivatel';
		$strings['DatabaseHost'] = 'Datab??zov?? server';
		$strings['DatabaseCredentials'] = 'Mus??te zadat pov????en?? MySQL u??ivatele kter?? m?? pr??va k vytv????en?? datab??z??. Pokud takov?? pov????en?? nezn??te, kontaktujte sv??ho datab??zov??ho administr??tora. V mnoha p????padech bude fungovat root.';
		$strings['MySQLUser'] = 'MySQL u??ivatel';
		$strings['InstallOptionsWarning'] = 'N??sleduj??c?? nastaven?? pravd??podobn?? nebudou fungovat ve sd??len??m prost??ed??. Pokud instalujete do sd??len??ho prost??ed??, pou??ijte k dokon??en?? n??sleduj??c??ch krok?? n??stroje pro spr??vu MySQL.';
		$strings['CreateDatabase'] = 'Vytvo??it datab??zi';
		$strings['CreateDatabaseUser'] = 'Vytvo??it datab??zov??ho u??ivateler';
		$strings['PopulateExampleData'] = 'Importovat vzorov?? data. Vytvo???? administr??torsk?? ????et: admin/password a u??ivatelsk?? ????et: user/password';
		$strings['DataWipeWarning'] = 'Varov??n??: Tato akce sma??e ve??ker?? data';
		$strings['RunInstallation'] = 'Spustit instalaci';
		$strings['UpgradeNotice'] = 'Aktualizujete z verze <b>%s</b> na verzi <b>%s</b>';
		$strings['RunUpgrade'] = 'Spustit aktualizaci';
		$strings['Executing'] = 'Prov??d?? se';
		$strings['StatementFailed'] = 'Dotaz selhal. Podrobnosti:';
		$strings['SQLStatement'] = 'SQL dotaz:';
		$strings['ErrorCode'] = 'K??d chyby:';
		$strings['ErrorText'] = 'Text chyby:';
		$strings['InstallationSuccess'] = 'Instalace byla ??sp????n?? dokon??ena!';
		$strings['RegisterAdminUser'] = 'Zaregistrujte si administr??torsk??ho u??ivatele, pokud jste neimportovali vzorov?? data. Ov????te ??e $conf[\'settings\'][\'allow.self.registration\'] = \'true\' v souboru %s.';
		$strings['LoginWithSampleAccounts'] = 'Pokud jste importovali vzorov?? data, p??ihla??te se s administr??torsk??m pov????en??m admin/password nebo u??ivatelsk??m pov????en??m user/password.';
		$strings['InstalledVersion'] = 'Nainstalovan?? verze Booked Scheduleru je %s';
		$strings['InstallUpgradeConfig'] = 'Doporu??ujeme aktualizovat v???? konfigura??n?? soubor';
		$strings['InstallationFailure'] = 'Vyskytly se probl??my b??hem instalace. Pros??m opravte je a zkuste instalaci spustit znovu.';
		$strings['ConfigureApplication'] = 'Nastavit Booked Scheduler';
		$strings['ConfigUpdateSuccess'] = 'V???? konfigura??n?? soubor je aktu??ln??!';
		$strings['ConfigUpdateFailure'] = 'Nepoda??ilo se automaticky aktualizovat konfigura??n?? soubor. Pros??m p??epi??te obsah souboru config.php n??sleduj??c??m:';
		$strings['ScriptUrlWarning'] = 'Va??e nastaven?? <em>script.url</em> pravd??podobn?? nen?? sp??vn??. V sou??asnosti je nastaveno na <strong>%s</strong>, ale nejsp????e by m??lo b??t <strong>%s</strong>';
		// End Install

// Errors
$strings['LoginError'] = 'Chybn?? zadan?? u??ivatelsk?? jm??no nebo heslo.';
$strings['ReservationFailed'] = 'Va??e rezervace nem????e b??t vytvo??ena.';
$strings['MinNoticeError'] = 'Tato rezervace mus?? obsahovat popis. Nejstar???? datum, kter?? m????e b??t rezervov??no je %s.';
$strings['MaxNoticeError'] = 'Tato rezervace nem????e b??t napl??nov??na tak daleko. Nejzaz???? datum, kter?? m????e b??t rezervov??no je %s.';
$strings['MinDurationError'] = 'Tato rezervace mus?? b??t del???? ne?? %s.';
$strings['MaxDurationError'] = 'Tato rezervace nem????e trvat d??le ne?? %s.';
$strings['ConflictingAccessoryDates'] = 'P??ekro??ili jste omezen?? po??et kus??';
$strings['NoResourcePermission'] = 'Nem??te opr??vn??n?? pro vstup k jednomu nebo v??ce po??adovan??m prost??edk??m';
$strings['ConflictingReservationDates'] = 'Zde je v??pis rezervac??, kter?? jsou v konfliktu s V??mi vytvo??enou:';
$strings['StartDateBeforeEndDateRule'] = 'Za????tek rezervace mus?? za????nat d????ve ne?? jej?? konec.';
$strings['StartIsInPast'] = 'Za????tek rezervace nem????e b??t vytvo??en v minulosti';
$strings['EmailDisabled'] = 'Administr??tor zak??zal pos??l??n?? e-mailov??ch upozorn??n??.';
$strings['ValidLayoutRequired'] = '??asov?? ??sek mus?? b??t vytvo??en na cel?? den - 24hodin';
$strings['CustomAttributeErrors'] = 'Chybn?? s dal????mi hodnotami:';
$strings['CustomAttributeRequired'] = '%s je povinn?? pole';
$strings['CustomAttributeInvalid'] = 'Hodnota pro %s je chybn??';
$strings['AttachmentLoadingError'] = 'Omlouv??me se, do??lo k chyb?? p??i na????t??n?? po??adovan??ho souboru.';
$strings['InvalidAttachmentExtension'] = 'M????ete nahr??t pouze soubory t??chto typ??: %s';
$strings['InvalidStartSlot'] = 'Za????tek a ??as rezervace nen?? je chybn?? zad??n.';
$strings['InvalidEndSlot'] = 'Konec a ??as rezervace je chybn?? zad??n.';
$strings['MaxParticipantsError'] = '%s m????ete m??t pouze %s ????astn??k??.';
$strings['ReservationCriticalError'] = 'Z??va??n?? chyba p??i rezervaci. Kontaktuje n??s pros??m.';
$strings['InvalidStartReminderTime'] = 'Za????tek upom??nky je chybn?? zad??n.';
$strings['InvalidEndReminderTime'] = 'Konec upom??nky je chybn?? zad??n.';
$strings['QuotaExceeded'] = 'Quota limit exceeded.';
$strings['MultiDayRule'] = '%s nen?? povolen?? rezervovat na n??kolik dn??.';
$strings['InvalidReservationData'] = 'Nastal probl??m p??i po??adavku na rezervaci.';
$strings['PasswordError'] = 'Heslo mus?? obsahovat nejm??n?? %s p??sm??n a nejm??n?? %s ????sel.';
$strings['PasswordErrorRequirements'] = 'Heslo mus?? obsahovat kombinaci nejm??n?? %s mal??ch a velk??ch p??smen a %s ????sel.';
$strings['NoReservationAccess'] = 'Nem??te povolen?? m??nit tuto rezervaci.';
// End Errors

// Page Titles
$strings['CreateReservation'] = 'Vytvo??it rezervaci';
$strings['EditReservation'] = 'Upravov??n?? rezervace';
$strings['LogIn'] = 'P??ihl??sit';
$strings['ManageReservations'] = 'Rezervace';
$strings['AwaitingActivation'] = '??ek?? na aktivaci';
$strings['PendingApproval'] = 'Prob??h?? schv??len??';
$strings['ManageSchedules'] = 'Pl??nov??n??';
$strings['ManageResources'] = 'Prost??edky';
$strings['ManageAccessories'] = 'P????slu??enstv??';
$strings['ManageUsers'] = 'U??ivatel??';
$strings['ManageGroups'] = 'Skupiny';
$strings['ManageQuotas'] = 'Kv??ty';
$strings['ManageBlackouts'] = 'Term??ny zav??en?? provozu';
$strings['MyDashboard'] = 'Hlavn?? strana';
$strings['ServerSettings'] = 'Informace o serveru';
$strings['Dashboard'] = 'Hlavn?? p??ehled';
$strings['Help'] = 'N??pov??da';
$strings['Administration'] = 'Administrace';
$strings['About'] = 'O n??s';
$strings['Bookings'] = 'Vytvo??it rezervaci';
$strings['Schedule'] = 'Pl??nov??n?? a vytvo??en?? rezervace';
$strings['Reservations'] = 'Rezervace';
$strings['Account'] = '????et';
$strings['EditProfile'] = 'Upravit vlastn?? profil';
$strings['FindAnOpening'] = 'Naj??t otev??en??';
$strings['OpenInvitations'] = 'Zobrazit pozv??n??';
$strings['MyCalendar'] = 'Vlastn?? kalend????';
$strings['ResourceCalendar'] = 'Kalend????e prost??edk??';
$strings['Reservation'] = 'Nov?? rezervace';
$strings['Install'] = 'Instalace';
$strings['ChangePassword'] = 'Zm??nit heslo';
$strings['MyAccount'] = 'M??j ????et';
$strings['Profile'] = 'Nastaven?? profilu';
$strings['ApplicationManagement'] = 'Spr??va syst??mu';
$strings['ForgotPassword'] = 'Zapomenut?? heslo';
$strings['NotificationPreferences'] = 'Nastaven?? ozn??men?? e-mailem'; 
$strings['ManageAnnouncements'] = '??pln?? uzav??en?? provozu'; 
$strings['Responsibilities'] = 'Odpov??dnost';
$strings['GroupReservations'] = 'Skupinov?? rezervace';
$strings['ResourceReservations'] = 'Rezervace prost??edk??';
$strings['Customization'] = 'Roz??????itelnost';
$strings['Attributes'] = 'Atributy';
$strings['AccountActivation'] = 'Aktivace ????t??';
$strings['ScheduleReservations'] = 'Rezervace kalend??????';
$strings['Reports'] = 'Hl????en??';
$strings['GenerateReport'] = 'Vytvo??it nov?? hl????en??';
$strings['MySavedReports'] = 'M?? ulo??en?? hl????en??';
$strings['CommonReports'] = 'Spole??n?? hl????en??';
$strings['ViewDay'] = 'Zobrazit denn?? p??ehled';
$strings['Group'] = 'Skupina';
$strings['ManageConfiguration'] = 'Glob??ln?? nastaven??';
$strings['LookAndFeel'] = 'Nastaven?? vzhledu';
$strings['ManageResourceGroups'] = 'Skupiny zdroje';
$strings['ManageResourceTypes'] = 'Typy zdroje';
$strings['ManageResourceStatus'] = 'Stavy zdroje';
$strings['ManageEmailTemplates'] = 'E-mailov?? ??ablony';
$strings['DataCleanup'] = '??i??t??n?? dat';
$strings['SearchReservations'] = 'Vyhledat rezervace';
$strings['RegisterANewAccount'] = 'Registrace nov??ho ????tu';
       // End Page Titles


// Day representations
$strings['DaySundaySingle'] = 'Ne';
$strings['DayMondaySingle'] = 'Po';
$strings['DayTuesdaySingle'] = '??t';
$strings['DayWednesdaySingle'] = 'St';
$strings['DayThursdaySingle'] = '??t';
$strings['DayFridaySingle'] = 'P??';
$strings['DaySaturdaySingle'] = 'So';

$strings['DaySundayAbbr'] = 'Ne';
$strings['DayMondayAbbr'] = 'Po';
$strings['DayTuesdayAbbr'] = '??t';
$strings['DayWednesdayAbbr'] = 'St';
$strings['DayThursdayAbbr'] = '??t';
$strings['DayFridayAbbr'] = 'P??';
$strings['DaySaturdayAbbr'] = 'So';
// End Day representations

        // Email Subjects
        $strings['ReservationApprovedSubject'] = 'Va??e rezervace byla potvrzena';
        $strings['ReservationCreatedSubject'] = 'Rezervace byla vytvo??ena';
        $strings['ReservationUpdatedSubject'] = 'Rezervace byla upravena';
        $strings['ReservationDeletedSubject'] = 'Rezervace byla zru??ena';
        $strings['ReservationCreatedAdminSubject'] = 'Upozorn??n??: rezervace vytvo??ena';
        $strings['ReservationUpdatedAdminSubject'] = 'Upozorn??n??: rezervace upravena';
        $strings['ReservationDeleteAdminSubject'] = 'Upozorn??n??: rezervace zru??ena';
        $strings['ParticipantAddedSubject'] = 'Upozorn??n??: rezervace ????astn??k??';
        $strings['ParticipantDeletedSubject'] = 'Rezervace zru??ena';
        $strings['InviteeAddedSubject'] = 'Pozv??nka do rezervace';
        $strings['ResetPasswordRequest'] = 'Po??adavek na resetov??n?? hesla';
        $strings['ActivateYourAccount'] = 'Pros??me, aktivujte sv??j ????et';
        $strings['ReportSubject'] = 'Va??e po??adovan?? hl????en?? (%s)';
		$strings['ReservationStartingSoonSubject'] = ' Va??e rezervace %s zanedlouho za??ne';
		$strings['ReservationEndingSoonSubject'] = 'Va??e rezervace %s zanedlouho kon????';
		$strings['UserAdded'] = 'Byl p??id??n nov?? u??ivatel';
		$strings['UserDeleted'] = 'U??ivatelsk?? ????et %s byl smaz??n u??ivatelem %s';
		$strings['GuestAccountCreatedSubject'] = 'Podrobnosti va??eho ????tu %s';
		$strings['AccountCreatedSubject'] = 'Podrobnosti va??eho ????tu %s';
		$strings['InviteUserSubject'] = '%s v??s pozval k p??id??n?? do %s';

		$strings['ReservationApprovedSubjectWithResource'] = 'Rezervace %s byla schv??lena';
		$strings['ReservationCreatedSubjectWithResource'] = 'Rezervace %s byla vytvo??ena';
		$strings['ReservationUpdatedSubjectWithResource'] = 'Rezervace %s byla aktualizov??na';
		$strings['ReservationDeletedSubjectWithResource'] = 'Rezervace %s byla odstran??na';
		$strings['ReservationCreatedAdminSubjectWithResource'] = 'Upozorn??n??: Rezervace %s byla schv??lena';
		$strings['ReservationUpdatedAdminSubjectWithResource'] = 'Upozorn??n??: Rezervace %s byla aktualizov??na';
		$strings['ReservationDeleteAdminSubjectWithResource'] = 'Upozorn??n??: Rezervace %s byla odstran??na';
		$strings['ReservationApprovalAdminSubjectWithResource'] = 'Upozorn??n??: Rezervace %s vy??aduje va??e schv??len??';
		$strings['ParticipantAddedSubjectWithResource'] = '%s v??s p??idal k rezervaci %s';
		$strings['ParticipantDeletedSubjectWithResource'] = '%s v??s odebral z rezervace %s';
		$strings['InviteeAddedSubjectWithResource'] = '%s v??s pozval k rezervaci %s';
		$strings['MissedCheckinEmailSubject'] = 'Zme??kan?? odbaven?? %s';
		$strings['ReservationShareSubject'] = '%s sd??lel reservaci %s';
		$strings['ReservationSeriesEndingSubject'] = 'S??rie rezervac?? %s kon???? %s';
		$strings['ReservationParticipantAccept'] = '%s p??ijal va??e pozv??n?? k rezervaci %s na %s';
		$strings['ReservationParticipantDecline'] = '%s odm??tl va??e pozv??n?? k rezervaci %s na %s';
		$strings['ReservationParticipantJoin'] = '%s se p??idal k va??emu pozv??n?? k rezervaci %s na %s';
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
		$days['full'] = array('Ned??le', 'Pond??l??', '??ter??', 'St??eda', '??tvrtek', 'P??tek', 'Sobota');
// The three letter abbreviation
		$days['abbr'] = array('Ne', 'Po', '??t', 'St', '??t', 'P??', 'So');
// The two letter abbreviation
		$days['two'] = array('Ne', 'Po', '??t', 'St', '??t', 'P??', 'So');
// The one letter abbreviation
		$days['letter'] = array('Ne', 'Po', '??t', 'St', '??t', 'P??', 'So');

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
		$months['full'] = array('Leden', '??nor', 'B??ezen', 'Duben', 'Kv??ten', '??erven', '??ervenec', 'Srpen', 'Z??????', '????jen', 'Listopad', 'Prosinec');
// The three letter month name
		$months['abbr'] = array('Leden', '??nor', 'B??ezen', 'Duben', 'Kv??ten', '??erven', '??ervenec', 'Srpen', 'Z??????', '????jen', 'Listopad', 'Prosinec');

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
		return 'cz';
	}
}
