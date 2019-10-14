<template>
    <p class="text-center"><img :src="block.data.file.url"/></p>
</template>

<script>
    export default {
        props: ['block'],
    }
</script>
