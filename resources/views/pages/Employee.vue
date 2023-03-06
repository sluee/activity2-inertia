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
            <h1 class="text-4xl"> List of Employees</h1>
            <hr>
            <table class="w-full text-sm text-left text-white dark:text-white mt-4">
                <thead class="text-xs text-white uppercase bg-gray-50 dark:bg-gray-700 dark:text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Lastname
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Firstname
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Designation
                        </th>
                    </tr>
                </thead>
                <tbody v-for = "emp of employees">
                    <tr class="bg-white border-b dark:bg-gray-500 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{ emp.id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ emp.last_name }}
                        </td>
                        <td class="px-6 py-4">
                            {{emp.first_name}}
                        </td>
                        <td class="px-6 py-4">
                            {{emp.designation}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/inertia-vue3'
    import NProgress from 'nprogress'
    import { router } from '@inertiajs/vue3'

    defineProps({
        employees: Array
    })
let timeout = null

router.on('start', () => {
  timeout = setTimeout(() => NProgress.start(), 100)

})

router.on('progress', (event) => {
  if (NProgress.isStarted() && event.detail.progress.percentage) {
    NProgress.set((event.detail.progress.percentage / 100) * 0.9)

  }
})

router.on('finish', (event) => {
  clearTimeout(timeout)
  if (!NProgress.isStarted()) {
    return
  } else if (event.detail.visit.completed) {
    NProgress.done()
  } else if (event.detail.visit.interrupted) {
    NProgress.set(0)
  } else if (event.detail.visit.cancelled) {
    NProgress.done()
    NProgress.remove()
  }
})
</script>
