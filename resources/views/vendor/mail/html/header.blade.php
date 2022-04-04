<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
    {{--teste para alterar a logo, testa o nome do app--}}
@if (trim($slot) === 'Autentificação-app')
    <img src="http://localhost:8000/img/logo_novacap.png"  class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

{{--{{ asset('img/logo_novacap.png')}}--}}
