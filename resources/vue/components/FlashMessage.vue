<template>
    <div id="flash-message" :class="`${errors ? 'bg-red-500' : 'bg-green-500'} ${visible ? 'show' : ''} absolute z-10 p-3 w-max mx-auto left-0 right-0 flex items-center justify-center rounded-md`">
        <div class="text-white text-center">
        {{ message }}
        </div>
    </div>
</template>

<script setup lang="ts">
import { ref, watch } from 'vue';


const props = defineProps({
  message: String,
  errors: Boolean,
  loading: Boolean
});

const visible = ref(false);

watch(() => props.message, () => {
    visible.value = true;
    setTimeout(() => {
        visible.value = false;
    }, 3000);
});
</script>

<style scoped lang="scss">
    #flash-message {
        transform: translateY(-100%);
        transition: transform 0.5s;
        &.show {
            transform: translateY(100%);
        }
    }
</style>
