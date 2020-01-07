@extends('layouts.default')
  
  @section('content')
  <br>
  <br>
  <br>
  <?php  //connection dans la base de donnees
  session_start();
  ?>
  <?php if (isset($_SESSION['message1'])): ?>
  <div class="msg">
			<?php
				echo $_SESSION['message1']; 
				unset($_SESSION['message1']);
      ?>
  </div>
  <?php endif ?>
  <h1 class="users">Mes contacts:{{$users->count()}}</h1>
  <div class="container"> 
	<table class="table table-striped">
		<thead>
			<tr>
        <th scope="col">Prenom</th>
				<th scope="col">Nom</th>
				<th scope="col">Adresse</th>
        <th scope="col">email</th>
				<th scope="col">Telephone</th>
				<th scope="col" colspan="3">Action</th>
			</tr>
		</thead>
		@if(count($users)>0)
		@foreach($users as $user)
			<tr>
        <td><a href="{{route('automatiqueCallCenter.show', ['automatiqueCallCenter' => $user->id])}}"><?php echo $user['prenom']; ?></a></td>
				<td><?php echo $user['nom']; ?></td>
				<td><?php echo $user['address']; ?></td>
        <td><?php echo $user['email']; ?></td>
				<td><?php echo $user['telephone']; ?></td>
				<td>
            <form action="{{route('automatiqueCallCenter.edit', ['automatiqueCallCenter' => $user->id])}}" method="GET">
              {{csrf_field()}}
              <input type="submit"  class="edit_btn" class="del_btn" value="Modifier">
            </form>
				</td>
				<td>
            <form action="{{route('automatiqueCallCenter.destroy', ['automatiqueCallCenter' => $user->id])}}" method="post">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <input type="submit" class="del_btn" value="Supprimer">
            </form>
				</td>
				<td>
            <form action="{{route('Call',['id' => $user->id])}}" method="POST">
              {{csrf_field()}}
              <input type="submit"  class="edit_btn"  class="call_btn" value="Appeler">
            </form>
				</td>
			</tr>
		@endforeach

    @else
      <h1>Aucun utilisateur</h1>
    @endif
	</table> 
  </div>
          <div class="contain">
            <form class="frm1" action="{{route('CallAll')}}" method="POST">
              {{csrf_field()}}
              <input type="submit"  class="edit_btn btn-block" class="msg1" value="           Appeler tout les contacts           ">
            </form>
          </div>

          <!-- Content section -->

        <form class='frm' method="post" action="controller.php">
          <div class="form-group">
            <label for="formGroupExampleInput">Nom</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Saisissez votre nom">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Prenom</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Saisissez votre prenom">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput3">Address</label>
            <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Saisissez votre Adresse">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput4">Email</label>
            <input type="email" class="form-control" id="formGroupExampleInput4" placeholder="Saisissez votre address mail">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput5">Telephone</label>
            <input type="number" class="form-control" id="formGroupExampleInput5" placeholder="Saisissez votre numero de telephone">
          </div>
          <button type="submit" class="btn btn-primary" name="">Save</button>
        </form>
@endsection