<template>
    <FlashMessage :message="message" :errors="error" :loading="loading" />
    <div class="relative bg-gray-300 md:py-20 h-full">
        <div class="px-5 container h-90v flex mx-auto flex-col justify-center items-center h-full md:flex-row gap-20">
            <div class="left">
                <div>
                    <h2 class="text-xl md:text-3xl font-bold font-title">{{ $t('homepage.analyze.title') }}</h2>
                    <p class="flex items-center justify-start my-6">{{ $t('homepage.analyze.subtitle') }} <x-coolicon-arrow-sub-right-down class="h-4 md:h-5 ml-2"/></p>
                    <form
                        id="analyze-form"
                        @submit.prevent="analyzeUrl"
                    >

                        <Input v-model="url" id="url" name="url" type="url" placeholder="https://example.com" input-class="w-full pr-14" container-class="w-full">
                            <button 
                                type="submit" 
                                class="hover:cursor-pointer hover:scale-110 transition-all absolute inset-y-0 right-4"
                            >
                                <img :src="'assets/svg/search.svg'" :alt="$t('homepage.analyze.input.alt')" class="w-8 h-full">
                            </button>
                        </Input>
                    </form>
                </div>
            </div>
            <div class="right">
                <img :src="'assets/svg/computer.svg'" :alt="$t('homepage.analyze.img.alt')" class="w-full">
            </div>
        </div>
    </div>
</template>


<script setup lang="ts">
    import FlashMessage from '@v/components/FlashMessage.vue';
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
        message.value = res.data.message
        loading.value = false
        window.location.href = "/analyze/result";
    })
    .catch(res => {
        if (res.response.data.errors === true) {
            error.value = true
            loading.value = false
            message.value = res.response.data.message
        }
    })
}

</script>

