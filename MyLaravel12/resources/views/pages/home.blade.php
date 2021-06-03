@extends('layouts.main-layout')
@section('content')
    <div class="my_home">
      <h1>Posts:</h1>
      <ul>
        @foreach ($posts as $post)
          <li>
           {{-- <a href="{{ route('show', $post -> id) }}"> --}}
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
           {{-- </a> --}}
           {{-- <a href="{{ route('edit', $post -> id) }}">
             &#9998;
           </a>
           <a href="{{ route('destroy', $post -> id) }}">
             &#10060;
           </a> --}}
          </li>
        @endforeach
    </ul>
    </div>
@endsection
