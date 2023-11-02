@extends('components/layout')

@section('contents')
    @if (!empty($item->id))
        <ul>
            <li><a href="#toc0">Способность</a></li>
            @if (count($stats) > 0)
                <li><a href="#toc1">Статистика</a></li>
            @endif
        </ul>
        
        <h2 id="toc0">Способность</h2>

        <div class="capabilities">
            {!! $item->capability !!}
        </div>

        @if ($item->image || $item->image2)
        <table class="wiki-combat-content-table">
            <colgroup span="2">
                <col span="2" class="sides_of_combat-mods_table">
            </colgroup>
            @if ($item->image)
                <tr>
                    <td><center>Бот Мод</center></td>
                    <td><img class="combat-mods" src="/images/Combat-bots/{{ $item->image }}" alt="{{ $item->name }}-бот-мод"></td>
                </tr>
            @endif
            @if ($item->image2)
                <tr>
                    <td><center>Альт Мод</center></td>
                    <td><img class="combat-mods" src="/images/Combat-bots/{{ $item->image2 }}" alt="{{ $item->name }}-бот-мод"></td>
                </tr>
            @endif
            <th>{{ $item->name }}</th>
            <th>
                @if ($item->fraction == 'autobot')
                    <img src="/images/Logo/Logo_Autobots.png" alt="Автобот" width="48"> Автобот
                @elseif ($item->fraction == 'decepticon')
                    <img src="/images/Logo/Logo_Decepticons.png" alt="Десептикон" width="48"> Десептикон
                @else
                    ???
                @endif
            </th>
        </table>
        @endif

        @if (count($stats) > 0)
            <h2 id="toc1">Статистика</h2>
            <table class="wiki-content-table">
                <thead>
                    <tr>
                        <th>Уровень</th>
                        <th>⭐⭐<br>Количество Искры К.О.М.Б.А.Т. / {{ $item->char_name }}</th>
                        <th>⭐⭐⭐<br>Количество Искры К.О.М.Б.А.Т. / {{ $item->char_name }}</th>
                        <th>⭐⭐⭐⭐<br>Количество Искры К.О.М.Б.А.Т. / {{ $item->char_name }}</th>
                        <th>⭐⭐⭐⭐⭐<br>Количество Искры К.О.М.Б.А.Т. / {{ $item->char_name }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stats as $item)
                    <tr>
                        <td>{{ $item->level }}</td>
                        <td>{{ $item->s2 }}</td>
                        <td>{{ $item->s3 }}</td>
                        <td>{{ $item->s4 }}</td>
                        <td>{{ $item->s5 }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @else
        No combat bot found
    @endif
@endsection