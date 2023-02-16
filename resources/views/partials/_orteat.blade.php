@php
$i=0;
@endphp
@foreach($ortat as $orte)
@if ($i++ < 50)
<a href="/{{$orte->ort}}/bausachverstaendiger">Baugutachter {{$orte['ort']}}</a>
@else
@endif
@endforeach


