<form action="{{ route('setLocale', $lang) }}" class="d-block" method="POST">
    @csrf
    <button type="submit" class="btn anm_link ">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" width="18" height="18" />

    </button>



</form>
