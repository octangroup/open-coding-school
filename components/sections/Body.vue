<template>
  <div
    :id="id"
    class="panel-body w-85 mx-auto py-5 xs:pt-5 xs:pb-3 transition-500ms h-100"
  >
    <h4 class="text-2xl my-0 font-primary text-center font-bold">
      {{ title }}
    </h4>
    <div class="py-3 transition-500ms"><slot></slot></div>
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
