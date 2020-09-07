<div class="flex">
    @foreach($userMedia as $uMedia)
    @if(!is_null($uMedia->link))
    {{-- @if ($uMedia->socialmedia_id == $uMedia->socialmedia->id) --}}
    <a href="{{$uMedia->link}}" target="_blank" class="mx-auto">
        <img src="{{asset("storage/SocialPhotos/{$uMedia->socialmedia->socialPhoto}")}}" alt="{{$uMedia->socialmedia->socialName}}" class="w-5 mx-2">
    </a>
    {{-- @endif --}}
    @else
        <img src="{{asset("storage/SocialPhotos/{$uMedia->socialmedia->socialPhoto}")}}" alt="{{$uMedia->socialmedia->socialName}}" class="w-auto bw-social mx-2">
    @endif      
    @endforeach
</div>
{{-- <div class="">
    <div class="">
        @if(!is_null($data))
            <a href="{{$facebok}}">
                <img src="{{$facebooklogo}}" alt="{{$nombre}} - Facebook" class="w-auto">
            </a>
        @else
            <img src="{{$facebooklogo}}" alt="{{$facebook}}" class="w-auto bw-social">
        @endif
    </div>
    <div class="">
        @if(!is_null($data))
            <a href="{{$facebok}}">
                <img src="{{$facebooklogo}}" alt="{{$nombre}} - Facebook" class="w-auto">
            </a>
        @else
            <img src="{{$facebooklogo}}" alt="{{$facebook}}" class="w-auto bw-social">
        @endif
    </div>
    <div class="">
        @if(!is_null($data))
            <a href="{{$facebok}}">
                <img src="{{$facebooklogo}}" alt="{{$nombre}} - Facebook" class="w-auto">
            </a>
        @else
            <img src="{{$facebooklogo}}" alt="{{$facebook}}" class="w-auto bw-social">
        @endif
    </div>
    <div class="">
        @if(!is_null($data))
            <a href="{{$facebok}}">
                <img src="{{$facebooklogo}}" alt="{{$nombre}} - Facebook" class="w-auto">
            </a>
        @else
            <img src="{{$facebooklogo}}" alt="{{$facebook}}" class="w-auto bw-social">
        @endif
    </div>
</div> --}}