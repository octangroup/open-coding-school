<template>
  <div class="inline-flex w-45 md:w-100 my-18 mx-auto xs:w-100 xs:block">
    <div class="w-100 h-100 card relative xs:block rounded-lg" :class="[color]">
      <div class="w-20 absolute -ml-16 t-30">
        <div
          class="h-rem-24 w-rem-24 bg-white font-primary rounded-full my-0 text-center flex items-center justify-end pr-8 text-4xl"
        >
          {{ index }}
        </div>
      </div>
      <div class="my-6 pl-12 pr-6 relative">
        <h4 class="mt-0 mb-6 text-2xl font-primary leading-normal">
          {{ title }}
        </h4>
        <p class="my-3 text-lg md:text-sm">
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
      type: [String, Number],
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
