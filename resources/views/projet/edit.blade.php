@extends('layouts.default')
  
  @section('content')
  <hr>
  <hr>
          <!-- Content section -->
      <h1 class="h1_title"><i class="fa fa-user" style="color: white; font-size: xxx-large;"></i> Editer l'utilisateur #{{$userEdit->id}}</h1>
      <hr>

        <form class='frm' method="post" action="{{route('automatiqueCallCenter.update', $userEdit)}}">
		{{csrf_field()}}
		
		 <!--<input type="hidden" name='method' value="PUT">-->
		 {{method_field('PUT')}}
          <div class="form-group">
            <label for="formGroupExampleInput">Nom</label>
			<input type="text" name='nom' class="form-control" id="formGroupExampleInput" placeholder="Saisissez votre nom" value="{{old('nom') ? old('nom') : $userEdit->nom}}" >
			{!!$errors->first('nom', '<p class="error">:message</p>')!!}
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Prenom</label>
			<input type="text" name='prenom' class="form-control" id="formGroupExampleInput2" placeholder="Saisissez votre prenom" value="{{old('prenom') ? old('prenom') : $userEdit->prenom}}">
			{!!$errors->first('prenom', '<p class="error">:message</p>')!!}
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput3">Address</label>
			<input type="text" name='address' class="form-control" id="formGroupExampleInput3" placeholder="Saisissez votre Adresse" value="{{old('address') ? old('address') :$userEdit->address}}">
			{!!$errors->first('address', '<p class="error">:message</p>')!!}
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput4">Email</label>
			<input type="email" name='email' class="form-control" id="formGroupExampleInput4" placeholder="Saisissez votre address mail" value="{{old('email') ? old('email') : $userEdit->email}}">
			{!!$errors->first('email', '<p class="error">:message</p>')!!}
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput5">Telephone</label>
			<input type="number" name='telephone' class="form-control" id="formGroupExampleInput5" placeholder="Saisissez votre numero de telephone" value="{{old('telephone') ? old('telephone') : $userEdit->telephone}}">
			{!!$errors->first('telephone', '<p class="error">:message</p>')!!}
          </div>
          <button type="submit" class="btn btn-primary" name="">Modifier</button>
        </form>
@endsection