<template>
  <aside class="bg-gray-800 w-64 h-screen text-white flex-shrink-0">
    <div class="p-5 text-center font-bold text-lg">Admin One</div>
    <nav class="mt-10">
      <ul>
        <li class="px-4 py-2 hover:bg-gray-700">
          <router-link to="/dashboard" class="block">Dashboard</router-link>
        </li>
        <li class="px-4 py-2 hover:bg-gray-700">
          <router-link to="/users" class="block">Users</router-link>
        </li>
        <li class="px-4 py-2 hover:bg-gray-700">
          <router-link to="/settings" class="block">Settings</router-link>
        </li>
      </ul>
    </nav>
  </aside>
</template>

<script>
export default {
  name: "SideBar",
};
</script>
