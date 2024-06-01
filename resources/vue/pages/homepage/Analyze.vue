<template>
    <FlashMessage :message="message" :errors="error" />
    <Loader :loading="loading" />
    <div class="banner relative bg-primary md:py-20 h-full rounded-b-[40px] md:rounded-b-[80px]">
        <div class="px-5 container h-90v flex mx-auto flex-col justify-center items-center h-full lg:flex-row gap-12 md:gap-18">
            <div class="left w-full lg:w-2/3 xl:px-20">
                <h2 class="text-2xl md:text-4xl font-semibold font-title text-white" v-html="$t('homepage.analyze.title.text', {free: `<span class='text-tertiary'>${ $t('homepage.analyze.title.free') }</span>`})"></h2>
                <p class="flex text-white text-md md:text-lg my-5">{{ $t('homepage.analyze.subtitle.text') }}<img :src="'assets/svg/little-green-arrow-bottom-right.svg'" :alt="$t('homepage.analyze.subtitle.img.alt')" class="ml-4"></p>
                <form
                    id="analyze-form"
                    @submit.prevent="analyzeUrl"
                >

                    <Input v-model="url" id="url" name="url" type="url" placeholder="https://example.com" input-class="w-full pr-16 text-md md:text-xl" container-class="w-full">
                        <button 
                            type="submit" 
                            class="hover:cursor-pointer p-2 hover:scale-110 transition-all absolute inset-y-0 right-4"
                        >
                            <img :src="'assets/svg/search.svg'" :alt="$t('homepage.analyze.input.alt')" class="w-8 h-full">
                        </button>
                    </Input>
                </form>
            </div>
            <div class="right w-2/3 lg:w-1/3">
                <img :src="'assets/gif/screen.gif'" :alt="$t('homepage.analyze.img.alt')" class="mx-auto">
            </div>
        </div>
    </div>
    <div @click="scrollTo()" class="scroll-down hover:cursor-pointer mx-auto relative z-10 w-full">
        <!-- <img :src="'assets/svg/half-circle.svg'" :alt="$t('homepage.analyze.scroll.img.alt')" class="mx-auto"> -->
        <div class="circle mx-auto w-28 md:w-32 bg-primary h-full"></div>
        <img :src="'assets/svg/green-arrow-down.svg'" :alt="$t('homepage.analyze.scroll.img.alt')" class="green-arrow mx-auto absolute w-10 md:w-16 h-10 md:h-16 left-0 right-0">
    </div>
</template>


<script setup lang="ts">
    import FlashMessage from '@v/components/FlashMessage.vue';
import Input from '@v/components/Input.vue';
import Loader from '@v/components/Loader.vue';
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
        window.location.href = `/analyze/result?score=${res.data.data.score}&url=${url.value}`;
    })
    .catch(res => {
        loading.value = false
        if (res.response.data.errors === true) {
            error.value = true
            message.value = res.response.data.message
        }
    })
}

function scrollTo() {
    document.getElementById("discover-section").scrollIntoView({ behavior: "smooth", block: "start", inline: "nearest" });
}
</script>

