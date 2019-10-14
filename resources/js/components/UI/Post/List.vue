<template>
    <ul>
        <li v-for="item in block.data.items">{{ item }}</li>
    </ul>
</template>

<script>
    export default {
        props: ['block'],
    }
</script>
