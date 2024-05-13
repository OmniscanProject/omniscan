<template>
    <div class="px-5 container h-90v flex mx-auto flex-col justify-center items-center h-full md:flex-row gap-20">
        <div class="left">
            <div>
                <h2 class="text-xl md:text-3xl font-bold font-title">{{ $t('homepage.analyze.title') }}</h2>
                <p class="flex items-center justify-start my-6">{{ $t('homepage.analyze.subtitle') }} <x-coolicon-arrow-sub-right-down class="h-4 md:h-5 ml-2"/></p>
            </div>
        </div>
        <div class="right">
            <img :src="'assets/svg/computer.svg'" alt="Analyze" class="w-full">
        </div>
    </div>
</template>


<script setup lang="ts">
    import { setLocale } from '@v/utils/i18n';

    const htmlElement = document.documentElement;
    const bodyLang = htmlElement.getAttribute('lang');

    if (bodyLang) {
        setLocale(bodyLang);
    }
</script>

