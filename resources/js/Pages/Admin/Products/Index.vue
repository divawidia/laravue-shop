<template>
    <AdminLayout>
        <main class="p-4 md:ml-64 h-auto pt-20">

        </main>
    </AdminLayout>
</template>

<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import AdminLayout from "@/Pages/Admin/Component/AdminLayout.vue";

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>
