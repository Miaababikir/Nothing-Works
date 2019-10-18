<template>
    <div>
        <div class="flex justify-between items-center">
            <h2 class="text-3xl">All Posts</h2>
            <div>
                <a href="/dashboard/posts/create" class="btn btn-teal">New Post</a>
            </div>
        </div>
        <div class="bg-white shadow-md rounded my-6">
            <table class="text-left w-full border-collapse">
                <thead>
                <tr>
                    <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-900 border-b border-gray-400">
                        ID
                    </th>
                    <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-900 border-b border-gray-400">
                        Title
                    </th>
                    <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-900 border-b border-gray-400">
                        Published
                    </th>
                    <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-900 border-b border-gray-400">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="hover:bg-gray-200" v-for="post in data">
                    <td class="py-4 px-6 border-b border-gray-300">{{ post.id }}</td>
                    <td class="py-4 px-6 border-b border-gray-300">{{ post.title}}</td>
                    <td class="py-4 px-6 border-b border-gray-300">
                        <span class="rounded-full bg-teal-500 uppercase px-2 py-1 text-xs text-white font-bold mr-3">Published</span>
                    </td>
                    <td class="py-4 px-6 border-b border-gray-300">
                        <a :href="`/dashboard/posts/${post.id}/edit`"
                           class="btn btn-teal text-xs"><i
                            class="fa fa-edit"></i></a>
                        <a href="#"
                           class="btn btn-blue text-xs"><i
                            class="fa fa-external-link"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['data']

    }
</script>

<style scoped>

</style>
