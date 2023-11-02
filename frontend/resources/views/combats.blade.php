@extends('components/layout')

@section('contents')
    @if (count($items) > 0)
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Fraction</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href="/combat-bots/{{ $item->id }}">
                            {{ $item->name }}
                        </a>
                    </td>
                    <td>
                        @if ($item->fraction == 'autobot')
                            <img src="/images/Logo/Logo_Autobots.png" alt="Автобот" width="48"> Автобот
                        @elseif ($item->fraction == 'decepticon')
                            <img src="/images/Logo/Logo_Decepticons.png" alt="Десептикон" width="48"> Десептикон
                        @else
                            ???
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="bg-error">
            No records founds
        </div>
    @endif
@endsection