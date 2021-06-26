<template>
    <div class="container">


        <div class="mb-4 bg-light border rounded-3">
            <img src="/storage/bg1.jpg" class="img-fluid" alt="">
        </div>


        <div class="p-5 mb-4 bg-light border rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">درخواست فعال سازی API</h1>
                <p class="col-md-8 fs-4">
                    شما می توانید سرویس API خود را درخواست دهید تا در اولین فرصت درخواست شما بررسی شود و مستندات مورد نیاز در اختیار شما قرار بگیرد. در صورتی که هنوز درخواستی صادر نکرده اید و یا سرویس جدیدی نیاز دارید لطفا فرم را تکمیل نمایید.
                </p>
                <button class="btn btn-primary btn-lg" disabled type="button">درخواست جدید - بزودی</button>
            </div>
        </div>
        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-white bg-dark rounded-3">
                    <h2>دریافت گزارشات</h2>
                    <p>
                        می توانید درخواست گزارش عملکرد خود را بررسی کنید. در حال حاضز این سرویس فقط برای مشتری های ویژه فعال است. در صورتی که قصد استفاده از این سرویس را دارید، می توانید درخواست مشتری ویژه را تکمیل نمایید.
                    </p>
                    <button class="btn btn-outline-light" disabled type="button">مشتری ویژه شوید - بزودی</button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <h2>درخواست فعال سازی API</h2>
                    <p>
                        شما می توانید سرویس API خود را درخواست دهید تا در اولین فرصت درخواست شما بررسی شود و مستندات مورد نیاز در اختیار شما قرار بگیرد. در صورتی که هنوز درخواستی صادر نکرده اید و یا سرویس جدیدی نیاز دارید لطفا فرم را تکمیل نمایید.
                    </p>
                    <button class="btn btn-outline-secondary" disabled type="button">درخواست جدید - بزودی</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "HomeComponent"
}
</script>

<style scoped>
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
</style>
