<template>
    <Head>
       <title>Welcome</title>
    </Head>
    <section class="home" id="Home">
        <div class="content">
          <h3>fresh coffee in<span> the morning</span></h3>
          <p>Lorem Ipsum Dolor Sit Amet Consecteur Adipisicing Elit,Sit,Consquuntur?Et Veritatis velit Nesciunt Odio!</p>
          <a href="/products" class="btn">Get It Now</a>
        </div>
      </section>
</template>
    <style scoped >
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    *{
        font-family: 'Roboto', sans-serif;
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    :root{
        --main-color:#d3ad7f;
        --black:#13131a;
        --bg:#010103;
        --border:.1rem solid rgba(255,255,255,.3);
    }
    .home{
       position:fixed;
       display:flex;
       align-items:center;
       height:100vh;
       width:100%;
       background:url('../images/bg-home.jpeg');
       background-size:cover;
       background-position: center;

    }
    .home .content{
        color:#FFFFF0;
        margin-top:-20em;
        margin-left:8em;
    }
    .home .content h3{
        font-size:5em;
        text-transform:uppercase;
    }
    .home .content span{
        display:block;
    }
    .home .content p{
        font-size:1.5em;
        font-weight:600;

        margin-top:1em;
        margin-bottom:3em;
    }
    .home .content a{
        color:white;
        text-decoration:none;
        font-size:1.5em;
        background-color:#d3ad7f;
        padding:.6em 2.5em;
    }
    .home .content a:hover{
        letter-spacing:.1em;
    }

    </style>
<script>
import Layout from '../Shared/Layout.vue';
export default{
   layout:Layout
}
</script>
