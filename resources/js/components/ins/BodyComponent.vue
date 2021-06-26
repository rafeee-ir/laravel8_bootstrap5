<template>
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <transition name="fade">
                    <img class="d-block mx-auto mb-4" src="/storage/logo.jpg" alt="" v-if="s===0">
                </transition>
                <h2>استعلام و صدور بیمه بدنه</h2>
                <transition name="fade">
                    <p class="lead" v-if="s===0">
                        در اینجا شما می توانید یک نمونه فرم بیمه بدنه را مشاهده کنید. در صورتی که شما بخواهید این نمونه
                        فرم
                        را در سیستم خود پیاده سازی نمایید می توانید از فیلدهای این فرم استفاده کنید.
                    </p>
                </transition>
            </div>
            <transition name="fade">
            <div class="progress" v-if="s>0">
                <div class="progress-bar bg-info progress-bar-striped" role="progressbar"
                     :style="'width: '+ ((s)*100)/(maxStep) +'%'"></div>
            </div>
            </transition>
            <!--            <div><span class="badge rounded-pill bg-info" v-if="step>0" v-on:click="step-=1" style="cursor: pointer">قبل</span></div>-->


            <div class="row g-5 mt-3">
                <h4 class="text-center">{{ bodySteps[s].title }}</h4>


                <!--Step0-->
                <div class="d-grid gap-2 col-6 mx-auto" v-if="s === 0">
                    <button class="btn btn-success" v-on:click.prevent="s=1,haghighi=true">حقیقی</button>
                    <button class="btn btn-outline-secondary" disabled type="button" @click="haghighi=false">حقوقی</button>
                </div>
                <!--Step1-->
                <div class="d-grid gap-2 col-6 mx-auto" v-if="s === 1">
                    <button class="btn btn-success" @click.prevent="s=2" @click="malek=false">راننده</button>
                    <button class="btn btn-outline-secondary" disabled type="button" @click="malek=true">مالک خودرو</button>
                </div>
                <!--Step2-->
                <div class="d-grid gap-2 col-6 mx-auto" v-if="s === 2">
                    <input type="number" class="form-control text-center" :class="melliCode.length!==10 ? 'border-danger':'border-success'" v-model="melliCode" style="font-weight: bolder;font-size: 1.5rem">
                    <button type="button" class="btn"  :class="melliCode.length!==10 ? 'btn-outline-danger':'btn-success'" :disabled="melliCode.length!==10" @click="MelliCodeValidation">استعلام بیمه گذار</button>

                </div>

                <small class="text-center">{{ bodySteps[s].help }}</small>
                <div class="text-center">
                <span class="badge bg-secondary bg-secondary" v-if="s>0" @click="s=s-1" style="cursor: pointer">مرحله قبل</span>
            </div>
            </div>
        </main>
    </div>
</template>

<script>
export default {
    name: "BodyComponent",
    data() {
        return {
            melliCode:'',
            haghighi: true,
            malek: false,
            s: 0,
            maxStep: 12,
            bodySteps: [
                {title: 'انتخاب نوع شخص', help: 'در این مرحله تعیین کنید که نوع شخص حقیقی یا حقوقی است.'},
                {
                    title: 'انتخاب نوع طرف قرارداد',
                    help: 'در صورتی که مالک و راننده خودرو یک نفر است گزینه راننده را انتخاب کنید.'
                },
                {
                    title: 'کد ملی را وارد کنید',
                    help:  'کد ملی بیمه گذار اصلی و دریافت کننده خسارت را وارد نمایید'
                },
                {
                    title: 'نوع طرف قرارداد',
                    help: 'در صورتی که مالک و راننده خودرو یک نفر است گزینه راننده را انتخاب کنید.'
                },
                {
                    title: 'نوع طرف قرارداد',
                    help: 'در صورتی که مالک و راننده خودرو یک نفر است گزینه راننده را انتخاب کنید.'
                },
            ],

        }
    },
    methods: {
        MelliCodeValidation: function (){

        }
    }
}
</script>

<style scoped>
.container {
    max-width: 960px;
}

.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}

.fade-enter-active, .fade-leave-active {
    transition: opacity .5s;
}

.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
{
    opacity: 0;
}
</style>
