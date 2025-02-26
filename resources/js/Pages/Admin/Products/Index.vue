<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import AdminLayout from "@/Pages/Admin/Component/AdminLayout.vue";
import ProductLists from "@/Pages/Admin/Products/ProductLists.vue";

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
})
</script>

<template>
    <AdminLayout>
        <ProductLists>

        </ProductLists>
    </AdminLayout>
</template>


