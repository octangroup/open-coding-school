<template>
  <BodySection class="mt-12 bg-primary text-white" title="Join Today">
    <div class="text-white py-3 mx-auto w-90">
      <div class="xl:w-60">
        <div class="flex py-3">
          <div class="w-rem-6 text-white">
            <img src="~/static/icons/pin.png" class="" />
          </div>
          <div class="w-90 mx-4">
            <p class="text-xl xs:text-lg sm:text-lg my-0">
              <a
                target="_blank"
                href="https://g.page/octangrp?share"
                class="inherit-color no-underline"
                >27 Kg 8 Ave Kigali, Rwanda
              </a>
            </p>
          </div>
        </div>

        <div class="flex py-3">
          <div class="w-rem-6 text-white">
            <img src="~/static/icons/teacher.png" />
          </div>
          <div class="w-90 mx-4">
            <p class="text-xl xs:text-lg sm:text-lg my-0">
              Classes take place twice a week for two hours
            </p>
          </div>
        </div>

        <div class="flex py-3">
          <div class="w-rem-6 text-white ">
            <img src="~/static/icons/tag.png" class="pt-2" />
          </div>
          <div class="w-90 mx-4">
            <p class="text-xl xs:text-lg sm:text-lg my-0">
              Introductory and intermediate courses cost 40,000 RWF per month,
              advanced courses cost 80,000 RWF per month
            </p>
          </div>
        </div>
      </div>
    </div>
  </BodySection>
</template>
<script>
import BodySection from '~/components/sections/Body'
export default {
  name: 'JoinSection',
  components: {
    BodySection
  }
}
</script>
