{if $error}
	<div class="error">{$error}</div>
{/if}

<h1>New Task</h1>
<h2>Insert new task</h2>

<form action="" method="POST" class="center">

	<div class="form-item">
		<label>Username</label>
		<div class="item-content">
			<input type="text" name="username" value="{$username}" />
		</div>
	</div>

	<div class="form-item">
		<label>E-Mail</label>
		<div class="item-content">
			<input type="text" name="email" value="{$email}" />
		</div>
	</div>

	<div class="form-item">
		<label>Your Problem</label>
		<div class="item-content">
			<textarea name="description">{$description}</textarea>
		</div>
	</div>

	<div class="form-item">
		<label></label>
		<div class="item-content">
			<input type="submit" name="submit" value="Submit" class="submit green" />
		</div>
	</div>

</form>
