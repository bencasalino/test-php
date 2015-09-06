<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Join</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Name</label>
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="First &amp; Last Name" class="form-control input-md" required="">
  <span class="help-block">Input Name</span>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Join a Team</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="Team A" checked="checked">
      Team A
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Team B">
      Team B
    </label>
	</div>
  <div class="radio">
    <label for="radios-2">
      <input type="radio" name="radios" id="radios-2" value="Team C">
      Team C
    </label>
	</div>
  <div class="radio">
    <label for="radios-3">
      <input type="radio" name="radios" id="radios-3" value="Team D">
      Team D
    </label>
	</div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-success">Go! </button>
  </div>
</div>

</fieldset>
</form>
