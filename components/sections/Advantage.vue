<template>
  <BodySection title="Advantages">
    <div class="flex xs:block md:block  flex-wrap mt-6">
      <AdvantageCard
        v-for="(element, index) in elements"
        :key="index"
        :index="index + 1"
        :color="element.color"
        :title="element.title"
        :body="element.body"
      />
    </div>
  </BodySection>
</template>

<script>
import BodySection from '~/components/sections/Body'
import AdvantageCard from '~/components/cards/Advantage'
export default {
  name: 'AdvantageSection',
  components: {
    BodySection,
    AdvantageCard
  },
  data() {
    return {
      elements: [
        {
          title: 'Experienced software developers as instructors',
          color: 'bg-green-lighter',
          body:
            'With years of experience in the software development industry, working both for national and international clients, our developers know which skills the industry really needs. With their assistance you will focus on applicable, practical knowledge and learn state-of-the-art best-practices.'
        },
        {
          title:
            'Project based learning - work on great digital products from day 1',
          color: 'bg-orange-lighter',
          body:
            'We challenge you to work on concrete projects from day 1 - even in our introductory courses. This helps you to always fully understand the practical relevance and application of every single thing you learn. It also ensures that you leave our classes with fully job-ready skills that allow you to be productive immediately.'
        },
        {
          title:
            'Combining on-site courses with online-materials for maximum learning impact',
          color: 'bg-red-lighter',
          body:
            'In your two weekly on-site classes you will receive input and personalized feedback on your learning progress and project-work. This will challenge and push you to learn at maximum speed. At the same time our online-materials will allow you to revise, continue learning and work on your projects outside of class, at your own pace.'
        }
      ]
    }
  }
}
</script>
