<template>
  <div id="primary" class="w-100">
    <MainSection />
    <CourseSection />
    <AdvantageSection />
  </div>
</template>

<script>
import MainSection from '~/components/sections/Main'
import CourseSection from '~/components/sections/Course'
import AdvantageSection from '~/components/sections/Advantage'

export default {
  components: {
    MainSection,
    CourseSection,
    AdvantageSection
  }
}
</script>
