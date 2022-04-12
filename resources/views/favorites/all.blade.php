
   @extends('layouts.main')

   @section($title = "Series")
   @section('content')
       <div class="card">
           <div class="card-content">
               <div class="content">

                   @if (count($favorites) > 0)

                   <table class="table is-hoverable">
                       <thead>
                           <tr>
                               <th>#</th>
                               <th>Titre</th>
                               <th></th>
                               <th></th>
                               <th></th>
                           </tr>
                       </thead>
                       <tbody>
                               @foreach($favorites as $serie)

                               @if( $serie->user_id == Auth::user()->id)
                                   <tr>
                                       <td>{{ $serie->id }}</td>
                                       <td><strong>{{ $serie->title }}</strong></td>
                                       <td><a class="button is-primary" href="{{ route('singleSeriePage', $serie->url) }}">Voir</a></td>
                                       <td>
                                           <form action="{{ route('favorites.destroy', $serie->id) }}" method="post">
                                               @csrf
                                               @method('DELETE')
                                               <button class="button is-danger" type="submit">Retirer</button>
                                           </form>
                                       </td>
                                   </tr>
                                   @endif
                               @endforeach
                       </tbody>
                   </table>
                   @else
                       <p>No series found</p>
                   @endif
               </div>
           </div>
       </div>
@endsection
