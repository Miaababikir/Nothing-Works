<template>
    <pre class="mb-6"><code class="text-base" v-html="block.data.code"></code></pre>
</template>

<script>

    import hljs from 'highlight.js';
    import 'highlight.js/styles/github.css';

    export default {
        props: ['block'],
        mounted() {
            hljs.initHighlightingOnLoad({languages: []});
        }
    }
</script>
