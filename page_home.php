<?php /* Template Name: Static Homepage */ ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package techinrwanda
 */

get_header();
?>
<div id="primary" class="w-100">
    <div class="panel-body  mx-auto py-3 h-100">
        <div class=" w-85  mx-auto card h-100 m-0 p-0 flex rounded-lg"
            style="background:linear-gradient(90deg, rgba(90, 0, 148, 1) 10%, rgba(40, 148, 241, 1) 100%);">
            <div class="flex xs:block relative w-90 text-white mx-auto">
                <div class="w-50 md:w-100 xs:w-100 my-5">
                    <h2 class="xs:text-3xl font-primary my-0">Learn

                        Coding Today</h2>

                    <div>
                        <p class="font-secondary">The Open Coding School offers the full spectrum of programming courses
                            which range from introductory courses for absolute beginners to masterclass courses for
                            experienced software engineers.
                            Our courses are designed to give you practical knowledge
                            and help you apply it on concrete projects from day one.

                        </p>
                    </div>
                    <div class=" pt-3">
                        <button class="btn btn-accent text-black font-bold  transition-250ms rounded-lg  border-1 mx-0">
                            Learn More

                    </div>

                </div>

                <div class="w-50 absolute hidden xl:block -r-15 -t-10">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Group 29.png" class="clip-full">

                </div>

            </div>

        </div>
    </div>
    <div class="panel-body w-85 mx-auto py-5 xs:py-0  h-100">
        <h4 class="text-2xl my-0 font-primary text-center font-bold">Courses We Offer</h4>
        <div class="py-3">
            <p class="font-secondary font-bold my-4">Beginner class</p>
            <div class="flex flex-wrap xs:block">

                <course-card icon-url="<?php echo get_template_directory_uri(); ?>/img/mobile-app.svg">
                    <template v-slot:title>
                        Mobile App
                    </template>
                    <template v-slot:subtitle>
                    In this course you will start out by prototyping mobile applications with different online tools like InVision, Figma and Thunkable
                    </template>
                     It is easy to get started with and at the same time the
                            language is versatile enough
                            to get you up to very advanced projects.
                            Learning Python is a great way to enter the world of algorithms and the logical thinking
                            that lies behind any piece of software. While some prior knowledge,
                            e.g. from a web development course, is useful, it is not strictly necessary.
                            You do, however, need to be ready to put in a lot of extra effort outside of class to manage
                            to crack the world of algorithms.
                    <template v-slot:starting>
                    This course starts: 3rd Feb 2020
                    </template>
                    <template v-slot:schedule>
                    Tuesdays and Thursdays from 6 PM - 8 PM
                    </template>
                </course-card>

            <div class="w-33 mx-2 pb-3 xs:mx-0 card xs:my-3 h-100 relative flex flex-wrap md:block border-1 border-solid border-green-light rounded-lg">
                    <div class="w-30 md:w-70 md:mx-auto pl-2">
                     <div class="h-18 w-rem-18 bg-green-lightest rounded-full mx-auto my-3"> <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/web-design.svg"
                                    class="pt-3 mx-3 "></div>
                        </div>
                        <div class="w-70 md:w-100 font-secondary my-2 pr-2">
                        <h4 class="my-0 text-xl md:text-center font-primary font-bold">Web Design</h4>
                            <p class="mt-2 mb-0 text-sm font-secondary">Learn to build great interactive websites and web
                                applications. You will be introduced to HTML, CSS and JavaScript ...</p>
                            <p class="text-xs text-blue font-bold font-primary my-0 text-right mr-3">Read More</p>
                        </div>
                        <div class="w-100 px-2">
                        <p class="text-sm font-secondary mt-0 align-items-center">along with a number of frameworks that help you use
                                    those programs more effectively.
                                    You will learn how to use online- and desktop code-editors,
                                    familiarize yourself with collaboration tools like GitHub and
                                    find out how to host your website effectively.
                                    This is the ideal introductory class for everyone who has no or
                                    little prior knowledge in software development and wants a practical hands-on way to
                                    get started in this field.
                                    </p>
                        <p class="my-2 text-sm font-bold"> This course starts: 3rd Feb 2020 </p>
                            <p class="my-2 text-sm font-bold">Tuesdays and Thursdays from 6 PM - 8 PM</p>

                            <p class="my-2 text-sm font-bold text-blue"> Register Now </p>
                        </div>
                </div>


                <div
                    class="w-33 mx-2 pb-3 xs:mx-0 card xs:my-3 h-100 relative flex flex-wrap md:block border-1 border-solid border-green-light rounded-lg">
                    <div class="w-30 md:w-70 md:mx-auto pl-2">
                        <div class="h-18 w-rem-18 bg-green-lightest rounded-full mx-auto my-3"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/mobile-app.svg" class="pt-3 mx-3 ">
                        </div>
                    </div>
                    <div class="w-70 md:w-100 font-primary my-2 pr-2">
                        <h4 class="my-0 text-xl md:text-center font-primary font-bold">Mobile App</h4>
                        <p class="mt-2 mb-0 text-sm font-secondary">In this course you will start out by prototyping
                            mobile applications with different online tools like InVision, Figma and Thunkable</p>
                        <p class="text-xs text-blue font-bold font-primary my-0 text-right mr-3">Read More</p>
                    </div>
                    <div class="w-100 px-2">
                            <p class="text-sm font-secondary mt-0 align-items-center">Thereafter you will be introduced
                                to programming mobile applications for Android phones with Java.
                                You will cover frameworks and best practices for creating the user interface and
                                learn how to create the backend-logic and the database-structure that supports your app.
                                Participants of this course should have some prior
                                knowledge of HTML and CSS and be very familiar with the functionalities of a broad
                                number of mobile applications.

                            </p>

                            <p class="my-2 text-sm font-bold"> This course starts: 3rd Feb 2020 </p>
                            <p class="my-2 text-sm font-bold">Tuesdays and Thursdays from 6 PM - 8 PM</p>

                            <p class="my-2 text-sm font-bold text-blue"> Register Now </p>
                    </div>

                </div>
           
                <div class="w-33 mx-2 pb-3 xs:mx-0 card xs:my-3 h-100 relative flex flex-wrap md:block border-1 border-solid border-green-light rounded-lg">
                    <div class="w-30 md:w-70 md:mx-auto pl-2">
                     <div class="h-18 w-rem-18 bg-green-lightest rounded-full mx-auto my-3"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/python.png" class="pt-3 mx-3 w-60"
                                class="pt-2 mx-3 "></div>
                    </div>
                    <div class="w-70 md:w-100 font-primary my-2 pr-2">
                    <h4 class="my-0 text-xl md:text-center font-primary font-bold">Python programming</h4>
                        <p class="mt-2 mb-0 text-sm font-secondary">Python is the world’s fastest growing programming
                            language. It has multiple applications in web development, data analytics and many other
                            fields...</p>
                        <p class="text-xs text-blue font-bold font-primary my-0 text-right mr-3">Read More</p>
                    </div>
                    <div class="w-100 px-2">
                    <p class="text-sm font-secondary mt-0 align-items-center">It is easy to get started with and at the same time the
                            language is versatile enough
                            to get you up to very advanced projects.
                            Learning Python is a great way to enter the world of algorithms and the logical thinking
                            that lies behind any piece of software. While some prior knowledge,
                            e.g. from a web development course, is useful, it is not strictly necessary.
                            You do, however, need to be ready to put in a lot of extra effort outside of class to manage
                            to crack the world of algorithms.
                        </p>
                        <p class="my-2 text-sm font-bold"> This course starts: 3rd Feb 2020 </p>
                        <p class="my-2 text-sm font-bold">Tuesdays and Thursdays from 6 PM - 8 PM</p>
                        <p class="my-2 text-sm font-bold text-blue"> Register Now </p>
                    </div>
                </div>

            </div>
        </div>


        <div class="py-4">
            <p class="font-secondary font-bold">Intermediate class</p>
            <div class="flex xs:block relative w-100 ">


                <div
                    class="xl:w-33 pb-3  mx-2 xs:mx-0 xs:my-3 card relative h-100 flex md:block bg-green-lighter   rounded-lg">
                    <div class="w-40 md:w-70 md:mx-auto">
                        <div class="h-18 w-rem-18 bg-pink-lightest rounded-full mx-3 my-3"> <img
                                src="<?php echo get_template_directory_uri(); ?>/img/web-design.svg" class="pt-3 mx-3 ">
                        </div>
                    </div>
                    <div class="w-60 md:w-100  my-2">
                        <h4 class="my-0 text-xl md:text-center font-primary">Web Design</h4>
                        <p class="my-2 text-xs font-secondary">This course brings you from an intermediate understanding
                            of web-development to an advanced level where you can build complex web applications.</p>
                        <p class="text-xs text-blue font-bold font-primary my-0 text-right mr-3">Read More</p>
                    </div>
                    <div class="hidden-temp">
                        <p class="text-xs font-secondary">You will learn new frameworks and best-practices and receive
                            one-on-one tutorage to solve the problems you face in your development-work. Participants
                            will be provided with a number of course-projects to complete but are welcome to also bring
                            questions from their own web-development projects to class.
                            This course is for you if have already got solid foundations in HTML/CSS and Javascript,
                            are familiar with at least one framework for HTML and one framework for JavaScript and
                            are ready to be intensively challenged and put in a significant amount of work into the
                            course-content outside
                            of class-hours. 


                        </p>
                    </div>
                </div>
                <div class="xl:w-33 pb-3 mx-2 xs:mx-0 card xs:my-3 h-100 flex md:block bg-green-lighter  rounded-lg">
                    <div class="w-40 md:w-70 md:mx-auto">
                        <div class="h-18 w-rem-18 bg-green-lightest rounded-full mx-3 my-3"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/mobile-app.svg" class="pt-3 mx-3 ">
                        </div>
                    </div>
                    <div class="w-60 md:w-100 font-primary my-2">
                        <h4 class="my-0 text-xl md:text-center font-primary">Mobile App</h4>
                        <p class="my-2 text-xs font-secondary">This course will boost your mobile app development skills
                            for and provide you with the tools and knowledge to build complex applications alone or in
                            teams..</p>
                        <p class="text-xs text-blue font-bold font-primary my-0 text-right mr-3">Read More</p>
                    </div>
                    <div class="hidden-temp">
                        <p class="text-xs font-secondary">We will focus on app development for Android with Java and
                            build a number of hands-on projects together. We will focus on the ins and outs of actually
                            making that app work and all participants will end up with a portfolio of apps they have
                            uploaded to the Android PlayStore.
                            To participate in this course you need to have solid foundational knowledge of mobile app
                            development with
                            Java for Android.
                            You need to already have created at least some simple Android applications and
                            be willing to put in a significant amount of work into the course-content outside of
                            class-hours.


                        </p>
                    </div>
                </div>

                <div class="xl:w-33 pb-3  mx-2 xs:mx-0 card xs:my-3 h-100 flex md:block  bg-green-lighter  rounded-lg">
                    <div class="w-40 md:w-70 md:mx-auto">
                        <div class="h-18 w-rem-18 bg-orange-lightest rounded-full mx-3 my-3"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/ruby.png" class="pt-3 mx-3 w-60 ">
                        </div>
                    </div>
                    <div class="w-60 md:w-100 font-primary my-2">
                        <h4 class="my-0 text-xl md:text-center font-primary">Ruby on Rails</h4>
                        <p class="my-3 text-xs font-secondary">For everyone who wants to work for tech-clients in Europe
                            or build their own scalable tech-product fast, Ruby on Rails is the go-to framework. ...</p>
                        <p class="text-xs text-blue font-bold font-primary my-0 text-right mr-3">Read More</p>
                    </div>

                    <div class="hidden-temp">
                        <p class="text-xs font-secondary">. Famous web applications built with Ruby on Rails include
                            Airbnb, GitHub and Dribble. In this course you will first be introduced to the Ruby
                            programming language and then learn the Rails framework and apply it to building a number of
                            web applications.
                            To take part in this course you should be familiar with HTML/CSS and
                            have intermediate knowledge in at least one programming language (e.g. JavaScript).


                        </p>
                    </div>

                </div>
            </div>







            <div class="py-4">
                <p class="font-secondary font-bold">Advanced class</p>
                <div class="flex xs:block">


                    <div class="w-33 h-32 mx-2 xs:mx-0 xs:my-3 card h-100 flex md:block bg-orange-lighter  rounded-lg">
                        <div class="w-40 md:w-70 md:mx-auto">
                            <div class="h-18 w-rem-18  mx-3 my-3"> <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/php.png" class="  w-90"></div>
                        </div>
                        <div class="w-60 md:w-100  my-2">
                            <h4 class="my-0 text-xl md:text-center font-primary">Advanced Software architecture with PHP
                            </h4>
                            <p class="my-2 text-xs font-secondary">In this course you will go beyond coding
                                best-practices and focus on questions of software architecture...</p>
                            <p class="text-xs text-blue font-bold font-primary my-0 text-right mr-3">Read More</p>
                        </div>
                        <div class="hidden-temp">
                            <p class="text-xs font-secondary">You will reflect on the driving factors of performance
                                reliability, scalability and security and how to optimize the architecture of your
                                software for those factors. You will also learn different state-of-the-art approaches to
                                defining requirements of your software and implementing them in your architecture
                                decisions. This course will use the Laravel framework. Our course projects will be
                                advanced web applications but you are welcome to bring questions to class from any type
                                of PHP project you are currently working on.
                                To ensure a homogenous level of the class we require all participants to have advanced
                                skills in PHP and be familiar with the Laravel framework.
                                Participants will need to show previous projects they have worked on during the
                                application process,
                                to verify their skill-level.


                            </p>
                        </div>

                    </div>
                    <div class="w-33 mx-2 h-32  xs:mx-0 card xs:my-3 h-100 flex md:block bg-orange-lighter  rounded-lg">
                        <div class="w-40 md:w-70 md:mx-auto">
                            <div class="h-18 w-rem-18 bg-green-lightest rounded-full mx-3 my-3"><img
                                    src="<?php echo get_template_directory_uri(); ?>/img/monitor.png"
                                    class="pt-3 mx-3 w-60"></div>
                        </div>
                        <div class="w-60 md:w-100 font-primary my-2">
                            <h4 class="my-0 text-xl md:text-center font-primary">Designing digital products</h4>
                            <p class="my-2 text-xs font-secondary">This course will dive into the best-practices of
                                UX/UI design for both web and mobile applications...</p>
                            <p class="text-xs text-blue font-bold font-primary my-0 text-right mr-3">Read More</p>
                        </div>
                        <div class="hidden-temp">
                            <p class="text-xs font-secondary">Furthermore you will learn the ins and outs of design
                                tools such as Figma and InVision. The entire course will be project driven. You will
                                work on a new prototype every to understand the usability and
                                user flow principles from a number of angles and go through the user journey ideation
                                on the example of different types of digital products.
                                This course is open both for front-end developers with a strong design
                                affinity and for advanced designers without web development knowledge.
                                The only requirement is that you already have experience designing
                                digital products and can show a portfolio of a number of digital product designs you
                                have created.  


                            </p>
                        </div>

                    </div>
                    <div class="w-33 mx-2 h-32 xs:mx-0 card xs:my-3 h-100 flex md:block bg-orange-lighter  rounded-lg">
                        <div class="w-40 md:w-70 md:mx-auto">
                            <div class="h-18 w-rem-18 bg-orange-lightest rounded-full mx-3 my-3"><img
                                    src="<?php echo get_template_directory_uri(); ?>/img/3d.png"
                                    class="pt-3 w-60 mx-3 "></div>
                        </div>
                        <div class="w-60 md:w-100 font-primary my-2">
                            <h4 class="my-0 text-xl md:text-center font-primary">DevOps</h4>
                            <p class="my-2 text-xs font-secondary">This master class focuses on the DevOps approach of
                                integrating software development and IT operations to achieve more faster and more
                                efficient release cycles...</p>
                            <p class="text-xs text-blue font-bold font-primary my-0 text-right mr-3">Read More</p>
                        </div>
                        <div class="hidden-temp">
                            <p class="text-xs font-secondary">The focus will be on covering the topic based on the
                                projects participants are currently working on outside of class. This will, however, be
                                supplemented by additional technology and tooling recommendations (focussing on AWS and
                                the Google Cloud Platform) and small exercise-projects to familiarize participants with
                                the recommended technologies and tools.
                                Master classes start on flexible dates.
                                  


                            </p>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>




    <div class="panel-body w-85 mx-auto py-4 h-100">
        <h4 class="text-xl font-primary font-bold">Advantages</h4>

        <div class="flex xs:block md:block  flex-wrap">
            <div class="w-45 md:w-100 xs:w-100 mx-2 card relative h-100 flex xs:block bg-grey-light rounded-lg">
                <div class="w-20  absolute">
                    <div
                        class="h-24 w-rem-24 bg-white absolute rounded-full -mx-12 xs:-mx-16 my-3 text-center py-3 px-5 text-4xl">
                        1</div>
                </div>
                <div class="w-80 xs:w-70  font-primary my-3 ml-10 relative">

                    <p class="font-bold">Experienced software developers as instructors</p>
                    <p class="my-3 text-xs md:text-sm font-secondary">
                        With years of experience in the software development industry, working both for national and
                        international clients, our developers know which skills the industry really needs. With their
                        assistance you will focus on applicable, practical knowledge and learn state-of-the-art
                        best-practices.
                    </p>

                </div>

            </div>
            <div
                class="w-45 xs:w-100 md:w-100 md:ml-0 md:my-5 xs:my-5 xs:ml-0 ml-12 card relative h-100 flex xs:block bg-grey-light rounded-lg">
                <div class="w-20  absolute">
                    <div
                        class="h-24 w-rem-24 bg-white absolute rounded-full -mx-12 xs:-mx-16 my-3 text-center py-3 px-5 text-4xl">
                        2
                    </div>
                </div>
                <div class="w-80 xs:w-70  font-primary  ml-10 relative">
                    <p class="font-bold">Project based learning - work on great digital products from day 1</p>
                    <p class="my-3 text-xs md:text-sm font-secondary">
                        We challenge you to work on concrete projects from day 1 - even in our introductory courses.
                        This helps you to always fully understand the practical relevance and application of every
                        single thing you learn. It also ensures that you leave our classes with fully job-ready skills
                        that allow you to be productive immediately.
                    </p>

                </div>

            </div>



            <div class="w-45 md:w-100 xs:w-100 mx-2 mt-3 card relative h-100 flex xs:block bg-grey-light  rounded-lg">
                <div class="w-20  absolute">
                    <div
                        class="h-24 w-rem-24 bg-white absolute rounded-full -mx-12 xs:-mx-16 my-3 text-center py-3 px-5 text-4xl">
                        3
                    </div>
                </div>
                <div class="w-80 xs:w-70  font-primary  ml-10 relative">
                    <p class="font-bold">Combining on-site courses with online-materials for maximum learning impact
                    </p>
                    <p class="my-3 text-xs md:text-sm font-secondary">
                        In your two weekly on-site classes you will receive input and personalized feedback on your
                        learning progress and project-work. This will challenge and push you to learn at maximum speed.
                        At the same time our online-materials will allow you to revise, continue learning and work on
                        your projects outside of class, at your own pace.</p>

                </div>


            </div>
        </div>


    </div>
    <div class=" w-100  h-100 py-5 mt-70"
        style="background:linear-gradient(90deg, rgba(90, 0, 148, 1) 5%, rgba(40, 148, 241, 1) 100%);">
        <div class="panel-body w-85 mx-auto  h-100">
            <div class="font-primary text-white ">
                <h4 class="text-3xl text-center font-primary my-3">Join Today</h4>

            </div>
            <div class=" text-white py-3 w-90 mx-auto">
                <div class="flex py-3">
                    <div class="w-8 text-white">

                        <img src="<?php echo get_template_directory_uri(); ?>/img/pin (1).png" class="">
                    </div>
                    <div class="w-90 mx-4">
                        <p class="text-xl my-0 font-light"> KG 8 Ave, House Kigali</p>
                    </div>
                </div>

                <div class="flex py-3">
                    <div class="w-8 text-white">

                        <img src="<?php echo get_template_directory_uri(); ?>/img/teacher.png" class="">
                    </div>
                    <div class="w-90 mx-4">
                        <p class="text-xl my-0 font-light">classes take place twice a week for two hours</p>
                    </div>
                </div>

                <div class="flex py-3">
                    <div class="w-8 text-white ">

                        <img src="<?php echo get_template_directory_uri(); ?>/img/tag.png" class="pt-2">
                    </div>
                    <div class="w-90 mx-4">
                        <p class="text-xl my-0 font-light">introductory and intermediate courses cost 40,000 RWF per
                            month, advanced courses cost 80,000 RWF per month</p>
                    </div>
                </div>

            </div>


        </div>

        <?php
get_footer();