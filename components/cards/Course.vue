<template>
  <div
    class="w-30 md:w-45 sm:w-45 xs:w-100 mx-auto mb-6 pb-4 xs:mx-0 xs:my-4 h-100 relative p-3 border-1 border-solid rounded-lg transition-500ms"
    :class="[borderColor]"
  >
    <div class="w-100 font-primary my-3 px-3 transition-500ms overflow-hidden">
      <div class="flex">
        <div
          v-if="iconUrl"
          class="h-rem-18 w-rem-18 rounded-full flex justify-center items-center"
          :class="[iconColor]"
        >
          <img :src="iconUrl" class="w-60" />
        </div>
        <div class="pl-5 w-80 flex items-center">
          <h4 class="my-0 text-xl md:text-center font-primary font-bold">
            {{ title }}
          </h4>
        </div>
      </div>
      <!-- <div class="h-40 overflow-hidden"> -->
      <p v-show="showMore" ref="body" class="mt-3 mb-0 text-sm font-secondary">
        {{ body }}
      </p>
      <p v-show="!showMore" class="mt-3 mb-0 text-sm font-secondary h-rem-27">
        {{ subtitle }}
      </p>
      <div v-show="showMore">
        <p class="my-3 text-sm font-bold">
          {{ startDate }}
        </p>
        <p class="my-3 text-sm font-bold">
          {{ schedule }}
        </p>
        <a
          target="_blank"
          :href="
            preRegister
              ? 'https://forms.gle/BYgx1miPYxUGc5qW8'
              : 'https://forms.gle/K3xB51gE39Ymqkco7'
          "
          class="my-3 text-sm font-bold text-blue"
        >
          {{ preRegister ? 'Pre-register' : 'Register Now' }}
        </a>
      </div>
      <!-- </div> -->
      <p
        class="text-xs text-blue font-bold font-primary mb-0 mt-3 text-right mr-4 cursor-pointer"
        @click="showMore = !showMore"
      >
        {{ showMore ? 'Show less' : 'Read more' }}
      </p>
    </div>
  </div>
</template>

<script>
import truncate from 'lodash/truncate'
export default {
  name: 'CourseCard',
  props: {
    url: {
      type: String,
      default: '#'
    },
    iconUrl: {
      type: String,
      default: null
    },
    preRegister: {
      type: Boolean,
      default: false
    },
    borderColor: {
      type: String,
      default: 'border-green-light'
    },
    iconColor: {
      type: String,
      default: 'bg-green-lightest'
    },
    title: {
      type: String,
      default: ''
    },
    body: {
      type: String,
      default: ''
    },
    startDate: {
      type: String,
      default: ''
    },
    schedule: {
      type: String,
      default: ''
    }
  },
  data() {
    return {
      showMore: false
    }
  },
  computed: {
    subtitle() {
      return truncate(this.body, {
        length: 230,
        separator: ' '
      })
    }
  }
}
</script>
<style scoped>
.w-33 {
  width: 33% !important;
}
</style>
