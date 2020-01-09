@extends('layouts.default')
  
  @section('content')
          <h1 class="h1_title">Utilisateur #{{$contact->id}}</h1>
   			 <hr>
              <div class="container"> 
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Prenom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">email</th>
                    <th scope="col">Telephone</th>
                  </tr>
                </thead>
               
                  <tr>
                    <td><?php echo $contact['prenom']; ?></td>
                    <td><?php echo $contact['nom']; ?></td>
                    <td><?php echo $contact['address']; ?></td>
                    <td><?php echo $contact['email']; ?></td>
                    <td><?php echo $contact['telephone']; ?></td>
                  </tr>
            
              </table> 
              </div>
  @endsection
              