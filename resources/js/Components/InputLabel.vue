<script setup>
defineProps(['value']);
</script>

<template>
    <label class="block font-medium text-sm text-gray-800 mb-2 capitalize">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
