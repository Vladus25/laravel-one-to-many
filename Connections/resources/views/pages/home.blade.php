@extends('layouts.main-layout')
@section('content')

  <main>
    <div>
      <ol>
        @foreach ($employees as $employee)
          <li>
            <div class="line">
              FirstName: {{ $employee -> firstname }} | LastName: {{ $employee -> lastname }} | Ral: {{ $employee -> ral }}
                <ol>
                  @foreach ($employee -> tasks as $task)
                    <li>
                      <div>
                        Title: {{$task -> title}} | Description: {{$task -> description}}
                      </div>
                    </li>
                  @endforeach
                </ol>
            </div>
          </li>
        @endforeach
      </ol>
    </div>
  </main>
@endsection
