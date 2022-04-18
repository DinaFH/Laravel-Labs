<?php //$names=['ahmed','mohamed','ali']; ?>

@foreach ($names as $name)
    <p>This is user {{ $name}}</p>
    
@endforeach