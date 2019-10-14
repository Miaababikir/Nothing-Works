<template>
    <component :is="tag">{{ block.data.text }}</component>
</template>

<script>

    export default {
        props: ['block'],
        computed: {
            tag() {
                return `h${this.block.data.level}`;
            },
        },
    }
</script>

<style scoped>

</style>
