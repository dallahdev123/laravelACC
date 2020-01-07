@extends('layouts.default')
  
  @section('content')
          <!-- Content section -->

        <form class='frm' method="post" action="{{route('automatiqueCallCenter.store')}}">
		{{csrf_field()}}
          <div class="form-group {{ $errors->has('nom') ? 'has-error' : '' }}">
            <label for="formGroupExampleInput">Nom</label>
			<input type="text" name='nom' class="form-control" id="formGroupExampleInput" placeholder="Saisissez votre nom">
			{!!$errors->first('nom', '<span class="help-block">:message</span>')!!}
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Prenom</label>
			<input type="text" name='prenom' class="form-control" id="formGroupExampleInput2" placeholder="Saisissez votre prenom">
			{!!$errors->first('prenom', '<p class="error">:message</p>')!!}
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput3">Address</label>
			<input type="text" name='address' class="form-control" id="formGroupExampleInput3" placeholder="Saisissez votre Adresse">
			{!!$errors->first('address', '<p class="error">:message</p>')!!}
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput4">Email</label>
			<input type="email" name='email' class="form-control" id="formGroupExampleInput4" placeholder="Saisissez votre address mail">
			{!!$errors->first('email', '<p class="error">:message</p>')!!}
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput5">Telephone</label>
			<input type="number" name='telephone' class="form-control" id="formGroupExampleInput5" placeholder="Saisissez votre numero de telephone">
			{!!$errors->first('telephone', '<p class="error">:message</p>')!!}
          </div>
          <button type="submit" class="btn btn-primary" name="">Save</button>
        </form>
@endsection

<?php 
/*	session_start();
	//$db = mysql_connect('localhost', 'Dallah', 'root1234', 'asterix');
		$db= new PDO('mysql:host=localhost;dbname=asterix;charset=utf8','Dallah','root1234');

	// initialize variables
	$prenom = "";
	$nom = "";
	$adresse = "";
	$telephone = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];
		$adresse = $_POST['adresse'];
		$telephone = $_POST['telephone'];

		$db->query("INSERT INTO user (prenom, nom, adresse, telephone) VALUES ('$prenom', '$nom', '$adresse','$telephone')"); 
		$_SESSION['message'] = "Contact sauvegarde"; 
		header('location: index.php');
	}*/
?>	
	