<a class="project" target="_self" rel="follow" href={{url("/projects/$item->idService")}}>
    <div class="projectPlus">
        <div class="plusContent">
            <h1>
                View project
            </h1>
        </div>
    </div>
    <img src="{{asset('images/'.$item->path) }}" alt="{{$item->alt}}" />
</a>

