<form action="{{ route('language.switch') }}" method="POST" class="inline-block">
  @csrf
  <div class="relative inline-flex">
    <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-5.364-5.364-14.072-5.364-19.436 0-5.364 5.364-5.364 14.072 0 19.436l171.144 171.144c5.364 5.364 14.072 5.364 19.436 0L388.758 27.258c5.364-5.364 5.364-14.072 0-19.436s-14.072-5.364-19.436 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
    <select name="language" onchange="this.form.submit()" class="border border-gray-300 text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none rounded-full">
      <option  value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>
        🇬🇧 EN
      </option>
      <option  value="fr" {{ app()->getLocale() === 'fr' ? 'selected' : '' }}>
        🇫🇷 FR
      </option>
    </select>
  </div>
</form>

