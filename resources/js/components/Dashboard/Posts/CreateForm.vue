<template>
    <div>
        <form action="#" class="mt-6" @submit.prevent="create">
            <div class="flex">
                <div class="w-3/4">
                    <div class="bg-white border rounded shadow min-h-screen">
                        <div class="py-16 px-10">
                            <div class="ml-24">
                                <input type="text" class="border-0 focus:outline-none w-full h-24 text-3xl"
                                       placeholder="Your title here" v-model="post.title">
                            </div>
                            <div id="editorjs" class="w-full min-h-full"></div>
                        </div>
                    </div>
                </div>
                <div class="w-1/4 ml-12">
                    <div class="bg-white border rounded shadow">
                        <div class="p-5">
                            <h3 class="text-xl font-medium">Post details</h3>
                            <div class="mt-4">
                                <div class="mt-4">
                                    <label class="block">
                                        <span class="text-gray-700">Slug</span>
                                        <input class="form-input mt-1 block w-full"
                                               placeholder="getting-started-with.." v-model="slug">
                                    </label>
                                </div>

                                <div class="mt-4">
                                    <div class="block">
                                        <span class="text-gray-700">Tags</span>
                                        <v-select multiple taggable push-tags selectOnTab label="name" :options="tags" v-model="post.tags"/>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="flex justify-end">
                                        <button type="submit" class="btn btn-teal">Publish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>

    import EditorJS from '@editorjs/editorjs';
    import Header from '@editorjs/header';
    import List from '@editorjs/list';
    import Quote from '@editorjs/quote';
    import Code from '@editorjs/code';
    import InlineCode from '@editorjs/inline-code';
    import Marker from '@editorjs/marker';
    import SimpleImage from '@editorjs/simple-image';

    import slugify from 'slugify';
    import vSelect from 'vue-select';

    import 'vue-select/dist/vue-select.css';

    export default {
        components: {vSelect},
        props: ['tags'],
        data() {
            return {
                editor: null,
                post: {
                    title: '',
                    slug: '',
                    content: '',
                    tags: [],
                }
            }
        },
        created() {
            this.editor = new EditorJS({
                placeholder: 'Add your content here',
                tools: {
                    header: Header,
                    list: List,
                    code: Code,
                    inlineCode: InlineCode,
                    marker: Marker,
                    image: SimpleImage,
                }
            });
        },
        computed: {
            slug() {
                return slugify(this.post.title, {lower: true});
            }
        },
        methods: {
            preparePost() {
                this.editor.save().then((outputData) => {
                    this.post.content = JSON.stringify(outputData);
                });

            },
            create() {
                this.preparePost();
                console.log('Created');
            }
        }
    }
</script>

<style scoped>

</style>
