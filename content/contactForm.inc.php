<form class="form-horizontal" method="post" action="contact.php">
<fieldset>

<!-- Form Name -->
<legend>Ecrivez-nous</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mail">e-mail</label>
  <div class="col-md-4">
  <input id="mail" name="mail" type="email" placeholder="tapez votre e-mail" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sujet">sujet</label>
  <div class="col-md-4">
  <input id="sujet" name="sujet" type="text" placeholder="quel est le sujet?" class="form-control input-md">

  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="message">Votre message</label>
  <div class="col-md-4">
    <textarea class="form-control" id="message" name="message"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="envoyer"></label>
  <div class="col-md-4">
    <button type="submit" id="envoyer" name="envoyer" class="btn btn-primary">Envoyer</button>

  </div>
</div>

</fieldset>
</form>
