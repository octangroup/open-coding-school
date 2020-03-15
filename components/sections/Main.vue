<template>
  <div class="px-2 my-3 mx-auto py-6 h-100">
    <div class=" w-85  mx-auto card h-100 m-0 p-0 bg-primary flex rounded-lg">
      <div class="flex xs:block relative w-90 text-white mx-auto">
        <div class="w-60 md:w-100 xs:w-100 my-12 xs:px-3">
          <h2
            class="xs:text-3xl text-8xl leading-tight mb-6 font-primary my-0 capitalize"
          >
            Coding classes - open to everyone
          </h2>

          <div>
            <p class="text-xl my-5">
              The Open Coding School offers the full spectrum of programming
              courses which range from introductory courses for absolute
              beginners to masterclass courses for experienced software
              engineers. Our courses are designed to give you practical
              knowledge and help you apply it on concrete projects from day one.
            </p>
          </div>
          <div class="pt-4">
            <a href="#courses"
              ><button
                class="btn btn-accent text-black font-semibold  transition-250ms rounded-lg  border-1 mx-0"
              >
                Learn More
              </button></a
            >
          </div>
        </div>

        <div
          class="lg:w-65 w-50 absolute hidden xl:block lg:block lg:-t-5 -r-15 -t-10"
        >
          <img src="~/static/img/shape.png" class="w-100" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'MainSection'
}
</script>
