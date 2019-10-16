<template>
    <div>
        <div class="flex justify-between items-center">
            <h2 class="text-3xl">All Tags</h2>
            <div>
                <a href="#" class="btn btn-teal" @click="$modal.show('new-tag')">New Tag</a>
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
                        Name
                    </th>
                    <th class="py-4 px-6 bg-gray-100 font-bold uppercase text-sm text-gray-900 border-b border-gray-400">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="hover:bg-gray-200" v-for="tag in data">
                    <td class="py-4 px-6 border-b border-gray-300">{{ tag.id }}</td>
                    <td class="py-4 px-6 border-b border-gray-300">{{ tag.name }}</td>
                    <td class="py-4 px-6 border-b border-gray-300">
                        <a href="#"
                           class="btn btn-teal text-xs"><i
                            class="fa fa-edit" @click="editTag(tag)"></i></a>
                        <a href="#"
                           class="btn btn-red text-xs" @click="showTag(tag)"><i
                            class="fa fa-trash"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <modal name="new-tag" height="auto">
            <div class="p-5">
                <div class="mb-4">
                    <h2><i aria-hidden="true" class="fa fa-tag fa-fw text-teal-400"></i> Add Tag</h2>
                </div>
                <hr>
                <div>
                    <form @submit.prevent="addTag">
                        <div class="mt-4">
                            <label class="block">
                                <span class="text-gray-700">Name</span>
                                <input class="form-input mt-1 block w-full"
                                       placeholder="Your tag name" required v-model="tag.name">
                            </label>
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-end">
                                <button type="submit" class="py-2 px-4 mr-2 text-gray-700"
                                        @click.prevent="$modal.hide('new-tag')">Cancel
                                </button>
                                <button type="submit" class="btn btn-teal">Add Tag</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </modal>

        <modal name="edit-tag" height="auto">
            <div class="p-5">
                <div class="mb-4">
                    <h2><i aria-hidden="true" class="fa fa-tag fa-fw text-teal-400"></i> Edit Tag</h2>
                </div>
                <hr>
                <div>
                    <form @submit.prevent="updateTag">
                        <div class="mt-4">
                            <label class="block">
                                <span class="text-gray-700">Name</span>
                                <input class="form-input mt-1 block w-full"
                                       placeholder="Your tag name" v-model="tag.name">
                            </label>
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-end">
                                <button type="submit" class="py-2 px-4 mr-2 text-gray-700"
                                        @click.prevent="$modal.hide('edit-tag')">Cancel
                                </button>
                                <button type="submit" class="btn btn-teal">Edit Tag</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </modal>

        <modal name="delete-tag" height="auto">
            <div class="p-5">
                <div class="mb-4">
                    <h2>Delete Tag</h2>
                </div>
                <hr>
                <div>
                    <div class="mt-4">
                        <p>Are you sure you want to delete <strong>{{ tag.name }}</strong> tag?</p>
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-end">
                            <button type="submit" class="py-2 px-4 mr-2 text-gray-700"
                                    @click.prevent="$modal.hide('delete-tag')">Cancel
                            </button>
                            <button class="btn btn-red" @click="deleteTag">Delete Tag</button>
                        </div>
                    </div>
                </div>
            </div>
        </modal>

    </div>
</template>

<script>
    export default {
        props: ['data'],
        data() {
            return {
                tag: {
                    name: ''
                }
            }
        },

        methods: {
            addTag() {
                axios.post('/dashboard/tags', {
                    name: this.tag.name
                })
                    .then(response => {
                        this.tag = {};
                        console.log(response);
                        location.reload();
                    })
                    .catch(error => {
                        console.log(error);
                    });
            },
            editTag(tag) {
                this.tag = tag;
                this.$modal.show('edit-tag');
            },
            updateTag() {
                axios.put(`/dashboard/tags/${this.tag.id}`, {
                    name: this.tag.name
                })
                    .then(response => {
                        this.tag = {};
                        console.log(response);
                        location.reload();
                    })
                    .catch(error => {
                        console.log(error);
                    });
            },
            showTag(tag) {
                this.tag = tag;
                this.$modal.show('delete-tag');
            },
            deleteTag() {
                axios.delete(`/dashboard/tags/${this.tag.id}`)
                    .then(response => {
                        this.tag = {};
                        console.log(response);
                        location.reload();
                    })
                    .catch(error => {
                        console.log(error);
                    })
            }
        }
    }
</script>

<style scoped>

</style>
