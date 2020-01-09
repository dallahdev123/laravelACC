@extends('layouts.default')
  
  @section('content')
	<hr>
  <h1 class="h1_title"><i class="fa fa-user" style="color: white; font-size: xxx-large;"></i> Ajouter les Infos d'un utilisateur</h1>
   			 <hr>
          <!-- Content section

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
        </form> -->

					<div class="p-3 mb-2 bg-dark">

				    	 <form id="formID" class="frm" action="{{route('automatiqueCallCenter.store')}}" method="post">
						 	{{csrf_field()}}
          
				              <label class="lab">Nom : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">*</span></label>
				              <div class="input-group">
				                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								  <input name="nom" type="text" placeholder="Saisissez votre nom" class="form-control validate[required]" />
							  </div>
							  {!!$errors->first('nom', '<p class="error">:message</p>')!!}

				               <label class="lab">Prenom : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">*</span></label>
				              <div class="input-group">
				                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								  <input name="prenom" type="text" placeholder="Saisissez votre prenom" class="form-control validate[required]" />
							  </div>
							  {!!$errors->first('prenom', '<p class="error">:message</p>')!!}
				              
				               <label class="lab">Adresse : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">*</span></label>
				              <div class="input-group">
				                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
								  <input name="address" type="text" placeholder="Saisissez votre Adresse" class="form-control validate[required]" />
							  </div>
							  {!!$errors->first('address', '<p class="error">:message</p>')!!}

							  <label class="lab">Email : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">*</span></label>
				              <div class="input-group">
				                  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
								  <input type="email" name="email" placeholder="Saisissez votre address mail" class="form-control validate[required]"/>
							  </div>
							  {!!$errors->first('email', '<p class="error">:message</p>')!!}

				               <label class="lab">Tel : <span style="color:red; font-weight: bold; font-family: Arial, sans-serif ;">*</span></label>
				              <div class="input-group">
				                  <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
								  <input name="telephone" type="text" placeholder="Saisissez votre numero de telephone" class="form-control validate[required]" />
							  </div>
							  {!!$errors->first('telephone', '<p class="error">:message</p>')!!}
							  <br>

				          	<button type="submit" name="submit" class="btn btn-primary btn-lg active">AJOUTER L'UTILISATEUR</button>     

				          <hr id='success'>

      					</form>
				   </div>
@endsection