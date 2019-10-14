<template>
    <img :src="block.data.file.url" />
</template>

<script>
    export default {
        props: ['block'],
    }
</script>
