@extends('layouts.main-layout')
@section('content')
  <div class="my_home">
    <h1>Employees:</h1>
    <ul>
      @foreach ($employees as $employee)
        <li>
         {{-- <a href="{{ route('show', $post -> id) }}"> --}}
           <strong>{{ $employee -> firstname }} {{ $employee -> lastname }}</strong>
           <p>
             {{ $employee -> location -> state}}
             -
             {{ $employee -> location -> street}}
           </p>
           <small>
             {{-- emplo ha un id,quando si fa -> si vanno a prendere tutti i commenti(altra tabella) associati a quell'id del emplo --}}
             Tasks ({{ $employee -> tasks -> count() }})
             <ul>
               @foreach ($employee -> tasks as $task)

                 <li>
                   #{{ $task -> name }}
                 </li>
               @endforeach
             </ul>
           </small>
        </li>
      @endforeach
  </ul>
  </div>
    <div class="my_home">
      <h1>Posts:</h1>
      <ul>
        @foreach ($posts as $post)
          <li>
             <strong>{{ $post -> title }}</strong>
             <p>{{ $post -> text }}</p>
             <small>
               {{-- post ha un id,quando si fa -> si vanno a prendere tutti i commenti(altra tabella) associati a quell'id del post --}}
               Comments ({{ $post -> comments -> count() }})
               <ul>
                 @foreach ($post -> comments as $comment)

                   <li>
                     #{{ $comment -> text }}
                   </li>
                 @endforeach
               </ul>
               Likes ({{ $post -> users -> count() }})
               <ul>
                 @foreach ($post -> users as $user)
                   <li>
                     {{ $post -> name }}
                   </li>
                 @endforeach
               </ul>
             </small>
          </li>
        @endforeach
    </ul>
    </div>
@endsection
