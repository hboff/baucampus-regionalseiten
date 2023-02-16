@isset($ortsname)
@isset ($nearestCities)
@foreach ($nearestCities as $city)
@if( $ortsname == $city->ort)
@else
<a href="/{{$city->ort}}/bausachverstaendiger" class="link-dark">Baugutachter {{$city->ort}}</a>
@endif
@endforeach
@endisset
@endisset
