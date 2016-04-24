{$filter}
{$paginator}
	<table class="datatable" width="100%">
		{$tablehead}
		{foreach from=$result item=item}
			<tr>
				<td align="center">{$item.id}</td>
                <td align="center">{$item.date}</td>
				<td align="center">{$item.description}</td>
                <td align="center">{$item.user}</td>
                <td align="center">{$item.userid}</td>
                <td align="center">{$item.ipaddr}</td>
			</tr>
		{foreachelse}
		<h4>Записей не найдено</h4>
		{/foreach}
	</table>

{$paginator}