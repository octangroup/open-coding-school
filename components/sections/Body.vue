<template>
  <div :id="id" class="w-100 card px-0">
    <div
      class="card-body px-3 w-85 mx-auto py-5 xs:pt-5 xs:pb-3 transition-500ms h-100"
    >
      <h4 class="text-5xl my-4 font-primary text-center">
        {{ title }}
      </h4>
      <div class="py-3 transition-500ms"><slot></slot></div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'BodySection',
  props: {
    title: {
      type: String,
      default: ''
    },
    id: {
      type: [String, Number],
      default: () => {
        return Math.floor(Math.random() * 1000 + 1)
      }
    }
  }
}
</script>
