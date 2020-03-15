<template>
  <div
    class="w-32 md:w-45 sm:w-45 xs:w-100 mx-auto my-4 xs:mx-0 xs:my-4 transition-500ms"
    :class="{ 'h-100': showMore }"
  >
    <div
      class="pb-4 w-100 relative border-1 border-solid rounded-lg overflow-hidden"
      :class="[borderColor]"
    >
      <div class="w-100 my-0 transition-500ms overflow-hidden">
        <div
          v-if="iconUrl"
          class="w-100 py-18 flex justify-center items-center"
          :class="[iconColor]"
        >
          <img :src="iconUrl" class="w-rem-16" />
        </div>
        <div class="p-5">
          <h4
            class="my-0 md:text-center font-primary leading-tight"
            :class="{
              'h-rem-32 text-3xl': !showMore,
              'text-xl': showMore
            }"
          >
            {{ title }}
          </h4>
          <!-- <p v-show="!showMore" class="mt-3 mb-0 text-lg truncate">
            {{ subtitle }}
          </p> -->
          <div v-show="showMore">
            <!-- <div class="h-40 overflow-hidden"> -->
            <p ref="body" class="mt-3 mb-0 text-lg">
              {{ body }}
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
          </div>
          <!-- </div> -->
          <p
            class="text-xs font-bold text-xl mb-0 mt-6 mr-4 cursor-pointer opacity-70"
            @click="showMore = !showMore"
          >
            {{ showMore ? 'Show less' : 'Read more' }}
          </p>
        </div>
      </div>
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
.w-32 {
  width: 32% !important;
}
</style>
