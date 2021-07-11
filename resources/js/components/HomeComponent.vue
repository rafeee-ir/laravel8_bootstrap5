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
    name: "HomeComponent",
    mounted() {
        let myHeaders = new Headers();
        myHeaders.append("Content-Type", "application/x-www-form-urlencoded");
        myHeaders.append("Cookie", "AWN=.kosar-app-05; SESSION=MTAyMjBhZDEtM2I1My00MmY4LWIzYzItYjllZTA0ZTcwNThh; cookiesession1=678ADA6DKLMNOPQRSTUV0123454A6BA3");

        let urlencoded = new URLSearchParams();
        urlencoded.append("username", "s.bakhshi");
        urlencoded.append("password", "QWE!@#qwe123");
        urlencoded.append("grant_type", "password");

        let requestOptions = {
            method: 'POST',
            headers: myHeaders,
            body: urlencoded,
            redirect: 'follow'
        };

        fetch("https://mdapp.kins.ir/cins/login", requestOptions)
            .then(response => response.text())
            .then(result => console.log(result))
            .catch(error => console.log('error', error));

        // var axios = require('axios');
        // var qs = require('qs');
        // var data = qs.stringify({
        //     'username': 's.bakhshi',
        //     'password': 'QWE!@#qwe123',
        //     'grant_type': 'password'
        // });
        // var config = {
        //     method: 'post',
        //     url: 'https://mdapp.kins.ir/cins/login',
        //     headers: {
        //         'Content-Type': 'application/x-www-form-urlencoded',
        //         'Cookie': 'AWN=.kosar-app-05; SESSION=MTAyMjBhZDEtM2I1My00MmY4LWIzYzItYjllZTA0ZTcwNThh; cookiesession1=678ADA6DKLMNOPQRSTUV0123454A6BA3'
        //     },
        //     data : data
        // };
        //
        // axios(config)
        //     .then(function (response) {
        //         console.log(JSON.stringify(response.data));
        //     })
        //     .catch(function (error) {
        //         console.log(error);
        //     });

    }
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
