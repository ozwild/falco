{{ html()->form('post', url('accounts'))->addClass('')->open() }}

{{ $slot }}

{{ html()->form()->close() }}