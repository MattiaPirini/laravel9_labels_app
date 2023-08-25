@component('mail::message')
Hello{{ $name }},
you are invited to do this thing<BR>
@component('mail::button',['url'=>'https://www.ossocubo.com'])
Call to action
@endcomponent

@endcomponent

