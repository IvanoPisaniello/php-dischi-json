<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>php-dischi-json</title>
</head>

<body>
    <div id="app">
        <header class="px-5 py-2">
            <img src="./img/favicon.ico" alt="" class="logo">
        </header>
        <div class="container py-5">
            <div class="row gap-3 justify-content-center">
                <div class="col-3" v-for="(disco, index) in dischi">
                    <div class="card p-5">
                        <img :src="disco.poster" alt="" class="image-card">
                        <div class="text-center text-white">
                            <h5 class="card-title">{{disco.title}}</h5>
                            <p class="card-text"> {{disco.author}}</p>
                            <h5 class="card-text"> {{disco.year}}</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>