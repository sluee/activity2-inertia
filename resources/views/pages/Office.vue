<template>
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900">
        <div class="items-center hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                 <li>
                    <Link href="/" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Employee</Link>
                </li>
                <li>
                    <Link href="offices" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Office</Link>
                </li>
                <li>
                    <Link href="items" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Items</Link>
                </li>
            </ul>
        </div>
    </nav>
    <div class="p-8">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <h1 class="text-4xl"> List of Office</h1>
            <hr>
            <table class="w-full text-sm text-left text-white dark:text-white mt-4">
                <thead class="text-xs text-white uppercase bg-gray-50 dark:bg-gray-700 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Office head
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Building
                        </th>
                    </tr>
                </thead>
                <tbody v-for="office in offices" :key="office.id">
                    <tr class="bg-white border-b dark:bg-gray-500 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ office.name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ office.employee.last_name }} , {{office. employee.first_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{office.building}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3'

    defineProps({
        offices: Array,
    })
</script>
