@extends('layouts.default')
  
  @section('content')
  <br>
  <br>
  <h1 class="h1_title"><i class="fa fa-user" style="color: white; font-size: xxx-large;"></i> Mes contacts: {{$users->count()}}</h1>
   			 <hr>
  <div class="container"> 
      <div class="row">
          <div id="containt" class="col-md-12 col-sm-12 col-lg-12 col-xl-12 mx-auto">
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
                          <input type="submit"  class="edit_btn" value="Modifier">
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

              <div class="contain">
                <form class="frm1" action="{{route('CallAll')}}" method="POST">
                  {{csrf_field()}}
                  <input type="submit"  class="edit_btn btn-block" class="msg1" value="           Appeler tout les contacts           ">
                </form>
              </div>
          </div>
      </div>
  </div>

          <!-- Content section -->

@endsection