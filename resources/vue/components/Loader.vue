<template>
    <div id="loader" :class="visible ? 'block' : 'hidden'">
        <div class="fixed inset-0 bg-gray-600 opacity-70 flex items-center justify-center z-40"></div>
        <div class="inset-0 absolute flex items-center justify-center z-50 w-max h-max m-auto shadow-lg bg-white rounded-lg">
            <img src="/assets/gif/loader.gif" alt="OmniScan - loader" class="loader-img w-full">
        </div>
    </div>
</template>
<script setup lang="ts">
import { ref, watch } from 'vue';

const props = defineProps({
    loading: Boolean
});

const visible = ref(false)

watch(() => props.loading == true, () => {
    visible.value = true;
});

</script>

<style scoped lang="scss">
#loader {
    .loader-img {
        width: 100px;
        height: 100px;
    }
}
</style>
