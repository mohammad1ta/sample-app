<h1>List</h1>
<h2>Show all tasks for admin</h2>

<ul class="linear-list">

	{foreach $task_list as $row}

		<li>

			<a href="{$URL}admin/task_show/{$row.id}/">
				<div class="left">
					<i class="fa fa-cube"></i>
					<strong>{$row.username}</strong>
					<span>( {$row.email} )</span>
					<span>{$row.description} ...</span>
				</div>
				<div class="right">
					<span>{$row.date}</span>
					{$row.status}
					{if $row.status eq "done"}<i class="fa fa-check green"></i>{/if}
				</div>
			</a>

		</li>

	{/foreach}

</ul>
