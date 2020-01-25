<template>
    <div class="w-30 mx-auto pb-3 xs:mx-0  xs:my-3 h-100 relative p-2 border-1 border-solid  rounded-lg"
        v-bind:class="[borderColor]">
        <div class="w-100 font-primary my-2 px-2">
            <div v-if="iconUrl" class="h-18 w-rem-18 rounded-full mx-2 mr-3 mt-1 mb-3 mx float-left"
                v-bind:class="[iconColor]"><img :src="iconUrl" class="pt-3 mx-3 w-60">
            </div>
            <h4 class="my-2 text-xl md:text-center font-primary font-bold">
                <slot name="title"></slot>
            </h4>
            <!-- <div class="h-40 overflow-hidden"> -->
            <p ref="body" v-show="showMore" class="mt-2 mb-0 text-sm font-secondary">
                <slot></slot>
            </p>
             <p v-show="!showMore" class="mt-2 mb-0 text-sm font-secondary">
                {{subtitle}}
            </p>
            <div v-show="showMore">
                <p class="my-2 text-sm font-bold">
                    <slot name="starting"></slot>
                </p>
                <p class="my-2 text-sm font-bold">
                    <slot name="schedule"></slot>
                </p>
                <a target="_blank"
                    :href=" preRegister ? 'https://forms.gle/BYgx1miPYxUGc5qW8' : 'https://forms.gle/K3xB51gE39Ymqkco7'"
                    class="my-2 text-sm font-bold text-blue"> {{preRegister ? 'Pre-register' : 'Register Now'}} </a>
            </div>
            <!-- </div> -->
            <p @click="showMore = !showMore"
                class="text-xs text-blue font-bold font-primary my-0 text-right mr-3 cursor-pointer">
                {{ showMore ? 'Show less' : 'Read more'}}</p>
        </div>

    </div>

</template>

<script>
    export default {
        name: 'course-card',
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
            }
        },
        data() {
            return {
                showMore: false,
                slotText: ''
            }
        },
        mounted() {
            var text = this.$refs.body.innerHTML.replace(/(\r\n|\n|\r)/gm, "");
            text = text.replace(/\s+/g, " ");
            this.slotText = _.trim(text);
        },
        computed: {
            subtitle() {
                return _.truncate(this.slotText, {
                    'length': 200,
                    'separator': ' '
                });
            }
        }
    }
</script>
<style scoped>
    .w-33 {
        width: 33% !important;
    }
</style>