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
                        <p class="font-secondary">What are you working on? Dribbble is a community of designers sharing

                            screenshots of their work, process, and projects., What are you working on?

                            Dribbble is a community of designers sharing screenshots of their work,

                            process, and projects,designers sharing screenshots.
                        </p>
                    </div>
                    <div class=" pt-3">
                        <button
                            class="btn btn-accent text-black font-bold  transition-250ms rounded-lg  border-1 mx-0">
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
        <h4 class="text-xl font-primary font-bold">Courses</h4>

        <div class="flex xs:block">
            <div
                class="w-33 mx-2 xs:mx-0 xs:my-3 card h-100 flex md:block  border-1 border-solid border-red rounded-lg">
                <div class="w-40 md:w-70 md:mx-auto">
                    <div class="h-18 w-rem-18 bg-pink-lighter rounded-full mx-3 my-3"> <img src="<?php echo get_template_directory_uri(); ?>/img/web-design.svg"
                            class="pt-3 mx-3 "></div>
                </div>
                <div class="w-60 md:w-100  my-2">
                    <h4 class="my-0 text-xl md:text-center font-primary">Web Design</h4>
                    <p class="my-3 text-xs font-secondary">What are you working on?Dribble is a community of designers
                        sharing screenshots of their work.</p>

                </div>

            </div>
            <div
                class="w-33 mx-2 xs:mx-0 card xs:my-3 h-100 flex md:block border-1 border-solid border-green rounded-lg">
                <div class="w-40 md:w-70 md:mx-auto">
                    <div class="h-18 w-rem-18 bg-green-lighter rounded-full mx-3 my-3"><img src="<?php echo get_template_directory_uri(); ?>/img/mobile-app.svg"
                            class="pt-3 mx-3 "></div>
                </div>
                <div class="w-60 md:w-100 font-primary my-2">
                    <h4 class="my-0 text-xl md:text-center font-primary">Mobile App</h4>
                    <p class="my-3 text-xs font-secondary">What are you working on?Dribble is a community of designers
                        sharing screenshots of their work.</p>

                </div>

            </div>
            <div
                class="w-33 mx-2 xs:mx-0 card xs:my-3 h-100 flex md:block  border-1 border-solid border-orange rounded-lg">
                <div class="w-40 md:w-70 md:mx-auto">
                    <div class="h-18 w-rem-18 bg-orange-lighter rounded-full mx-3 my-3"><img src="<?php echo get_template_directory_uri(); ?>/img/vr-glasses.svg"
                            class="pt-2 mx-3 "></div>
                </div>
                <div class="w-60 md:w-100 font-primary my-2">
                    <h4 class="my-0 text-xl md:text-center font-primary">Virtual Reality</h4>
                    <p class="my-3 text-xs font-secondary">What are you working on?Dribble is a community of designers
                        sharing screenshots of their work.</p>

                </div>

            </div>

        </div>

    </div>

    <div class="panel-body w-85 mx-auto py-4 h-100">
        <h4 class="text-xl font-primary font-bold">Advantages</h4>

        <div class="flex xs:block md:block">
            <div class="w-45 md:w-100 xs:w-100 mx-2 card relative h-100 flex xs:block bg-green-lighter rounded-lg">
                <div class="w-40  absolute">
                    <div
                        class="h-24 w-rem-24 bg-white absolute rounded-full -mx-12 xs:-mx-16 my-3 text-center py-3 px-5 text-4xl">
                        1</div>
                </div>
                <div class="w-60 xs:w-70  font-primary my-3 mx-auto relative">

                    <p class="my-3 text-xs md:text-sm font-secondary">What are you working on?Dribble is a community of
                        designers sharing screenshots of their work.What are you working on?Dribble is a community of
                        designers sharing screenshots of their work</p>

                </div>

            </div>
            <div
                class="w-45 xs:w-100 md:w-100 md:ml-0 md:my-5 xs:my-5 xs:ml-0 ml-32 card relative h-100 flex xs:block bg-orange-light rounded-lg">
                <div class="w-40  absolute">
                    <div
                        class="h-24 w-rem-24 bg-white absolute rounded-full -mx-12 xs:-mx-16 my-3 text-center py-3 px-5 text-4xl">
                        2</div>
                </div>
                <div class="w-60 xs:w-70  font-primary my-3 mx-auto relative">

                    <p class="my-3 text-xs md:text-sm font-secondary">What are you working on?Dribble is a community of
                        designers sharing screenshots of their work.What are you working on?Dribble is a community of
                        designers sharing screenshots of their work</p>

                </div>

            </div>
        </div>
    </div>
    <div class=" w-100  h-100 py-5 mt-70"
        style="background:linear-gradient(90deg, rgba(90, 0, 148, 1) 5%, rgba(40, 148, 241, 1) 100%);">
        <div class="panel-body w-85 mx-auto  h-100">
            <div class="font-primary text-center py-3 text-white ">
                <h4 class="text-3xl font-primary my-3">Don’t wait anymore</h4>
                <div class="w-35 xs:w-100 md:w-100 font-primary text-center mx-auto">
                    <p class="font-secondary text-sm">Nine out of ten doctors recommend Open Coding School over
                        competing brands. Come inside, see for yourself, and massively
                        level up your development skills in the process.

                        Start learning today by registering</p>
                </div>

            </div>
            <div class="text-center pt-3">
                <button class="btn btn-accent  text-black  transition-250ms rounded-lg font-bold border-1 mx-0">
                    Register

            </div>

        </div>
    </div>

<?php
get_footer();