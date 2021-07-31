<template>
    <div class="container pt-5">
        <h1 class="text-center">هرمس هاب</h1>

        <div class="alert alert-success mt-5" role="alert">
            به هرمس هاب خوش آمدید
        </div>

        <div class="card mb-5">
            <div class="card-body">
                هرمس هاب زیرساخت آنلاین خدمات بیمه، مختص اپلیکیشن ها و استارتاپ های حوزه بیمه با محصولات منحصر بفرد بیمه ای است.
                <p>جهت استعلام شرایط استفاده و کسب راهنمایی بیشتر با ما در تماس باشید</p>
            </div>
        </div>

<!--        <h3 class="my-5">محصولات بیمه ای ارائه شده در هرمس هاب</h3>-->
        <ul class="nav nav-tabs mb-3">
            <li class="nav-item">
                <a class="nav-link" @click.prevent="tab=0" :class="tab===0 ? 'active':''" href="#">اتومبیل</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" @click.prevent="tab=1" :class="tab===1 ? 'active':''" href="#">مسئولیت</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" @click.prevent="tab=2" :class="tab===2 ? 'active':''" href="#">عمر و حادثه</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" @click.prevent="tab=3" :class="tab===3 ? 'active':''" href="#">گردشگری و سفر</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" @click.prevent="tab=4" :class="tab===4 ? 'active':''" href="#">زندگی</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" @click.prevent="tab=5" :class="tab===5 ? 'active':''" href="#">درمان</a>
            </li>
        </ul>
        <div class="row">

            <div class="col-6 col-md-4 mb-3" v-if="tab===0">
                <div class="card">
                    <div class="card-header">
                        انحصاری هرمس هاب
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">بیمه بدنه کوتاه مدت</h5>
                        <p class="card-text">در این نوع بیمه بدنه، نیازی به اخذ بیمه بصورت سالیانه وجود ندارد و با یک الگوریتم محاسباتی امکان استعلام و صدور بیمه بدنه بصورتی که برای کاربر بصرفه و قابل پرداخت باشد وجود دارد.</p>
<!--                        <a href="#" class="btn btn-outline-secondary">صدور آزمایشی</a>-->
                    </div>
                </div>
            </div>




        </div>
    </div>
</template>

<script>
export default {
    name: "WelcomeComponent",
    data(){
        return{
            tab:0
        }
    }
}
</script>

<style scoped>

</style>
