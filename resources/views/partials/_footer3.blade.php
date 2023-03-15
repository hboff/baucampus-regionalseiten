<div id="services" class="services">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                    
                    <img src="/img/logo.png" alt="" style="    vertical-align: middle;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
object-position: center;" class="description"><br>

                </div>
                <p class="description">
                @php
                $i=0;
                @endphp        
   
    @foreach($data as $cities)
    @if ($i++ < 16)
    <a class="link-dark" href="/{{$cities->stadt}}/bausachverstaendiger">Baugutachter {{$cities->stadt}}</a>
    @else
    @endif
    @endforeach
    </p>
                

            </div>
        </div>
<div class="container"><a class="description link-secondary mb-5" href="/impressum">Impressum</a>
                    <a class="description link-secondary mb-5" href="/datenschutzerklaerung">Datenschutzerklärung</a>
</div>