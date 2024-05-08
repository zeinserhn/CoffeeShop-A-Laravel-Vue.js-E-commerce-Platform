<template>
    <Head>
        <title>Journal</title>
    </Head>
    <Layout class="Layout"></Layout>
    <h1>Our Journales</h1>
    <div class="underline"></div>
    <main>
        <article v-for="article in articles">
            <label>Title :</label>
            <h2>{{ article.title }}</h2><br>
            <label>Description :</label>
            <p>{{ article.description }}</p><br>
            <span class="category">{{ article.category }}</span><br><br>
            <img :src="article.imageArticle"><br><br><br><br><br>
            <span>date : {{ article.date}}</span>


        </article>
    </main>
    <footer class="dark:bg-gray-900" id="footer">
    <div class="container px-6 py-12 mx-auto">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
            <div class="sm:col-span-2">
                <h1 class="max-w-lg text-xl font-semibold tracking-tight text-gray-800 xl:text-2xl dark:text-white">Subscribe our newsletter to get update.</h1>

                <div class="flex flex-col mx-auto mt-6 space-y-3 md:space-y-0 md:flex-row">
                    <input id="email" type="text" class="px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300" placeholder="Email Address">

                    <button class="w-full px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                        Subscribe
                    </button>
                </div>
            </div><br><br>

            <div>
                <p class="font-semibold text-gray-800 dark:text-white">Quick Link</p>

                <div class="flex flex-col items-start mt-5 space-y-2">
                    <a href="/" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Home</a>
                    <a href="/products" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">Products</a>
                    <a href="/about" class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:text-blue-500">About</a>
                </div>
            </div>
        </div>

        <hr class="my-6 border-gray-200 md:my-8 dark:border-gray-700">

        <div class="flex items-center justify-between">
            <a href="#">
                <img class="w-10 h-10 mb-3" src="/images/logo.png" alt="">
            </a>

            <div class="flex -mx-2">
                <a class="text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
            </div>
        </div>
    </div>
</footer>
</template>
<script setup>
import Layout from '../Shared/Layout.vue';
let props = defineProps({
    articles: Object
});
</script>
<style scoped>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: hsl(210, 36%, 96%);
}
.Layout{
  margin:0;
}

h1 {
    text-align: center;
    margin-top:2em;
    font-size:2em;
}

.underline {
    background: #c59d5f;
    width: 5em;
    height: .25em;
    margin-left: auto;
    margin-right: auto;
}

#btns {
    display: flex;
    justify-content: center;
    margin-top: 30px;
}

#btns button {
    margin-left: 2em;
    padding: 10px 20px;
    background-color: hsl(210, 36%, 96%);
    border: 1px solid #c59d5f;
    border-radius: 6px;
}

main {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 2em;
    margin-top: 70px;
    justify-content: center;
}
article{
  padding:2em;
  border:1px solid black;
}

article img {
    object-fit: cover;
    width: 250px;
    height: 150px;
    float: left;
    margin-right: 12px;
    border: 5px solid #c59d5f;
    border-radius: 7px;
}

article h2 {
    margin-top: 0;
    text-transform: capitalize;
    font-size: 1.5em;
}

article span {
    color: #c59d5f;
}
label{
    color:#c59d5f;
}
.category{
    background-color: #c59d5f;
    color:black;
    padding:.1em .7em;
}
#footer{
    background-color:#c59d5f;
    margin-top:2em;
}
</style>
