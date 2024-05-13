<form id="language-switcher" action="{{ route('language.switch') }}" method="POST" class="inline-block">
  @csrf
  <div class="relative inline-flex">
    <select name="language" onchange="this.form.submit()" class="p-0 border border-gray-300 text-gray-600 pl-3 h-8 bg-white hover:border-gray-400 focus:outline-none appearance-none rounded-full">
      <option  value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>
        🇬🇧 EN
      </option>
      <option  value="fr" {{ app()->getLocale() === 'fr' ? 'selected' : '' }}>
        🇫🇷 FR
      </option>
    </select>
  </div>
</form>
