<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({ instructors: Object });
</script>

<template>

    <Head title="Instructors" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Instructors</h2>
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
                                    <th scope="col" class="px-6 py-3">Comment Status</th>
                                    <th scope="col" class="px-6 py-3">Title</th>
                                    <th scope="col" class="px-6 py-3">Short Title</th>
                                    <th scope="col" class="px-6 py-3">Subtitle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="instructor in instructors" :key="instructor.id" class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ instructor.id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ instructor.priority }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ instructor.status }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ instructor.comment_status }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ instructor.title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ instructor.short_title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ instructor.subtitle }}
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
