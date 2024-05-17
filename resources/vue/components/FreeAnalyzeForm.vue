<template>
    <form
        id="analyze-form"
        @submit.prevent="analyzeUrl"
    >
        <Input v-model="url" id="url" name="url" type="url" placeholder="https://example.com" input-class="w-full pr-14 text-md md:text-xl" container-class="w-full">
            <button 
                type="submit" 
                class="hover:cursor-pointer p-2 hover:scale-110 transition-all absolute inset-y-0 right-4"
            >
                <img :src="'assets/svg/search.svg'" :alt="$t('homepage.analyze.input.alt')" class="w-8 h-full">
            </button>
        </Input>
    </form>
</template>


<script setup lang="ts">
import Input from '@v/components/Input.vue';
import { setLocale } from '@v/utils/i18n';

    const htmlElement = document.documentElement;
    const bodyLang = htmlElement.getAttribute('lang');

    if (bodyLang) {
        setLocale(bodyLang);
    }


import axios from 'axios';

import { ref } from 'vue';

const url = ref('');
const error = ref(false);
const message = ref('');
const loading = ref(false);

function analyzeUrl() {
    loading.value = true
        
    axios.post('/api/analyze', { url: url.value }, { headers: { 'Accept-Language': htmlElement.lang } })
    .then(res => {
        error.value = false
        // message.value = res.data.message
        loading.value = false
        window.location.href = `/analyze/result?url="${url.value}"`;
    })
    .catch(res => {
        loading.value = false
        if (res.response.data.errors === true) {
            error.value = true
            message.value = res.response.data.message
        }
    })
}
</script>

