<template>
    <article class="my-8 border shadow-1">
        <header class="text-center container mt-20 mb-20">
            <h5><a target="_blank" :href="item.url" class="">
                <ais-highlight attribute="title" :hit="item"/>
            </a></h5>
        </header>
        <a target="_blank" :href="item.url"><img style="width: 100% !important;" class="mt-5 h-250" :src="item.image" alt="..."></a>

        <div class="card-body">
            <div class="row mb-5 small-2 text-lighter">
                <div class="col-auto">
                    <a class="text-inherit" target="_blank" :href="item.url">
                        <ais-highlight attribute="writer" :hit="item"/>
                    </a>
                    <span class="align-middle px-1">•</span>
                    <time datetime="2018-05-15T19:00">
                        <ais-highlight attribute="format_date" :hit="item"/>
                    </time>
                </div>
            </div>
            <a target="_blank" class="text-dark" :href="item.url">
                <p class="text-justify p-hover">
                    <ais-highlight attribute="abstract" :hit="item"/>
                </p>
            </a>
        </div>
    </article>

</template>

<script>
export default {
    name: "Article",
    props: ['item'],
}
</script>

<style>

.p-hover:hover{
    color: #0facf3 !important;
}

</style>
