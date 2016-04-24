{$filter}
{$paginator}
	<table class="datatable" width="100%">
		{$tablehead}
		{foreach from=$result item=item}
			<tr>
				<td align="center">{$item.id}</td>
                <td align="center">{$item.date}</td>
				<td align="center">{$item.module}</td>
				<td align="center">{$item.action}</td>
				<td align="center"><textarea style="width:100%;" rows="5">{$item.request}</textarea></td>
				<td align="center"><textarea style="width:100%;" rows="5">{$item.response}</textarea></td>
                <td align="center">{$item.arrdata}</td>
			</tr>
		{foreachelse}
		<h4>Записей не найдено</h4>
		{/foreach}
	</table>

{$paginator}