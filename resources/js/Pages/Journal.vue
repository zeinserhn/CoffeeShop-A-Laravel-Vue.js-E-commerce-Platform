<template>
    <Head>
        <title>Journal</title>
    </Head>
    <h1>Our Menu</h1>
    <div class="underline"></div>
    <div id="btns">
        <button id="allMenu">All</button>
        <button id="bf">breakfast</button>
        <button id="lunch">lunch</button>
        <button id="shakes">shakes</button>
        <button id="dinner">dinner</button>
    </div>
    <main>
        <article v-for="article in articles">
            <h2>{{ article.title }}</h2>
            <p>{{ article.description }}</p>
            <span>{{ article.date}}</span>
            <img :src="article.imageArticle">
        </article>
    </main>
</template>
<script setup>
let props = defineProps({
    articles: Object
});
</script>
<style scoped>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: hsl(210, 36%, 96%);
}

h1 {
    text-align: center;
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
</style>
