<template>
  <nav class="bg-white flex flex-row justify-between h-12 md:px-4 shadow top-0 z-50">
    <a class="flex items-center text-teal-500 text-2xl font-bold md:font-normal no-underline h-12 w-20 md:w-32" :href="url.site">
      <img :src="generateUrl('logos/truong_dai_hoc_lac_hong_logo.svg')" alt="" class="w-full h-10 block">
      <span class="text-gray-700 font-bold md:block">Workspace</span>
    </a>

    <div class="md:flex">
      <div class="flex flex-row border-l h-full">
        <message-dropdown></message-dropdown>
        <profile-dropdown></profile-dropdown>
      </div>
    </div>
  </nav>
</template>

<script>
  import notificationDropdown from './notificationDropdown'
  import messageDropdown from './messageDropdown'
  import profileDropdown from './profileDropdown'
  export default {
    components: {notificationDropdown, messageDropdown, profileDropdown},
    data: () => ({
      token: Laravel.csrfToken,
      url: navUrl
    })
  }
</script>
