@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/user_profile_styles.css') }}" >
<h2 class="myWhiteCenter">Historia wypożyczeń</h2>
    
    @if ($borrowings->isEmpty() && $afterDeadline->isEmpty())
        <h2 class="myh2">Nie masz jeszcze żadnych wypożyczeń</h2>
    @else
    
        <div class="container">

            <table class="table myTable">
                
                @foreach ($afterDeadline as $b)

                    <tr>
                        <td> {{ $b->film->title }} </td>
                        <td> {{ $b->created_at }} </td>
                        <td><span style="color: red;">Przekroczony termin</span><td>
                    </tr>
                @endforeach

            </table>

            <table class="table myTable">
                
                @foreach ($borrowings as $b)

                    <tr>
                        <td> {{ $b->film->title }} </td>
                        <td> {{ $b->created_at }} </td>
                        <td>
                            @if ($b->returned) 
                                <span style="color: green;">Zwrócone</span>
                            @else
                                <span style="color: white;">Wypożyczone</span>
                            @endif
                        <td>
                    </tr>
                @endforeach

            </table>
        </div>
    @endif
@endsection