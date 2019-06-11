<h1>Task by: {$task.username}</h1>
<h2>Email: {$task.email}</h2>

{$task.description}

<br/>
<br/>
<hr/>
<br/>

<h2>Edit this task:</h2>
<form action="" method="POST" class="center">

	<div class="form-item">
		<label>Status</label>
		<div class="item-content">
			<select name='status'>
        <option{if $task.status eq 'todo'} selected{/if}>Todo</option>
        <option{if $task.status eq 'doing'} selected{/if}>Doing</option>
        <option{if $task.status eq 'done'} selected{/if}>Done</option>
      </select>
		</div>
	</div>

	<div class="form-item">
		<label>Problem</label>
		<div class="item-content">
			<textarea name="description">{$task.description_edit}</textarea>
		</div>
	</div>

	<div class="form-item">
		<label></label>
		<div class="item-content">
			<input type="submit" name="submit" value="Submit" class="submit green" />
		</div>
	</div>

</form>
