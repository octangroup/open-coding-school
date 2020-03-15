<template>
  <BodySection title="Courses we offer">
    <div
      v-for="(course, i) in coursers"
      :key="i"
      class="transition-500ms"
      :class="{ 'mb-32': i < coursers.length - 1 }"
    >
      <h4 class="font-primary font-bold my-4 text-4xl">{{ course.title }}</h4>
      <div class="flex flex-wrap xs:block transition-500ms">
        <CourseCard
          v-for="(card, key) in course.cards"
          :key="key"
          :title="card.title"
          :body="card.body"
          :icon-url="card.icon"
          :border-color="card.borderColor"
          :icon-color="card.iconColor"
          :start-date="card.startDate"
          :schedule="card.schedule"
        />
      </div>
    </div>
  </BodySection>
</template>

<script>
import BodySection from '~/components/sections/Body'
import CourseCard from '~/components/cards/Course'
export default {
  name: 'CourseSection',
  components: {
    BodySection,
    CourseCard
  },
  data: () => {
    return {
      coursers: [
        {
          title: 'Introductory classes',
          cards: [
            {
              title: 'Introduction to web development',
              body:
                'Learn to build great interactive websites and web applications. You will be introduced to HTML, CSS and JavaScript along with a number of frameworks that help you use those programs more effectively. You will learn how to use online- and desktop code-editors, familiarize yourself with collaboration tools like GitHub and find out how to host your website effectively. This is the ideal introductory class for everyone who has no or little prior knowledge in software development and wants a practical hands-on way to get started in this field.',
              icon: '/icons/web.png',
              borderColor: 'border-green-light',
              iconColor: 'bg-green-lightest',
              // startDate: 'This course starts: 10th Feb 2020',
              schedule: 'Mondays and Wednesdays from 6 PM - 8 PM'
            },
            {
              title: 'Introduction to mobile app development',
              body:
                'In this course you will start out by prototyping mobile applications with different online tools like InVision, Figma and Thunkable. Thereafter you will be introduced to programming mobile applications for Android phones with Kotlin. You will cover frameworks and best practices for creating the user interface and learn how to create the backend-logic and the database-structure that supports your app. Participants of this course should have some prior knowledge of HTML and CSS and be very familiar with the functionalities of a broad number of mobile applications.',
              icon: '/icons/app.png',
              borderColor: 'border-green-light',
              iconColor: 'bg-green-lightest',
              // startDate: 'This course starts: 11th Feb 2020',
              schedule: 'Tuesdays and Thursdays from 6 PM - 8 PM'
            },
            {
              title: 'Introduction to Python programming',
              body:
                'Python is the world’s fastest growing programming language. It has multiple applications in web development, data analytics and many other fields. It is easy to get started with and at the same time the language is versatile enough to get you up to very advanced projects. Learning Python is a great way to enter the world of algorithms and the logical thinking that lies behind any piece of software. While some prior knowledge, e.g. from a web development course, is useful, it is not strictly necessary. You do, however, need to be ready to put in a lot of extra effort outside of class to manage to crack the world of algorithms.',
              icon: '/icons/python.png',
              borderColor: 'border-green-light',
              iconColor: 'bg-green-lightest',
              startDate: 'This course starts in May'
            }
          ]
        },
        {
          title: 'Intermediate classes',
          cards: [
            {
              title: 'From intermediate to advanced web development',
              body:
                'This course brings you from an intermediate understanding of web-development to an advanced level where you can build complex web applications. You will learn new frameworks and best-practices and receive one-on-one tutorage to solve the problems you face in your development-work. Participants will be provided with a number of course-projects to complete but are welcome to also bring questions from their own web-development projects to class. This course is for you if have already got solid foundations in HTML/CSS and Javascript, are familiar with at least one framework for HTML and one framework for JavaScript and are ready to be intensively challenged and put in a significant amount of work into the course-content outside of class-hours.',
              icon: '/icons/web_2.png',
              borderColor: 'border-orange',
              iconColor: 'bg-orange-lighter',
              // startDate: 'This course starts: 10th Feb 2020',
              schedule: 'Mondays and Wednesdays from 6 PM - 8 PM'
            },
            {
              title: 'From intermediate to advanced mobile app development',
              body:
                'This course will boost your mobile app development skills for and provide you with the tools and knowledge to build complex applications alone or in teams. We will focus on app development for Android with Kotlin and build a number of hands-on projects together. We will focus on the ins and outs of actually making that app work and all participants will end up with a portfolio of apps they have uploaded to the Android PlayStore. To participate in this course you need to have solid foundational knowledge of mobile app development with Kotlin for Android. You need to already have created at least some simple Android applications and be willing to put in a significant amount of work into the course-content outside of class-hours.',
              icon: '/icons/app_2.png',
              borderColor: 'border-orange',
              iconColor: 'bg-orange-lighter',
              schedule: 'Tuesdays and Thursdays from 6 PM - 8 PM'
            },
            {
              title: 'Ruby on Rails',
              body:
                'For everyone who wants to work for tech-clients in Europe or build their own scalable tech-product fast, Ruby on Rails is the go-to framework. Famous web applications built with Ruby on Rails include Airbnb, GitHub and Dribble. In this course you will first be introduced to the Ruby programming language and then learn the Rails framework and apply it to building a number of web applications. To take part in this course you should be familiar with HTML/CSS and have intermediate knowledge in at least one programming language (e.g. JavaScript).',
              icon: '/icons/ruby.png',
              borderColor: 'border-orange',
              iconColor: 'bg-orange-lighter',
              startDate: 'This course starts in May'
            }
          ]
        },
        {
          title: 'Advanced classes',
          cards: [
            {
              title: 'Advanced software architecture with PHP',
              body:
                'In this course you will go beyond coding best-practices and focus on questions of software architecture. You will reflect on the driving factors of performance reliability, scalability and security and how to optimize the architecture of your software for those factors. You will also learn different state-of-the-art approaches to defining requirements of your software and implementing them in your architecture decisions. This course will use the Laravel framework. Our course projects will be advanced web applications but you are welcome to bring questions to class from any type of PHP project you are currently working on. To ensure a homogenous level of the class we require all participants to have advanced skills in PHP and be familiar with the Laravel framework. Participants will need to show previous projects they have worked on during the application process, to verify their skill-level.',
              icon: '/icons/php.png',
              borderColor: 'border-red-light',
              iconColor: 'bg-red-lighter',
              // startDate: 'This course starts: 10th Feb 2020',
              startDate: 'This course starts in June'
            },
            {
              title: 'Designing digital products',
              body:
                'This course will dive into the best-practices of UX/UI design for both web and mobile applications. Furthermore you will learn the ins and outs of design tools such as Figma and InVision. The entire course will be project driven. You will work on a new prototype every to understand the usability and user flow principles from a number of angles and go through the user journey ideation on the example of different types of digital products. This course is open both for front-end developers with a strong design affinity and for advanced designers without web development knowledge. The only requirement is that you already have experience designing digital products and can show a portfolio of a number of digital product designs you have created.',
              icon: '/icons/ux.png',
              borderColor: 'border-red-light',
              iconColor: 'bg-red-lighter',
              startDate: 'This course starts in June'
            },
            {
              title: 'DevOps',
              body:
                'This master class focuses on the DevOps approach of integrating software development and IT operations to achieve more faster and more efficient release cycles. The focus will be on covering the topic based on the projects participants are currently working on outside of class. This will, however, be supplemented by additional technology and tooling recommendations (focussing on AWS and the Google Cloud Platform) and small exercise-projects to familiarize participants with the recommended technologies and tools.',
              icon: '/icons/software.png',
              borderColor: 'border-red-light',
              iconColor: 'bg-red-lighter',
              startDate: 'This course starts in June'
            }
          ]
        }
      ]
    }
  }
}
</script>
