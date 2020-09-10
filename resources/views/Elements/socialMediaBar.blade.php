<div class="flex">
    @foreach($userMedia as $uMedia)
    @if(!is_null($uMedia->link))
    <a href="{{$uMedia->link}}" target="_blank" class="mx-auto">
        <img src="{{asset("storage/SocialPhotos/{$uMedia->socialmedia->socialPhoto}")}}" alt="{{$uMedia->socialmedia->socialName}}" class="w-5 mx-2">
    </a>
    @endif      
    @endforeach
</div>
