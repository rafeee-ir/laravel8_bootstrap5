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
                <div class="progress" v-if="s>0" style="height: 2px;">
                    <div class="progress-bar progress-bar-striped"
                         :class="((s)*100)/(maxStep) === 100 ? 'bg-success' : 'bg-info progress-bar-animated'"
                         role="progressbar"
                         :style="'width: '+ ((s)*100)/(maxStep) +'%'"></div>
                </div>
            </transition>
            <div class="row g-5 mt-3">
                <h4 class="text-center">{{ bodySteps[s].title }}</h4>


                <!--Step0-->
                <div class="d-grid gap-2 col-md-6 mx-auto" v-if="s === 0">
                    <button class="btn btn-success" v-on:click.prevent="s=1 ; haghighi=true">حقیقی</button>
                    <button class="btn btn-outline-secondary" disabled type="button" @click="haghighi=false">حقوقی
                    </button>
                </div>

                <!--Step1-->
                <div class="d-grid gap-2 col-md-6 mx-auto" v-if="s === 1">
                    <button class="btn btn-success" @click.prevent="s=2 ; malek=false">راننده</button>
                    <button class="btn btn-outline-secondary" disabled type="button" @click="malek=true">مالک خودرو
                    </button>
                </div>

                <!--Step2-->
                <div class="d-grid gap-2 col-md-7 mx-auto" v-if="s === 2">
                    <form @submit.prevent="MelliCodeValidation()">
                        <div class="d-grid gap-2">

                            <input type="number" maxlength="10" minlength="10" class="form-control text-center"
                                   :readonly="natijehEstelamCodeMelli"
                                   :class="melliCode.length!==10 ? 'border-danger':'border-success'" v-model="melliCode"
                                   style="font-weight: bolder;font-size: 1.5rem">
                            <button v-if="!natijehEstelamCodeMelli" type="submit" class="btn"
                                    :class="melliCode.length!==10 ? 'btn-outline-danger':'btn-info'"
                                    :disabled="melliCode.length!==10">استعلام بیمه گذار
                            </button>
                        </div>
                    </form>
                </div>
                <div class="d-grid gap-2 col-md-7 mx-auto" v-if="s === 2">

                    <div class="" v-if="natijehEstelamCodeMelli">
                        <table class="table table-striped text-center">
                            <tbody>
                            <tr>
                                <td>نام</td>
                                <td>هادی</td>
                            </tr>
                            <tr>
                                <td>نام خانوادگی</td>
                                <td>رفیعی</td>
                            </tr>
                            <tr>
                                <td>کد ملی</td>
                                <td>{{ melliCode }}</td>
                            </tr>
                            <tr>
                                <td>تاریخ تولد</td>
                                <td>1400/04/12</td>
                            </tr>
                            <tr>
                                <td>نام پدر</td>
                                <td>علی</td>
                            </tr>
                            <tr>
                                <td>شماره شناسنامه</td>
                                <td>25631</td>
                            </tr>
                            <tr>
                                <td>ملیت</td>
                                <td>ایران</td>
                            </tr>
                            <tr>
                                <td>جنسیت</td>
                                <td>مرد</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-success" @click.prevent="s=3">تایید مشخصات راننده (بیمه
                                گذار)
                            </button>
                            <button type="button" class="btn btn-outline-secondary"
                                    @click="natijehEstelamCodeMelli=false; melliCode=''; step=2"
                                    v-if="natijehEstelamCodeMelli">اصلاح کد ملی
                            </button>
                        </div>
                    </div>
                </div>

                <!--Step3-->
                <div class="d-grid gap-2 col-md-6 mx-auto" v-if="s === 3">

                    <!--                    <input type="number" maxlength="10" class="form-control" placeholder="مثال: 1456987852">-->
                    <form @submit.prevent="s=4">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="inputCity" class="form-label">شهر محل سکونت</label>

                                <v-select class="vue-select1" id="inputCity" name="city" :options="options1"
                                          v-model="result1" required>
                                </v-select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputTel" class="form-label">تلفن</label>
                                <input type="tel" class="form-control" id="inputTel" name="tel" required maxlength="11"
                                       minlength="8">
                            </div>
                            <div class="col-md-6">
                                <label for="inputMobile" class="form-label">تلفن همراه</label>
                                <input type="tel" class="form-control" id="inputMobile" name="mobile" required
                                       maxlength="11" minlength="11">
                            </div>
                            <div class="col-12">
                                <label for="inputPostalCode" class="form-label">کد پستی 10 رقمی</label>
                                <input type="" maxlength="10" minlength="10" class="form-control" name="postalCode"
                                       id="inputPostalCode" required placeholder="مثال: 1465986574">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">آدرس</label>
                                <input type="text" class="form-control" id="inputAddress" name="address" required>
                            </div>
                            <button class="btn btn-success" type="submit">مرحله بعد</button>

                        </div>
                    </form>
                </div>

                <!--Step4-->
                <div class="d-grid gap-2 col-md-6 mx-auto" v-if="s === 4">

                    <!--                    <input type="number" maxlength="10" class="form-control" placeholder="مثال: 1456987852">-->
                    <form @submit.prevent="s=5">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="inputCar" class="form-label">تیپ خودرو</label>
                                <v-select class="vue-select1" id="inputCar" name="car" :options="options1"
                                          v-model="result1" required>
                                </v-select>
                            </div>
                            <div class="col-12">
                                <label for="inputCarColor" class="form-label">رنگ خودرو</label>
                                <v-select class="vue-select1" id="inputCarColor" name="carColor" :options="options1"
                                          v-model="result1" required>
                                </v-select>
                            </div>
                            <div class="col-12">
                                <label for="inputCarUse" class="form-label">مورد استفاده خودرو</label>
                                <v-select class="vue-select1" id="inputCarUse" name="carUse" :options="options1"
                                          v-model="result1" required>
                                </v-select>
                            </div>
                            <div class="col-12">
                                <label for="inputCarYear" class="form-label">سال ساخت خودرو</label>
                                <v-select class="vue-select1" id="inputCarYear" name="carUse" :options="options2"
                                          v-model="result2" required>
                                </v-select>
                            </div>
<!--                            <div class="col-md-6">-->
<!--                                <label for="inputTel" class="form-label">سال</label>-->
<!--                                <input type="tel" class="form-control" id="inputTel" name="tel" required maxlength="11"-->
<!--                                       minlength="8">-->
<!--                            </div>-->
<!--                            <div class="col-md-6">-->
<!--                                <label for="inputMobile" class="form-label">تلفن همراه</label>-->
<!--                                <input type="tel" class="form-control" id="inputMobile" name="mobile" required-->
<!--                                       maxlength="11" minlength="11">-->
<!--                            </div>-->
<!--                            <div class="col-12">-->
<!--                                <label for="inputPostalCode" class="form-label">کد پستی 10 رقمی</label>-->
<!--                                <input type="" maxlength="10" minlength="10" class="form-control" name="postalCode"-->
<!--                                       id="inputPostalCode" required placeholder="مثال: 1465986574">-->
<!--                            </div>-->
<!--                            <div class="col-12">-->
<!--                                <label for="inputAddress" class="form-label">آدرس</label>-->
<!--                                <input type="text" class="form-control" id="inputAddress" name="address" required>-->
<!--                            </div>-->
                            <button class="btn btn-success" type="submit">مرحله بعد</button>

                        </div>
                    </form>
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
            result1: 'تهران',
            options1: [
                "تهران",
                "کرج",
                "تبریز"
            ],
            result2: '1400',
            options2: [
                "1400",
                "1401",
                "1402"
            ],
            natijehEstelamCodeMelli: false,
            melliCode: '',
            haghighi: true,
            malek: false,
            s: 0,
            maxStep: 6,
            bodySteps: [
                {title: 'انتخاب نوع شخص', help: 'در این مرحله تعیین کنید که نوع شخص حقیقی یا حقوقی است.'},
                {
                    title: 'انتخاب نوع طرف قرارداد',
                    help: 'در صورتی که مالک و راننده خودرو یک نفر است گزینه راننده را انتخاب کنید.'
                },
                {
                    title: 'کد ملی را وارد کنید',
                    help: 'کد ملی بیمه گذار اصلی و دریافت کننده خسارت را وارد نمایید'
                },
                {
                    title: 'مشخصات ارتباطی بیمه گذار',
                    help: 'لطفا مشخصات ارتباطی فردی که مورد نظر بیمه است را در این قسمت وارد نمایید'
                },
                {
                    title: 'مشخصات وسیله نقلیه',
                    help: ''
                },
                {
                    title: 'اطلاعات بیمه نامه',
                    help: ''
                }
            ],

        }
    },
    methods: {
        MelliCodeValidation: function () {
            this.natijehEstelamCodeMelli = true;

        }
    }
}
</script>

<style scoped>
.container {
    max-width: 960px;
}


.fade-enter-active, .fade-leave-active {
    transition: opacity .5s;
}

.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
{
    opacity: 0;
}
</style>
