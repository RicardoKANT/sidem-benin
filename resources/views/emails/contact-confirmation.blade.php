@component('mail::message')
# {{ __('messages.contact_confirmation_title') }}

{{ __('messages.contact_confirmation_message') }}

{{ __('messages.contact_confirmation_greeting') }} {{ $data['name'] }},

{{ __('messages.contact_confirmation_text') }}

@component('mail::button', ['url' => route('welcome')])
{{ __('messages.nav_home') }}
@endcomponent

{{ __('messages.contact_confirmation_footer') }}

@endcomponent
