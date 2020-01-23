<template>
    <div  class="w-33 mx-auto pb-3 xs:mx-0 card xs:my-3 h-100 relative flex flex-wrap md:block border-1 border-solid  rounded-lg" v-bind:class="[borderColor]">
                    <div class="w-30 md:w-70 md:mx-auto pl-2">
                        <div v-if="iconUrl" class="h-18 w-rem-18 rounded-full mx-auto my-3" v-bind:class="[iconColor]"><img
                                :src="iconUrl" class="pt-3 mx-3 ">
                        </div>
                    </div>
                    <div class="w-70 md:w-100 font-primary my-2 pr-2">
                        <h4 class="my-0 text-xl md:text-center font-primary font-bold">
                            <slot name="title"></slot>
                        </h4>
                        <p class="mt-2 mb-0 text-sm font-secondary">
                           <slot name="subtitle"></slot>
                        </p>
                        <p v-if="!showMore" @click="showMore = !showMore" class="text-xs text-blue font-bold font-primary my-0 text-right mr-3 cursor-pointer">Read More</p>
                    </div>
                    <div v-show="showMore" class="w-100 px-2">
                            <p class="text-sm font-secondary mt-0 align-items-center">
                                <slot></slot>
                            </p>

                            <p class="my-2 text-sm font-bold"> <slot name="starting"></slot> </p>
                            <p class="my-2 text-sm font-bold"> <slot name="schedule"></slot></p>

                            <a :href="url" class="my-2 text-sm font-bold text-blue"> {{preRegister ? 'Pre-register' : 'Register Now'}} </a>
                            <p v-if="showMore" @click="showMore = !showMore" class="text-xs text-blue font-bold font-primary my-0 text-right mr-3 cursor-pointer">Show less</p>
                    </div>

                </div>
           
</template>

<script>
    export default {
        name:'course-card',
        props: {
            url: {
                type: String,
                default: '#'
            }, iconUrl: {
                type: String,
                default:  null
            }, preRegister: {
                type: Boolean,
                default: false
            }, borderColor: {
                type: String,
                default: 'border-green-light'
            }, iconColor: {
                type: String,
                default: 'bg-green-lightest'
            }
            
            

        },
        data(){
            return {
              showMore: false  
            }
        }
    }
</script>
<style scoped>
    .w-33 {
        width: 33% !important;
    }
</style>