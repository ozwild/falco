<span class="locale-indicator">
    @if(App::getLocale() === "en")
        <div class="layer" style="background: url('{{ asset('img/flags/united-states.svg') }}')"
             title="English language indicator"> </div>
    @elseif(App::getLocale() == "es")
        <div class="layer" style="background: url('{{ asset('img/flags/spain.svg') }}')"
             title="Spanish language indicator"> </div>
    @endif
</span>