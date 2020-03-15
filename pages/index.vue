<template>
  <div id="primary" class="w-100">
    <MainSection />
    <CourseSection />
  </div>
</template>

<script>
import MainSection from '~/components/sections/Main'
import CourseSection from '~/components/sections/Course'

export default {
  components: {
    MainSection,
    CourseSection
  }
}
</script>
