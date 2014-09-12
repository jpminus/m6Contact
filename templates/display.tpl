<p>{$module_message}</p>
<div id="contactForm">
{$form_start}{$sendTo}
<table class="table">
	<tr>
		<td><label><b>Name: </b> </label></td>
		<td>{$name}</td>
	</tr>
	<tr>
		<td><label><b>Email:</b> </label></td>
		<td>{$email}</td>
	</tr>
	<tr>
		<td><label><b>Subject:</b>  </label></td>
		<td>{$subject}</td>
	</tr>
	<tr>
		<td><label><b>Message:</b> </label></td>
		<td>{$message}</td>
	</tr>
	<tr>
		<td>{$captcha}</td>
		<td>{$captcha_input}</td>
	</tr>
	<tr>
		<td></td>
		<td><button type="submit" class="btn btn-default">Submit</button></td>
	</tr>
</table>
{$form_end}
</div>
