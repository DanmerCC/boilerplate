<template>
  <div class="flex h-screen">
    <!-- Sidebar -->
    <SideBar />

    <div class="flex-1 flex flex-col">
      <!-- Header -->
      <Header />

      <!-- Main Content -->
      <main class="p-6 bg-gray-100 flex-1 overflow-auto">
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-white rounded-lg shadow p-4">
            <h2 class="text-xl font-semibold">Revenue</h2>
            <p class="text-gray-600 mt-2">$50,000</p>
          </div>
          <div class="bg-white rounded-lg shadow p-4">
            <h2 class="text-xl font-semibold">Users</h2>
            <p class="text-gray-600 mt-2">1,200</p>
          </div>
          <div class="bg-white rounded-lg shadow p-4">
            <h2 class="text-xl font-semibold">Sales</h2>
            <p class="text-gray-600 mt-2">300</p>
          </div>
        </section>
      </main>
    </div>
  </div>
</template>

<script>
import SideBar from "./SideBar.vue";
import Header from "./Header.vue";

export default {
  name: "Dashboard",
  components: {
    SideBar,
    Header,
  },
};
</script>

<style scoped>
/* Estilos adicionales si es necesario */
</style>
