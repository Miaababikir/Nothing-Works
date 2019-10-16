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
                <tr class="hover:bg-gray-200">
                    <td class="py-4 px-6 border-b border-gray-300">1</td>
                    <td class="py-4 px-6 border-b border-gray-300">New York</td>
                    <td class="py-4 px-6 border-b border-gray-300">
                        <a href="#"
                           class="btn btn-teal text-xs"><i
                            class="fa fa-edit" @click="$modal.show('edit-tag')"></i></a>
                        <a href="#"
                           class="btn btn-red text-xs" @click="$modal.show('delete-tag')"><i
                            class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr class="hover:bg-gray-200">
                    <td class="py-4 px-6 border-b border-gray-300">2</td>
                    <td class="py-4 px-6 border-b border-gray-300">New York</td>
                    <td class="py-4 px-6 border-b border-gray-300">
                        <a href="#"
                           class="btn btn-teal text-xs"><i
                            class="fa fa-edit" @click="$modal.show('edit-tag')"></i></a>
                        <a href="#"
                           class="btn btn-red text-xs" @click="$modal.show('delete-tag')"><i
                            class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr class="hover:bg-gray-200">
                    <td class="py-4 px-6 border-b border-gray-300">3</td>
                    <td class="py-4 px-6 border-b border-gray-300">New York</td>
                    <td class="py-4 px-6 border-b border-gray-300">
                        <a href="#"
                           class="btn btn-teal text-xs"><i
                            class="fa fa-edit" @click="$modal.show('edit-tag')"></i></a>
                        <a href="#"
                           class="btn btn-red text-xs" @click="$modal.show('delete-tag')"><i
                            class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <tr class="hover:bg-gray-200">
                    <td class="py-4 px-6 border-b border-gray-300">4</td>
                    <td class="py-4 px-6 border-b border-gray-300">New York</td>
                    <td class="py-4 px-6 border-b border-gray-300">
                        <a href="#"
                           class="btn btn-teal text-xs" @click="$modal.show('edit-tag')"><i
                            class="fa fa-edit"></i></a>
                        <a href="#"
                           class="btn btn-red text-xs" @click="$modal.show('delete-tag')"><i
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
                    <form action="#">
                        <div class="mt-4">
                            <label class="block">
                                <span class="text-gray-700">Name</span>
                                <input class="form-input mt-1 block w-full"
                                       placeholder="Your tag name">
                            </label>
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-end">
                                <button type="submit" class="py-2 px-4 mr-2 text-gray-700" @click.prevent="$modal.hide('new-tag')">Cancel</button>
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
                    <form action="#">
                        <div class="mt-4">
                            <label class="block">
                                <span class="text-gray-700">Name</span>
                                <input class="form-input mt-1 block w-full"
                                       placeholder="Your tag name">
                            </label>
                        </div>
                        <div class="mt-4">
                            <div class="flex justify-end">
                                <button type="submit" class="py-2 px-4 mr-2 text-gray-700" @click.prevent="$modal.hide('edit-tag')">Cancel</button>
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
                        <p>Are you sure you want to delete this tag?</p>
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-end">
                            <button type="submit" class="py-2 px-4 mr-2 text-gray-700" @click.prevent="$modal.hide('delete-tag')">Cancel</button>
                            <button type="submit" class="btn btn-red">Delete Tag</button>
                        </div>
                    </div>
                </div>
            </div>
        </modal>

    </div>
</template>

<script>
    export default {}
</script>

<style scoped>

</style>
