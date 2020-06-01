@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/user_profile_styles.css') }}" >
<h2 class="myWhiteCenter">Historia wypożyczeń</h2>
    
    @if ($borrowings->isEmpty() && $afterDeadline->isEmpty())
        <h2 class="myh2 text-center">Nie masz jeszcze żadnych wypożyczeń</h2>
    @else
    
        <div class="container">

            <table class="table myTable myfont-16">
                <tr class="">
                    <th>Tytuł</th>
                    <th>Data</th>
                    <th>Status</th>
                </tr>
                
                @foreach ($afterDeadline as $b)

                    <tr>
                        <td> {{ $b->film->title }} </td>
                        <td> {{ $b->created_at }} </td>
                        <td><span class="text-danger">Przekroczony termin</span></td>
                    </tr>
                @endforeach
               
                @foreach ($borrowings as $b)

                    <tr>
                        <td> {{ $b->film->title }} </td>
                        <td> {{ $b->created_at }} </td>
                        <td>
                            @if ($b->returned) 
                                <span class="text-success">Zwrócone</span>
                            @else
                                <span>Wypożyczone</span>
                            @endif
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    @endif
@endsection