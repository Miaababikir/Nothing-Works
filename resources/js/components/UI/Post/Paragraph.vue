<template>
    <p v-html="block.data.text"></p>
</template>

<script>
    export default {
        props: ['block'],
    }
</script>
