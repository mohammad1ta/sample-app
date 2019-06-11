<h1>List</h1>
<h2>Show all tasks</h2>

<div class="right">
	<a href="{$URL}task/add/" class="submit-extra green">
		<i class="fa fa-plus"></i>
		<span>New Task</span>
	</a>
</div>

<div class="left">
	Sort By:
	<ul class="sort">
		<li {if $sort_type eq "username"}class="active"{/if}><a href="{$URL}task/lists/page/1/sort/username/order/{$order}/">Username</a></li>
		<li {if $sort_type eq "email"}class="active"{/if}><a href="{$URL}task/lists/page/1/sort/email/order/{$order}/">E-Mail</a></li>
		<li {if $sort_type eq "status"}class="active"{/if}><a href="{$URL}task/lists/page/1/sort/status/order/{$order}/">Status</a></li>
	</ul>
	&nbsp;&nbsp;&nbsp;&nbsp; Sort Type:
	<a href="{$URL}task/lists/page/1/sort/{$sort_type}/order/asc/"><i class="sort-type fa fa-arrow-up {if $order eq "asc"}active{/if}"></i></a>
	<a href="{$URL}task/lists/page/1/sort/{$sort_type}/order/desc/"><i class="sort-type fa fa-arrow-down {if $order eq "desc"}active{/if}"></i></a>
</div>

<div class="clear"></div>

<ul class="linear-list">

	{foreach $task_list as $row}

	<li>

		<a href="{$URL}task/show/{$row.id}/">
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

{if $show_pagination}

	<div class="pagination">
		{for $i=1 to $num_pages}
			<a href="{$URL}task/lists/page/{$i}/sort/{$sort_type}/order/{$order}/" {if $current_page eq $i} class="bold" {/if}>{$i}</a>
		{/for}
	</div>

{/if}
