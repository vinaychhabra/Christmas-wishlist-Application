@component('mail::panel')
# 🎄 Christmas Greetings!

Wishing you a festive and joyful Christmas season! May your days be merry and bright.

@component('mail::button', ['url' => $url, 'color' => 'red'])
Verify Email Address
@endcomponent

If you did not create an account, no further action is required.

Best regards, {{ config('app.name') }}
@endcomponent
