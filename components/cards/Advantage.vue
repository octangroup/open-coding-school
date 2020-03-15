<template>
  <div class="inline-flex w-45 md:w-100 my-5 mx-auto xs:w-100 xs:block">
    <div class="w-100 h-100 card relative xs:block rounded-lg" :class="[color]">
      <div class="w-20 absolute -ml-16">
        <div
          class="h-rem-24 w-rem-24 bg-white  rounded-full my-3 text-center flex items-center justify-end pr-8 text-4xl"
        >
          {{ index }}
        </div>
      </div>
      <div class="font-primary my-3 pl-12 pr-6 relative">
        <h4 class="font-bold mt-0 mb-4 text-lg">{{ title }}</h4>
        <p class="my-3 text-xs md:text-sm font-secondary">
          {{ body }}
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'AdvantageCard',
  props: {
    index: {
      type: String,
      default: ''
    },
    title: {
      type: String,
      default: ''
    },
    body: {
      type: String,
      default: ''
    },
    color: {
      type: String,
      default: 'bg-green-lighter'
    }
  }
}
</script>
