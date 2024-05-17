<template>
    <div :class="`relative ${containerClass}`">
        <input
            ref="input"
            :class="`${inputClass} border-black py-2 pl-6 h-14 focus:border-gray-300 focus:ring focus:ring-gray-300 focus:ring-opacity-50 rounded-full`"
            :value="modelValue"
            :id="id"
            :name="name"
            :type="type"
            :placeholder="placeholder"
            required
            @input="$emit('update:modelValue', $event.target?.value)" 
            />
            <slot></slot>
    </div>
</template>

<script setup lang="ts">
    import { onMounted, ref } from 'vue';

    const props = defineProps({
        modelValue: String,
        id: String,
        name: String,
        type: String,
        placeholder: String,
        inputClass: String,
        containerClass: String,
    })

    defineEmits(['update:modelValue'])

    const input = ref<HTMLInputElement | null>(null)

    onMounted(() => {
        if (input.value && input.value.hasAttribute('autofocus')) {
            input.value.focus()
        }
    })
</script>

<style scoped lang="scss">
</style>
