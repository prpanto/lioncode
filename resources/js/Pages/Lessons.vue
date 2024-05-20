<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({ lessons: Object | Array });
</script>

<template>

    <Head title="Lessons" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Lessons</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 p-4">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3">ID</th>
                                    <th scope="col" class="px-6 py-3">Status</th>
                                    <th scope="col" class="px-6 py-3">Title</th>
                                    <th scope="col" class="px-6 py-3">Subtitle</th>
                                    <th scope="col" class="px-6 py-3">Summary</th>
                                    <th scope="col" class="px-6 py-3">Body</th>
                                    <th scope="col" class="px-6 py-3">Vimeo Video</th>
                                    <th scope="col" class="px-6 py-3">Vimeo Duration</th>
                                    <th scope="col" class="px-6 py-3">Links</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="lesson in lessons" :key="lesson.id" class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ lesson.id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ lesson.status }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ lesson.title }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ lesson.subtitle }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ lesson.summary }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ lesson.body }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ lesson.vimeo_video }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ lesson.vimeo_duration }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ lesson.links }}
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
