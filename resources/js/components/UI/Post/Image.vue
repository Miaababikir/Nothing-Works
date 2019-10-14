<template>
    <p class="text-center"><img :src="block.data.file.url" style="display: inline"/></p>
</template>

<script>
    export default {
        props: ['block'],
    }
</script>
