
    @foreach($regions as $region)
    @if(str_contains(url()->current(), "baucampus.de"))
    @if ($region->Country == 'Germany')
    <a class="link-dark" href="/baugutachter/{{$region->Region}}">Baugutachter {{$region->Region}}</a><br>
    @endif
@endif
@if(str_contains(url()->current(), "baucampus.be"))
@if ($region->Country == 'Austria')
    <a class="link-dark" href="/baugutachter/{{$region->Region}}">Baugutachter {{$region->Region}}</a><br>
    @endif
    @endif
    @endforeach


