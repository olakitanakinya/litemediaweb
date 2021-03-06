{*
Copyright 2017-2020 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
*}
{if $resource->GetResourceGroupIds()|count == 0}
	{translate key=None}
{/if}
{foreach from=$resource->GetResourceGroupIds() item=resourceGroupId name=eachGroup}
	<span class="resourceGroupId" data-value="{$resourceGroupId}">{$ResourceGroupList[$resourceGroupId]->name}</span>{if !$smarty.foreach.eachGroup.last}, {/if}
{/foreach}