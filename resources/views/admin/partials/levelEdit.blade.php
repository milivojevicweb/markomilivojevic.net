@if($item->idLevel==$level)
    <option selected value={{$item->idLevel}}>{{$item->level}}</option>
@else
    <option value={{$item->idLevel}}>{{$item->level}}</option>
@endif
