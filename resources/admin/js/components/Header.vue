<template>
  <header
    class="bg-gray-100 h-16 flex items-center justify-between px-6 shadow"
  >
    <div class="text-gray-600 font-bold">
      <i class="fas fa-bars cursor-pointer"></i>
    </div>
    <div class="flex items-center">
      <div class="mr-6">
        <i class="fas fa-bell text-gray-600 cursor-pointer"></i>
      </div>
      <div
        class="bg-gray-200 rounded-full h-10 w-10 flex items-center justify-center cursor-pointer"
      >
        <i class="fas fa-user"></i>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: "Header",
};
</script>
