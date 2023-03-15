
<header id="header">

<!-- ======= Header ======= -->
<div class="d-flex flex-column" id="sidebarprofile">
  <!-- ======= profile1 ======= -->
@php
$p = 0;
@endphp
@isset($domainort)
@isset($expert)

@foreach ($expert as $row)
{{$row->LastName}}
{{$row->stadt}}


@endforeach
@endisset
@endisset

  <div class="profile mt-4">
    <img src="/img/logo.png" alt="" class="mt-2" style="    vertical-align: middle;
width: 120px;
height: 120px;
border-style:none;
object-fit: cover;
object-position: center;">
    <h1 class="text-light mb-3"><a href="index.html">Hauptstelle Baucampus</a></h1>
    <p class="text-light text-center mb-0">Telefon: 05722 913800</p>
    <p class="text-light text-center">kontakt@baucampus.de</p>
  </div>
</div>
</header><!-- End Header -->
