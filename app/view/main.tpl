<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>{$title}</title>
	<link rel="stylesheet" href="{$CSS_PATH}main.css?3" type="text/css" media="all" />
	<link media="screen" href="{$CSS_PATH}font-awesome.min.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="{$JS_PATH}jquery.js" defer></script>
	<script type="text/javascript" src="{$JS_PATH}tooltipster.bundle.min.js" defer></script>
	<script type="text/javascript" src="{$JS_PATH}main.js" defer></script>
</head>

<body>

	<script>
	var mainUrl = "{$URL}";
	</script>

	<div class="container">

		<div id="sidebar">

			<div class="logo">

				<span>M</span>yTEST

			</div>

			<ul>
				<li><a href="{$URL}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
				<li><a href="{$URL}task/add"><i class="fa fa-book valign"></i>New Task</a></li>
				<li><a href="{$URL}task/lists"><i class="fa fa-list valign"></i>Task List</a></li>
			</ul>

		</div>

		<div id="content">

			<div class="navigation">

				<div class="left">

					<a href="{$URL}admin/task" class="admin-link">Admin</a>

				</div>

				<div class="right">

					<div class="notify tip" title="Notification">
						<a href="{$URL}">
							<i class="fa fa-exclamation-triangle"></i>
							<span>2</span>
						</a>
					</div>

					<div class="notify tip" title="Messages">
						<a href="{$URL}">
							<i class="fa fa-envelope-o bounce"></i>
							<span>3</span>
						</a>
					</div>

				</div>

				<div class="clear"></div>

			</div>

			{$main_content}

		</div>

	</div>

</body>
</html>
