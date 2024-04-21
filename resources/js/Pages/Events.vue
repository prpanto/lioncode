<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({ events: Object });
</script>

<template>

    <Head title="Events" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Events</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 p-4">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">ID</th>
                                    <th scope="col" class="px-6 py-3">Priority</th>
                                    <th scope="col" class="px-6 py-3">Status</th>
                                    <th scope="col" class="px-6 py-3">Published</th>
                                    <th scope="col" class="px-6 py-3">Release Data Files</th>
                                    <th scope="col" class="px-6 py-3">Expiration</th>
                                    <th scope="col" class="px-6 py-3">Title</th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr v-for="event in events" :key="event.id" class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ event.id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ event.priority }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ event.status }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ event.published }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ event.release_date_files }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ event.expiration }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ event.title }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
