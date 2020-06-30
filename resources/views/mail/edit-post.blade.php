@component('mail::message')
# There is an Edit Post!!!

Your next favourite post has been published!

<strong>Title:</strong> {{$title}}

{{$updated_at}}

@component('mail::button', ['url' => config('app.url') . '/posts'])
View Blog Archive
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent