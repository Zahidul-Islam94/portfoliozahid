{{-- @for ($i=0;$i<5;$i++)
   <button class="btn btn-success">Add</button> {{ $i+1 }} <br>
@endfor --}}

{{-- @foreach ($countries as $c)
    {{ $c }} <br>
@endforeach --}}

{{-- @forelse ( $countries as $c )
    {{ $c }}
@empty
    <p>No country</p>
@endforelse --}}

{{-- @if ($status==true)
    <p>Login success</p>
@endif --}}

{{-- @if ()
    {{-- if body --}}
{{-- @elseif () --}}
    {{-- else if body --}}
{{-- @else --}}
    {{-- else --}}
{{-- @endif --}}

{{--  @foreach ($countries as $c)
    {{ $loop->count }} <br>
    @break
@endforeach  --}}

{{-- @php
    echo "Hello World!";
@endphp --}}
 