@component('mail::message')
# {{ __('messages.contact_email_title') }}

{{ __('messages.contact_email_message') }}

<strong>{{ __('messages.contact_name') }}:</strong> {{ $data['name'] }}
<strong>{{ __('messages.contact_email_label') }}:</strong> {{ $data['email'] }}

## {{ __('messages.contact_message') }}:

{!! nl2br(htmlspecialchars($data['message'])) !!}

---

{{ __('messages.contact_email_footer') }}

@endcomponent
