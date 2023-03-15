<div id="services" class="services">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up">
                    
                    <img src="/img/logo.png" alt="" style="    vertical-align: middle;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
object-position: center;" class="description"><br>

                </div>
                
                
                
                <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <p class="description">
    

@isset($ortsname)
@isset ($nearestCities)
@foreach ($nearestCities as $city)
@if($ortsname == $city->stadt_umlaut)
@else
<a href="/{{$city->stadt_umlaut}}/bausachverstaendiger" class="link-dark">Baugutachter {{$city->stadt}}</a>
@endif
@endforeach
@endisset
@endisset
</div>
        </div>
        <div class="container"><a class="description link-secondary mb-5" href="/impressum">Impressum</a>
                    <a class="description link-secondary mb-5" href="/datenschutzerklaerung">Datenschutzerklärung</a>
</div>