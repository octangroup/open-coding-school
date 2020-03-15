<template>
  <footer class="w-100  flex-shrink-0">
    <div
      class="w-100 py-2  bg-primary-dark text-center min-h-auto h-auto xs:px-1 xs:mx-0"
    >
      <div class="panel-body py-0 flex w-85 xs:w-90 mx-auto xs:px-1 text-white">
        <div class="text-left text-white my-2 mr-auto text-sm xs:text-xs">
          <p class="m-0 text-xs">© {{ date }} Exponent Africa.</p>
        </div>
        <div class="ml-auto my-2 text-right text-sm xs:text-xs">
          <p class="m-0 text-xs">
            Developed by
            <a href="https://octangrp.com/" target="_blank"
              ><b>Octan Group.</b></a
            >
          </p>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: 'Footer',
  computed: {
    date() {
      return '2020'
    }
  }
}
</script>
