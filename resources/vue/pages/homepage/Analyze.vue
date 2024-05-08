<template>
    <div class="px-5 container flex mx-auto flex-col justify-center items-center h-full md:flex-row gap-20">
        <div class="left">
            <div>
                <h2 class="text-xl md:text-3xl font-bold font-title">{{ $t('homepage.analyze.title') }}</h2>
                <p class="flex items-center justify-start my-6">{{ $t('homepage.analyze.subtitle') }} <x-coolicon-arrow-sub-right-down class="h-4 md:h-5 ml-2"/></p>
            </div>
        </div>
    </div>
</template>


<script setup lang="ts">
    import { setLocale } from '@/utils/i18n';

    setLocale('fr');
</script>

