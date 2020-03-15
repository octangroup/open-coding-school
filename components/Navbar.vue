<template>
  <header id="masthead" class="w-100 relative z-999">
    <nav
      class="z-9999 transition-500ms w-100 text-black  bg-transparent m-0 t-0 l-0 r-0"
    >
      <div class="w-85  flex mx-auto py-6 mx-0">
        <ul class="w-50 lg:w-40 list mx-0 px-0 ">
          <li class="sm:w-40 m-0 px-0">
            <a href="" class="xl:text-3xl text-2xl  font-primary"
              ><Logo class="w-rem-12 mr-3" />
              <span class="xs:hidden"> {{ title }}</span>
            </a>
          </li>
        </ul>
        <ul
          class="list text-right w-50 lg:w-60  ml-auto  md:my-0 xs:my-0 px-0 mr-0  text-base"
        >
          <li class="inline-block ml-4 mr-0 lg:mr-0">
            <a
              target="_blank"
              href="https://forms.gle/K3xB51gE39Ymqkco7"
              class="mx-0"
            >
              <button
                class="btn btn-accent text-black transition-250ms rounded-lg font-bold border-1 mx-0"
              >
                Register
              </button>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- #masthead -->
</template>

<script>
import Logo from '~/components/Logo'
export default {
  name: 'Navbar',
  components: {
    Logo
  },
  computed: {
    title() {
      //   return process.env.npm_package_name
      return 'Open Coding School'
    }
  }
}
</script>
