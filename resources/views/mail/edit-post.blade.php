@component('mail::message')
# There is a Edit Post!!!

Your next favourite post has been published!

{{$title}}
{{$updated_at}}

@component('mail::button', ['url' => config('app.url') . '/posts'])
View Blog Archive
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent